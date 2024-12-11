<?php
session_start();
if ($_SESSION['role'] !== 'enseignant') {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Courses</title>
</head>
<body>
    <div class="container mt-4">
        <h1>Welcome, Teacher</h1>
        <p>This is the courses management page.</p>
        <a href="courses.php?logout=true" class="btn btn-danger">Logout</a>
    </div>
</body>
</html>
