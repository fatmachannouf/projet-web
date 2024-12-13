<?php
include(__DIR__ . '/../Controller/config.php');  // Include your database connection configuration

class Cours
{
    private $NomC;
    private $ImageC;
    private $DescriptionC;

    // Constructeur pour initialiser les propriétés
    public function __construct($NomC, $ImageC, $DescriptionC) {
        $this->NomC = $NomC;
        $this->ImageC = $ImageC;
        $this->DescriptionC = $DescriptionC;
    }

    // Getters pour les propriétés
    public function getNomC() {
        return $this->NomC;
    }

    public function getImageC() {
        return $this->ImageC;
    }

    public function getDescriptionC() {
        return $this->DescriptionC;
    }

    // Read all courses from the database
    public function ReadCours() {
        $sql = "SELECT * FROM cours";
        $db = config::getConnexion();  // Assuming config::getConnexion() returns a PDO connection
        try {
            $liste = $db->query($sql);
            return $liste->fetchAll(PDO::FETCH_ASSOC); // Fetch all courses as associative array
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    // Delete a course based on its name (NomC)
    public function DeleteCours($NomC) {
        $sql = "DELETE FROM cours WHERE NomC = :NomC";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':NomC', $NomC, PDO::PARAM_STR);  // Bind the NomC parameter to prevent SQL injection

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    // Create a new course
    public function CreateCours($cours) {
        $sql = "INSERT INTO cours (NomC, ImageC, DescriptionC) VALUES (:NomC, :ImageC, :DescriptionC)";
        $db = config::getConnexion();
    
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'NomC' => $cours->getNomC(),
                'ImageC' => $cours->getImageC(), 
                'DescriptionC' => $cours->getDescriptionC()
            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
    

    // Update a course based on its name (NomC)
    public function UpdateCours($offer, $NomC) {
        var_dump($offer);  // For debugging: Display the offer object

        $sql = "UPDATE cours SET NomC = :NomC, ImageC = :ImageC, DescriptionC = :DescriptionC WHERE NomC = :NomC";
        $db = config::getConnexion();
        
        try {
            $query = $db->prepare($sql);
            // Execute the update query
            $query->execute([
                'NomC' => $offer->getNomC(),
                'ImageC' => $offer->getImageC(),
                'DescriptionC' => $offer->getDescriptionC(),
            ]);
            echo $query->rowCount() . " record(s) UPDATED successfully<br>";
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    // Show a specific course based on its name (NomC)
    public function showCours($NomC) {
        try {
            // Récupérer les détails d'un cours spécifique
            $coursDetails = $this->coursModel->ShowCours($NomC);
    
            // Check if the course exists
            if ($coursDetails) {
                // Afficher les détails du cours
                echo "<h2>Nom du Cours: " . htmlspecialchars($coursDetails['NomC']) . "</h2>";
                echo "<p>Description: " . htmlspecialchars($coursDetails['DescriptionC']) . "</p>";
                // Afficher l'image en utilisant son chemin
                echo "<img src='" . htmlspecialchars($coursDetails['ImageC']) . "' alt='Image du Cours' style='max-width:200px;' />";
            } else {
                echo "<p>Aucun cours trouvé avec ce nom.</p>";
            }
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}


class LearnoraController {

     // Méthode pour afficher la liste des cours
     public function showCoursList() {
        // Créez une instance du modèle Cours et récupérez les cours
        $coursModel = new Cours('', '', '');  // Passez des valeurs vides ou des valeurs par défaut si vous voulez créer un objet sans données
        $coursList = $coursModel->ReadCours();  // Récupère la liste des cours via la méthode ReadCours
        return $coursList;  // Retourne la liste des cours
    }
} 

class CoursController {

    private $coursModel;

    public function __construct() {
        // Créez une instance du modèle Cours pour interagir avec la base de données
        $this->coursModel = new Cours();
    }

    // Méthode pour ajouter un cours
    public function addCours($cours) {
        // Appelle la méthode de modèle pour insérer le cours dans la base de données
        $this->coursModel->CreateCours($cours);
    }

    // Vous pouvez ajouter d'autres méthodes pour afficher, supprimer ou mettre à jour des cours
}

   /* $sql="SELECT * FROM cours WHERE $NomC=NomC;"
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $pdo = Config::getConnexion();
    $user = new User();

        if (isset($_POST['Lire'])) {
            $NomC = $_POST["NomC"];
        }
    }  $showCoursList = showCoursList($NomC, $ImageC, $DescriptionC);*/  
            
?>
