<?php
    include '../Model/ModelTache.php';
    session_start();
    // Check if the USER_ID is passed in the URL
    if (isset($_GET['USER_ID']) && is_numeric($_GET['USER_ID'])) {
        $_SESSION['USER_ID'] = $_GET['USER_ID']; // Get USER_ID from the URL
        $UserId = $_GET['USER_ID']; // Get USER_ID from the URL

    }

    $tasksByCourse = LoadUserTasksFromDb($UserId); // Grouped tasks by course

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'update') {
        // Get the task ID and the new completion status
        $taskId = $_POST['task_id'];
        $completed = isset($_POST['completed']) ? 1 : 0;  // 1 if checked, 0 if unchecked
    
        // If the task is not already completed, mark it as completed
        if ($completed == 1) {
            try {
                $pdo = ConnectToDatabase();
    
                // Update the task's completion status in the database
                $sql = "UPDATE todo SET COMPLETE = 1 WHERE ID_TACHE = :task_id AND COMPLETE = 0 AND ID_USER =".$_SESSION['USER_ID']. ";"; // Only update if not already completed
                echo $sql;
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':task_id', $taskId, PDO::PARAM_INT);
                $stmt->execute();
    
                // Redirect back to avoid resubmission issues (optional)
                header("Location:Todo.php?USER_ID=" . $_SESSION['USER_ID']);
                
    
            } catch (PDOException $e) {
                die("Error updating task: " . $e->getMessage());
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des tâches - Utilisateur</title>
    <style>
        /* Style is similar to your admin page */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fa;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        h2 {
            text-align: center;
            color: #4c6ef5;
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }

        th {
            background-color: #4c6ef5;
            color: #fff;
            padding: 12px;
            font-size: 16px;
            text-align: left;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #f2f2f2;
            font-size: 14px;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #e2e8f0;
            transition: background-color 0.3s ease;
        }

        .checkbox {
            margin: 0;
            padding: 0;
        }

        /* Style for completed tasks */
        .completed {
            text-decoration: line-through;
            color: #999;
        }

        button {
            padding: 8px 16px;
            margin: 5px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .edit-btn {
            background-color: #4caf50;
            color: white;
        }

        .edit-btn:hover {
            background-color: #45a049;
            transform: scale(1.1);
        }

        .delete-btn {
            background-color: #f44336;
            color: white;
        }

        .delete-btn:hover {
            background-color: #e53935;
            transform: scale(1.1);
        }

        table, th, td {
            border-radius: 10px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>

    <h2>Liste des tâches assignées</h2>

    <?php if ($tasksByCourse): ?>
        <?php foreach ($tasksByCourse as $courseName => $tasks): ?>
            <h3><?php echo htmlspecialchars($courseName); ?></h3>
            <table>
                <thead>
                    <tr>
                        <th>Tâche</th>
                        <th>Complété</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($tasks): ?>
                        <?php foreach ($tasks as $task): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($task['DES_TACHE']); ?></td>
                                <td>
                                <form action="Todo.php" method="POST">
                                        <input type="hidden" name="action" value="update">
                                        <input type="hidden" name="task_id" value="<?php echo($task['ID_TACHE']);?>">
                                        <label class="checkbox">
                                            <input type="checkbox" name="completed" value="1" 
                                                <?php echo $task['COMPLETE'] ? 'checked disabled' : ''; ?> 
                                                onchange="this.form.submit();">
                                            Complété
                                        </label>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="2">Aucune tâche assignée pour ce cours.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Aucune tâche assignée pour cet utilisateur.</p>
    <?php endif; ?>

</body>
</html>

<?php
    
?>
