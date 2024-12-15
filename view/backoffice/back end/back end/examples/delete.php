<?php
session_start();
include('C:\xampp\htdocs\projet\dbcon.php');

if (isset($_GET['id'])) {
    $student_id = $_GET['id'];

    // Delete student data from the database
    $deleteQuery = "DELETE FROM students WHERE id = :id";
    $deleteStmt = $conn->prepare($deleteQuery);
    $deleteStmt->bindParam(':id', $student_id, PDO::PARAM_INT);
    $deleteStmt->execute();

    echo "Student deleted successfully!";
    header('Location: tables.php');  // Redirect to the table list page
    exit;
} else {
    echo "Student ID not specified!";
}
?>
