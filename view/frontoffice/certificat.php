<?php
// Inclure la bibliothèque FPDF
require('fpdf.php');

// Connexion à la base de données
$host = 'localhost';
$dbname = 'integration';
$user = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

$certificatGenere = false;
$certificatNom = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $commentaire = $_POST['commentaire'];

    // Insérer les données dans la table certificat
    $stmt = $pdo->prepare("INSERT INTO certificat (nom, email, commentaire) VALUES (?, ?, ?)");
    $stmt->execute([$nom, $email, $commentaire]);

    // Générer le PDF
    $certificatNom = "certificat_" . strtolower(str_replace(' ', '_', $nom)) . ".pdf";

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(0, 10, 'Certificat de Réussite', 0, 1, 'C');
    $pdf->Ln(10);
    $pdf->SetFont('Arial', '', 12);
    $pdf->MultiCell(0, 10, "Ce certificat est attribué à : $nom\n\nEmail : $email\n\nCommentaire : $commentaire\n\nMerci de votre confiance !");
    $pdf->Output('F', $certificatNom); // Enregistre le PDF dans un fichier

    $certificatGenere = true;
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

        <?php if ($certificatGenere): ?>
            <script>
                alert("Votre certificat est prêt. Cliquez sur OK pour le télécharger.");
                window.location.href = "<?= htmlspecialchars($certificatNom) ?>";
            </script>
        <?php endif; ?>
    </div>
</body>
</html>
