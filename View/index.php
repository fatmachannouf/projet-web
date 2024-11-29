<?php
include '../Config.php';
include '../Model/ModelToDo.php';
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TODO LIST</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <div class="container">
    <h1>Todo List</h1>
    <div class="input-container">
      <input type="text" class="todo-input" placeholder="Add a new task...">
      <button class="add-button">
        <i class="fa fa-plus-circle"></i> Add
      </button>
    </div>
    <div class="filters">
      <div class="filter" data-filter="all">All</div>
      <div class="filter" data-filter="completed">Complete</div>
      <div class="filter" data-filter="pending">Incomplete</div>
      <div class="delete-all">Delete All</div>
    </div>
    <div class="todos-container">
      <ul class="todos">
        <?php
            $ModelToDo = new ModelToDO();
            $tasks = $ModelToDo->fetchTasks(); // Call the function to get tasks

            if (empty($tasks)) {
                echo '<li>No tasks available</li>'; // Message if no tasks are found
            } else {
                foreach ($tasks as $task) {
                    // Display each task
                    echo '<li data-id="' . $task['ID_TACHE'] . '" class="' . 'completed' . '">' . htmlspecialchars($task['DESIGNATION_TACHE']) . '</li>';
                }
            }
            ?>
      </ul>
      <img class="empty-image" src="./empty.svg" alt="No tasks available">
    </div>
  </div>
  <script src="./script.js"></script>
</body>
</html>

