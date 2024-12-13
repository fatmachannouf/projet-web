<?php
// Connexion à la base de données
$host = 'localhost';
$dbname = '9arini';
$user = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Traitement du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $commentaire = $_POST['commentaire'];

    // Insérer les données dans la table certificat
    $stmt = $pdo->prepare("INSERT INTO certificat (nom, email, commentaire) VALUES (?, ?, ?)");
    $stmt->execute([$nom, $email, $commentaire]);

    echo "<p>Votre demande de certificat a été enregistrée avec succès !</p>";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande de Certificat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #2575fc;
        }

        form {
            display: grid;
            grid-gap: 15px;
        }

        input, textarea, button {
            padding: 10px;
            font-size: 16px;
            border-radius: 8px;
            border: 1px solid #ddd;
            transition: 0.3s;
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: #2575fc;
            box-shadow: 0 0 5px rgba(37, 117, 252, 0.7);
        }

        button {
            background: #2575fc;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #6a11cb;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Obtenez votre certificat</h2>
        <form method="POST" action="">
            <input type="text" name="nom" placeholder="Votre nom complet" required>
            <input type="email" name="email" placeholder="Votre email" required>
            <textarea name="commentaire" placeholder="Commentaires (facultatif)" rows="4"></textarea>
            <button type="submit">Demander le certificat</button>
        </form>
    </div>
    <script>
        async function validateForm(event) {
            event.preventDefault(); // Empêche la soumission par défaut

            // Récupération des champs
            const nom = document.querySelector('input[name="nom"]');
            const email = document.querySelector('input[name="email"]');
            const commentaire = document.querySelector('textarea[name="commentaire"]');
            const errorDiv = document.querySelector('#error-messages');

            // Réinitialisation des messages d'erreur
            errorDiv.innerHTML = '';

            // Validation des champs
            let valid = true;
            if (!nom.value.trim()) {
                valid = false;
                errorDiv.innerHTML += '<p class="error">Le nom est requis.</p>';
            }

            if (!email.value.trim()) {
                valid = false;
                errorDiv.innerHTML += '<p class="error">L\'email est requis.</p>';
            } else if (!validateEmail(email.value)) {
                valid = false;
                errorDiv.innerHTML += '<p class="error">L\'email n\'est pas valide.</p>';
            } else {
                // Validation AJAX pour l'unicité de l'email
                const response = await fetch('validate_email.php?email=' + encodeURIComponent(email.value));
                const data = await response.json();
                if (!data.available) {
                    valid = false;
                    errorDiv.innerHTML += '<p class="error">Cet email est déjà utilisé.</p>';
                }
            }

            if (valid) {
                event.target.submit(); // Soumission du formulaire si tout est valide
            }
        }

        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }
    </script>
</body>
</html>
