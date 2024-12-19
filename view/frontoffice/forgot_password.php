<?php
session_start();
include('C:\xampp\htdocs\projet\dbcon.php');

// Traitement du formulaire lorsque l'utilisateur soumet son email
if (isset($_POST['forgot_password_btn'])) {
    $email = $_POST['email'];

    // Vérifier si l'email existe dans la base de données
    $query = "SELECT * FROM students WHERE email = :email LIMIT 1";
    $statement = $conn->prepare($query);
    $statement->execute([':email' => $email]);
    $user = $statement->fetch(PDO::FETCH_OBJ);

    if ($user) {
        // Créer un token unique pour la réinitialisation
        $token = bin2hex(random_bytes(50));

        // Enregistrer ce token dans la base de données pour le lien de réinitialisation
        $query = "UPDATE students SET reset_token = :token WHERE email = :email";
        $statement = $conn->prepare($query);
        $statement->execute([':token' => $token, ':email' => $email]); // Exécuter la mise à jour avec le token

        // Créer un lien de réinitialisation
        $resetLink = "C:\xampp\htdocs\projet\view\frontoffice/reset_password.php?token=" . $token;

        // Envoi de l'email avec le lien de réinitialisation
        $subject = "Réinitialisation de votre mot de passe";
        $message = "Cliquez sur le lien suivant pour réinitialiser votre mot de passe :\n\n" . $resetLink;
        $headers = "From: no-reply@votresite.com";

        // Envoi de l'email
        if (mail($email, $subject, $message, $headers)) {
            $_SESSION['message'] = "Un lien de réinitialisation a été envoyé à votre email.";
            header('Location: login.php');
            exit();
        } else {
            $_SESSION['message'] = "Échec de l'envoi de l'email. Essayez à nouveau.";
            header('Location: forgot_password.php');
            exit();
        }
    } else {
        $_SESSION['message'] = "Aucun utilisateur trouvé avec cet email.";
        header('Location: forgot_password.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mot de passe oublié</title>
</head>
<body>
    <h2>Mot de passe oublié</h2>
    <form method="POST" action="forgot_password.php">
        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-danger"><?= $_SESSION['message']; ?></div>
            <?php unset($_SESSION['message']); ?>
        <?php endif; ?>
        
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
        
        <button type="submit" name="forgot_password_btn">Envoyer le lien de réinitialisation</button>
    </form>
</body>
</html>
