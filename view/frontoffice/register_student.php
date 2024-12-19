<?php 
session_start();
include('C:\xampp\htdocs\projet\dbcon.php');

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
    <title>Inscription Étudiant</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="index.html" class="logo">
                            <img src="assets/images/templatemo-eduwell.png" alt="EduWell Template">
                        </a>
                        <ul class="nav">
                            <li><a href="#home" class="scroll-to-section active">Home</a></li>
                            <li><a href="#courses" class="scroll-to-section">COURSES</a></li>
                            <li><a href="#certification" class="scroll-to-section">CERTIFICATION</a></li>
                            <li><a href="contact-us.html" class="scroll-to-section">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <style>
        body {
            background: #f4f7fc;
            font-family: Arial, sans-serif;
            color: #333;
        }

        .header-area {
            background-color: #03195c;
            padding: 20px 0;
        }

        .logo img {
            width: 200px;
        }

        .main-nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            padding: 0;
        }

        .main-nav ul li {
            margin: 0 20px;
        }

        .main-nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
        }

        .main-nav ul li a:hover {
            color: #f0a500;
            text-decoration: underline;
        }

        .container {
            margin-top: 50px;
        }

        .login-form {
            background: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
            transition: transform 0.3s ease;
        }

        .login-form:hover {
            transform: translateY(-10px);
        }

        .form-label {
            font-weight: bold;
            color: #555;
        }

        .form-control {
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 10px;
            font-size: 16px;
        }

        .btn-primary {
            background-color: #f0a500;
            border: none;
            padding: 10px 20px;
            color: #fff;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #d88b00;
        }

        .alert {
            margin-bottom: 20px;
        }

        p {
            font-size: 14px;
        }

        a {
            color: #f0a500;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
        .main-banner .right-image img {
    width: 50%; /* Adjust the width as needed */
    height: auto; /* Maintain the aspect ratio */
    max-width: 100%; /* Ensure the image doesn't stretch beyond its container */
}    </style>
    </header>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
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
