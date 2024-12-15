<?php
session_start();
include('C:\xampp\htdocs\integration\dbcon.php');

// Vérifier si le token est valide
if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Vérifier si le token existe dans la base de données
    $query = "SELECT * FROM students WHERE reset_token = :token LIMIT 1";
    $statement = $conn->prepare($query);
    $statement->execute([':token' => $token]);
    $user = $statement->fetch(PDO::FETCH_OBJ);

    if ($user) {
        // Traitement du formulaire de réinitialisation du mot de passe
        if (isset($_POST['reset_password_btn'])) {
            $newPassword = $_POST['new_password'];
            $confirmPassword = $_POST['confirm_password'];

            if ($newPassword === $confirmPassword) {
                // Mettre à jour le mot de passe et supprimer le token
                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                $query = "UPDATE students SET password = :password, reset_token = NULL WHERE reset_token = :token";
                $statement = $conn->prepare($query);
                $statement->execute([':password' => $hashedPassword, ':token' => $token]);

                $_SESSION['message'] = "Votre mot de passe a été réinitialisé avec succès.";
                header('Location: login.php');
                exit();
            } else {
                $_SESSION['message'] = "Les mots de passe ne correspondent pas.";
            }
        }
    } else {
        $_SESSION['message'] = "Token invalide ou expiré.";
        header('Location: forgot_password.php');
        exit();
    }
} else {
    $_SESSION['message'] = "Aucun token trouvé.";
    header('Location: forgot_password.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Réinitialiser le mot de passe</title>
</head>
<body>
    <h2>Réinitialiser votre mot de passe</h2>
    <form method="POST" action="reset_password.php?token=<?= $_GET['token']; ?>">
        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-danger"><?= $_SESSION['message']; ?></div>
            <?php unset($_SESSION['message']); ?>
        <?php endif; ?>
        
        <label for="new_password">Nouveau mot de passe :</label>
        <input type="password" id="new_password" name="new_password" required>
        
        <label for="confirm_password">Confirmer le mot de passe :</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        
        <button type="submit" name="reset_password_btn">Réinitialiser le mot de passe</button>
    </form>
</body>
</html>
