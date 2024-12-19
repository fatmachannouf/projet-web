<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $type = htmlspecialchars($_POST['type']);
    $description = htmlspecialchars($_POST['description']);

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image = $_FILES['image'];
        $uploadDir = '../../../../frontoffice/assets/images/';
        $imageName = uniqid() . '-' . basename($image['name']);
        $uploadFile = $uploadDir . $imageName;

        // Debug
        echo "<pre>";
        print_r($image);
        echo "</pre>";

        // Vérifie le type MIME
        $fileType = mime_content_type($image['tmp_name']);
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        
        if (in_array($fileType, $allowedTypes)) {
            if (move_uploaded_file($image['tmp_name'], $uploadFile)) {
                echo "Fichier uploadé avec succès : " . $uploadFile;
                try {
                    $pdo = new PDO('mysql:host=localhost;dbname=integration;charset=utf8mb4', 'root', '');
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $stmt = $pdo->prepare("INSERT INTO categorie (type, description, image) VALUES (:type, :description, :image)");
                    $stmt->execute([
                        ':type' => $type,
                        ':description' => $description,
                        ':image' => $imageName
                    ]);
                    // Redirection après le succès
                    header("Location: CategorieList.php");
                    exit;
                } catch (PDOException $e) {
                    echo "Erreur base de données : " . $e->getMessage();
                }
            } else {
                echo "Erreur : Impossible de déplacer l'image.";
            }
        } else {
            echo "Erreur : Le fichier n'est pas une image valide.";
        }
    } else {
        echo "Erreur lors de l'upload. Code : " . $_FILES['image']['error'];
    }
}
?>