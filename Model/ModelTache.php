<?php

include '../Config.php';
function LoadUserTasksFromDb($ID) {
    $pdo = ConnectToDatabase();
    // SQL query to get tasks for the user grouped by courses
    $sql = "SELECT users.ID, tache.DES_TACHE, tache.ID_TACHE, cours.NOM_COURS, todo.COMPLETE 
            FROM users 
            INNER JOIN todo ON users.ID = todo.ID_USER 
            INNER JOIN tache ON tache.ID_TACHE = todo.ID_TACHE 
            INNER JOIN cours ON cours.ID_COURS = tache.ID_COURS 
            WHERE users.ID = :ID";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':ID', $ID, PDO::PARAM_INT);
    $stmt->execute();

    $tasksByCourse = [];
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $courseName = $row['NOM_COURS'];
            // Group tasks by course
            $tasksByCourse[$courseName][] = $row;
        }
    }

    $pdo = null;
    return $tasksByCourse;
}

function AddTache($Data){
    $pdo = ConnectToDatabase();
    $sql = "INSERT INTO tache(ID_COURS,DES_TACHE)
    VALUES(".$Data['cours'].",'".$Data['description']."');";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $task_id = $pdo->lastInsertId();
    
    
    // // Fetch all users subscribed to the course
    $sql = "SELECT ID_USER,ID_COURS FROM todo WHERE ID_COURS = :cours";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':cours' => $Data['cours']
    ]);
    
    while ($user = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Check if the task is already assigned to the user
        $checkSql = "SELECT * FROM todo WHERE ID_USER = :user_id AND ID_TACHE = :task_id";
        $checkStmt = $pdo->prepare($checkSql);
        $checkStmt->execute([
            ':user_id' => $user['ID_USER'],
            ':task_id' => $task_id
        ]);

        if ($checkStmt->rowCount() == 0) { // Only insert if not already assigned
            // Insert the task for the user
            $sql = "INSERT INTO todo (ID_USER, ID_TACHE, COMPLETE, ID_COURS) 
                    VALUES (:id_user, :task_id, 0, :cours)";
            $stmt2 = $pdo->prepare($sql);
            $stmt2->execute([
                ':id_user' => $user['ID_USER'],
                ':task_id' => $task_id,
                ':cours' => $user['ID_COURS']
            ]);
        }
    }
    $pdo = null;
}

function LoadTacheFromDb() {
    $pdo = ConnectToDatabase();

    $sql="select ID_TACHE,DES_TACHE,NOM_COURS,cours.ID_COURS from tache 
        inner join cours ON tache.ID_COURS = cours.ID_COURS;";
    
    // Prepare and execute the query
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Fetch all the results into an associative array
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Close the database pection
    $pdo = null;

    return $result;
}

function LoadCoursFromDB(){
    $pdo = ConnectToDatabase();

    $sql = "SELECT * FROM COURS;";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Fetch all the results into an associative array
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Close the database pection
    $pdo = null;

    return $result;

}

function DeleteTache($ID){
    $pdo = ConnectToDatabase();


    $sql = "DELETE FROM TODO WHERE ID_TACHE = ".$ID.";
            Delete from tache where ID_TACHE = ".$ID.";";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();
}

function ModifierTache($Data){
    $pdo = ConnectToDatabase();

    $sql = "Update tache set DES_TACHE = '".$Data['description']."',ID_COURS =".$Data['cours']." where ID_COURS = ".$Data['id'].";";
    $sql = "update tache set DES_TACHE = '".$Data['description']."',ID_COURS =".$Data['cours']." WHERE ID_TACHE = ".$Data['id'].";";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();    
}


?>