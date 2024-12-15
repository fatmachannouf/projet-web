<?php   
session_start();
include('C:\xampp\htdocs\projet\dbcon.php');

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
</head>
<body>
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- Logo -->
                    <a href="index.html" class="logo">
                        <img src="assets/images/templatemo-eduwell.png" alt="EduWell Template">
                    </a>
                    <!-- Navigation Menu -->
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
                    <!-- Menu Trigger (for mobile) -->
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
<br>
<div class="container mt-4">
   <br><br><br> <h2>Login</h2>
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
        <button type="submit" name="login_btn" class="btn btn-primary">Login</button>
    </form>

    <p>Don't have an account? <a href="register_student.php">Register here</a></p>
    <p>Forgot your password? <a href="forgot_password.php">Reset it here</a></p>
</div>

</body>
</html>
