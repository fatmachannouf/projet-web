<?php    
session_start();
include('C:\xampp\htdocs\Ahmed\Integration\dbcon.php');

if (isset($_POST['login_btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        // Déterminer le rôle en fonction de l'email
        $role = 'etudiant'; // Valeur par défaut
        if ($email === 'Nomutilisateuradmin@gmail.com') {
            $role = 'admin';
        } elseif ($email === 'Nomutilisateurenseignant@gmail.com') {
            $role = 'enseignant';
        }

        // Requête pour récupérer les informations de l'utilisateur dans la base de données
        $query = "SELECT * FROM students WHERE email = :email LIMIT 1";
        $statement = $conn->prepare($query);
        $statement->execute([':email' => $email]);
        $user = $statement->fetch(PDO::FETCH_OBJ);

        // Vérification des informations de l'utilisateur
        if ($user && $password === $user->password) {
            $_SESSION['user_id'] = $user->id;
            $_SESSION['email'] = $user->email;
            $_SESSION['role'] = $role; // Assigner le rôle (admin, enseignant, ou étudiant)

            // Redirection en fonction du rôle
            if ($_SESSION['role'] == 'admin') {
                header('Location: /3aslemaa/back end/examples/dashboard.php'); // Rediriger vers le tableau de bord admin
            } elseif ($_SESSION['role'] == 'enseignant') {
                header('Location: courses.php'); // Rediriger vers la page des cours
            } else {
                header('Location: puzzel.php'); // Rediriger vers le tableau de bord étudiant
            }
            exit();
        } else {
            $_SESSION['message'] = "Email ou mot de passe invalide.";
            header('Location: login.php');
            exit();
        }
    } catch (PDOException $e) {
        $_SESSION['message'] = "Erreur : " . $e->getMessage();
        header('Location: login.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet"> <!-- Link to your custom styles -->
    <title>Login</title>
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
    </style>
</head>
<body>
<header class="header-area header-sticky">
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
                        <li class="has-sub">
                            <a href="javascript:void(0)">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="our-services.html">Our Services</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                            </ul>
                        </li>
                        <li><a href="#testimonials" class="scroll-to-section">Testimonials</a></li>
                        <li><a href="#contact-section" class="scroll-to-section">Contact Us</a></li>
                    </ul>
                    <a class="menu-trigger">
                        <span></span><span></span><span></span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</header>
<br>
<br>
<br><br>
<br>
<br>
<br><br>
<div class="container mt-4">
    <div class="login-form">
        <h2 class="text-center">Login</h2>
        <form action="login.php" method="POST">
            <?php if (isset($_SESSION['message'])): ?>
                <div class="alert alert-danger"><?= $_SESSION['message']; ?></div>
                <?php unset($_SESSION['message']); ?>
            <?php endif; ?>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <button type="submit" name="login_btn" class="btn btn-primary w-100">Login</button>
        </form>

        <p class="text-center mt-3">Don't have an account? <a href="register_student.php">Register here</a></p>
        <p class="text-center">Forgot your password? <a href="forgot_password.php">Reset it here</a></p>
    </div>
</div>

</body>
</html>