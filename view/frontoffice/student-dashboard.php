<?php
session_start();
if ($_SESSION['role'] !== 'student') {
    header('Location: login.php');
    exit();
}
if (isset($_GET['logout'])) {
    session_destroy();
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
    <title>Student Dashboard</title>
</head>
<body>
    <div class="container mt-4">
        <h1>Hi, <?= $_SESSION['email']; ?> (Student)</h1>
        
    </div>
    <a href="student-dashboard.php?logout=true" class="btn btn-danger">Logout</a>
</body>
</html>
