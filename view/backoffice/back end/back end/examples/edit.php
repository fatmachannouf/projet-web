<?php
session_start();
include('C:\xampp\htdocs\projet\dbcon.php');

if (isset($_GET['id'])) {
    $student_id = $_GET['id'];

    // Fetch student data from the database
    $query = "SELECT * FROM students WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $student_id, PDO::PARAM_INT);
    $stmt->execute();
    $student = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$student) {
        echo "Student not found!";
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Update student details
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];

    $updateQuery = "UPDATE students SET fullname = :fullname, email = :email WHERE id = :id";
    $updateStmt = $conn->prepare($updateQuery);
    $updateStmt->bindParam(':fullname', $fullname);
    $updateStmt->bindParam(':email', $email);
    $updateStmt->bindParam(':id', $student_id, PDO::PARAM_INT);
    $updateStmt->execute();

    echo "Student updated successfully!";
    header('Location: tables.php');  // Redirect to the table list page
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Edit Student</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container">
        <h2>Edit Student</h2>
        <form method="POST">
            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $student['fullname']; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $student['email']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
</body>
</html>
