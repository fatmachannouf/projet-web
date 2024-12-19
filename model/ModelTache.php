<?php


function ConnectToDatabase(){
    $host = 'localhost'; // Your database host (usually 'localhost')
    $dbname = 'integration'; // Your database name
    $username = 'root'; // Your database username
    $password = ''; // Your database password

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
    return $pdo;
}

function LoadUserTasksFromDb($ID) {
    $pdo = ConnectToDatabase();
    // SQL query to get tasks for the student (now using students table)
    $sql = "SELECT students.id, tache.DES_TACHE, tache.ID_TACHE, cours.NOM_COURS, todo.COMPLETE 
            FROM students 
            INNER JOIN todo ON students.id = todo.ID_USER 
            INNER JOIN tache ON tache.ID_TACHE = todo.ID_TACHE 
            INNER JOIN cours ON cours.ID_COURS = tache.ID_COURS 
            WHERE students.id = :ID";  // Changed users.ID to students.id
    
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
    // Insert the task into the tache table
    $sql = "INSERT INTO tache(ID_COURS, DES_TACHE)
            VALUES(:cours, :description)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':cours' => $Data['cours'],
        ':description' => $Data['description']
    ]);

    $task_id = $pdo->lastInsertId();

    // Fetch all users subscribed to the course
    $sql = "SELECT ID_USER, ID_COURS FROM todo WHERE ID_COURS = :cours";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([ ':cours' => $Data['cours'] ]);

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

    $sql = "SELECT ID_TACHE, DES_TACHE, NOM_COURS, cours.ID_COURS 
            FROM tache 
            INNER JOIN cours ON tache.ID_COURS = cours.ID_COURS";
    
    // Prepare and execute the query
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Fetch all the results into an associative array
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Close the database connection
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

    // Close the database connection
    $pdo = null;

    return $result;
}

function DeleteTache($ID){
    $pdo = ConnectToDatabase();

    // Delete tasks from the todo table and then from the tache table
    $sql = "DELETE FROM TODO WHERE ID_TACHE = :ID;
            DELETE FROM tache WHERE ID_TACHE = :ID;";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([ ':ID' => $ID ]);
}

function ModifierTache($Data){
    $pdo = ConnectToDatabase();

    // Update the task description and course ID based on task ID
    $sql = "UPDATE tache 
            SET DES_TACHE = :description, ID_COURS = :cours 
            WHERE ID_TACHE = :id";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':description' => $Data['description'],
        ':cours' => $Data['cours'],
        ':id' => $Data['id']
    ]);
}
?>
