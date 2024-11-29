<?php

class ModelToDO{
    function fetchTasks() {
  
        $conn = ConnectToDB();
        // SQL query to fetch tasks
        $sql = "SELECT * from tache where id_cours = 1;"; // Adjust the table and column names as necessary
        $result = $conn->query($sql);
    
        $tasks = [];
        if ($result->num_rows > 0) {
            // Fetch all tasks
            while($row = $result->fetch_assoc()) {
                $tasks[] = $row;
            }
        }
    
        // Close the connection
        $conn->close();
    
        return $tasks;
    }
}
    
?>