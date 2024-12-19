<?php
include('C:\xampp\htdocs\projet\controller\StudentController.php');


$error = "";

$student = null;
// create an instance of the controller
$studentController = new StudentController();
$students = $studentController->listStudents(); // Récupère tous les Etudiants

// Extraire les e-mails dans un tableau $recipients
$recipients = [];
if (!empty($students)) {
    foreach ($students as $student) {
        if (isset($student['email'])) {
            $recipients[] = $student['email'];
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include('C:\xampp\htdocs\projet\sendmail\sendNotification.php'); // Inclure le fichier d'envoi des emails

    $titre = htmlspecialchars($_POST['titre']);
    $description = htmlspecialchars($_POST['description']);
    $duree = htmlspecialchars($_POST['duree']);
    $id_categorie = htmlspecialchars($_POST['id_categorie']);

    sendNotification($recipients, $titre);
    echo "Notifications envoyées avec succès !";

    // Gestion de l'upload d'image et de l'insertion en base de données
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image = $_FILES['image'];
        $uploadDir = '../../../../frontoffice/assets/images/';
        $imageName = uniqid() . '-' . basename($image['name']);
        $uploadFile = $uploadDir . $imageName;

        if (move_uploaded_file($image['tmp_name'], $uploadFile)) {
            try {
                $pdo = new PDO('mysql:host=localhost;dbname=integration;charset=utf8mb4', 'root', '');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $stmt = $pdo->prepare("INSERT INTO offre (titre, description, image, duree, id_categorie) VALUES (:titre, :description, :image, :duree, :id_categorie)");
                $stmt->execute([
                    ':titre' => $titre,
                    ':description' => $description,
                    ':image' => $imageName,
                    ':duree' => $duree,
                    ':id_categorie' => $id_categorie
                ]);

                header("Location: OffreList.php");
                exit;
            } catch (PDOException $e) {
                echo "Erreur base de données : " . $e->getMessage();
            }
        } else {
            echo "Erreur : Impossible de déplacer l'image.";
        }
    } else {
        echo "Erreur lors de l'upload. Code : " . $_FILES['image']['error'];
    }
}
