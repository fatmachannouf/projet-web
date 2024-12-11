<?php 
session_start();
include('C:\xamppp\htdocs\3aslemaa\dbcon.php');

if (isset($_POST['register_btn'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $configpassword = $_POST['configpassword'];

    // Vérifier si le mot de passe et la confirmation sont identiques
    if ($password !== $configpassword) {
        $_SESSION['message'] = "Les mots de passe ne correspondent pas.";
        header('Location: student-add.php');
        exit(0);
    }

    // Déterminer le rôle basé sur l'email
    $role = "student"; // Par défaut, le rôle est "student"
    if ($email === "Nomutilisateuradmin@gmail.com") {
        $role = "admin";
    } elseif ($email === "Nomutilisateurenseignant@gmail.com") {
        $role = "enseignant";
    }

    try {
        $query = "INSERT INTO students (fullname, email, password, configpassword, role) VALUES(:fullname, :email, :password, :configpassword, :role)";
        $statement = $conn->prepare($query);
        $data = [
            ':fullname' => $fullname,
            ':email' => $email,
            ':password' => $password,
            ':configpassword' => $configpassword,
            ':role' => $role, // Enregistrer le rôle de l'utilisateur
        ];
        $statement->execute($data);

        if ($statement->rowCount() > 0) {
            $_SESSION['message'] = "Inséré avec succès";
            header('Location: login.php');
            exit(0);
        } else {
            $_SESSION['message'] = "Échec de l'insertion";
            header('Location: register_student.php');
            exit(0);
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet"> <!-- Link to your custom styles -->
    <title>Register</title>
    </head>
<body>
    <div class="container mt-4">
        <h2>Register</h2>
        <form id="registerForm" action="register_student.php" method="POST">
            <?php if (isset($_SESSION['message'])): ?>
                <div class="alert alert-danger"><?= $_SESSION['message']; ?></div>
                <?php unset($_SESSION['message']); ?>
            <?php endif; ?>
            
            <div class="mb-3">
                <label for="fullname" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullname" name="fullname">
                <small id="fullnameError" class="text-danger"></small>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
                <small id="emailError" class="text-danger"></small>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                <small id="passwordError" class="text-danger"></small>
            </div>
            <div class="mb-3">
                <label for="configpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="configpassword" name="configpassword">
                <small id="confirmPasswordError" class="text-danger"></small>
            </div>
            
            <button type="submit" name="register_btn" class="btn btn-primary">Register</button>
        </form>
    </div>

    <script>
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            let isValid = true;

            // Clear previous error messages
            document.getElementById('fullnameError').textContent = '';
            document.getElementById('emailError').textContent = '';
            document.getElementById('passwordError').textContent = '';
            document.getElementById('confirmPasswordError').textContent = '';

            // Full Name Validation
            const fullname = document.getElementById('fullname').value;
            if (fullname.trim() === '') {
                document.getElementById('fullnameError').textContent = 'Full Name is required';
                isValid = false;
            }

            // Email Validation
            const email = document.getElementById('email').value;
            const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (!emailRegex.test(email)) {
                document.getElementById('emailError').textContent = 'Please enter a valid email';
                isValid = false;
            }

            // Password Validation
            const password = document.getElementById('password').value;
            if (password.length < 6) {
                document.getElementById('passwordError').textContent = 'Password must be at least 6 characters';
                isValid = false;
            }

            // Confirm Password Validation
            const confirmPassword = document.getElementById('configpassword').value;
            if (confirmPassword !== password) {
                document.getElementById('confirmPasswordError').textContent = 'Passwords do not match';
                isValid = false;
            }

            // If form is not valid, prevent submission
            if (!isValid) {
                e.preventDefault();
            }
        });
    </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
