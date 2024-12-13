<?php

// Inclure le fichier du modèle Cours si ce n'est pas déjà fait
include_once __DIR__ . '/../models/Cours.php';  // Ajustez le chemin selon la structure de votre projet

class LearnoraController {

    private $coursModel;

    // Constructeur
    public function __construct() {
        // Initialisation du modèle Cours
        $this->coursModel = new Cours();
    }

    // Ajouter un cours
    public function addCours($NomC, $ImageC, $DescriptionC) {
        try {
            // Création d'un tableau contenant les données du cours
            $newCours = [
                'NomC' => $NomC,
                'ImageC' => $ImageC,
                'DescriptionC' => $DescriptionC
            ];

            // Appel de la méthode CreateCours pour ajouter le cours en base de données
            $this->coursModel->CreateCours($newCours);

            // Optionnel : retour ou redirection après l'ajout
            header('Location: coursList.php');  // Ou redirection vers une autre page si nécessaire
            exit();
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    // Afficher la liste des cours
    public function showCoursList() {
        try {
            // Récupérer la liste des cours depuis le modèle
            $coursList = $this->coursModel->ReadCours();

            // Afficher la liste des cours
            foreach ($coursList as $cours) {
                echo "Nom du Cours: " . $cours['NomC'] . "<br>";
                echo "Description: " . $cours['DescriptionC'] . "<br>";
                // Afficher l'image en utilisant son chemin
                echo "<img src='" . $cours['ImageC'] . "' alt='Image du Cours' style='max-width:200px;' />";
                echo "<hr>";
            }
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    // Supprimer un cours
    public function deleteCours($NomC) {
        try {
            // Appel de la méthode DeleteCours pour supprimer le cours en base de données
            $this->coursModel->DeleteCours($NomC);

            // Optionnel : retour ou redirection après suppression
            header('Location: coursList.php');
            exit();
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    // Afficher un cours spécifique (par exemple pour la page de détails)
    public function showCours($NomC) {
        try {
            // Récupérer les détails d'un cours spécifique
            $coursDetails = $this->coursModel->ShowCours($NomC);

            // Afficher les détails du cours
            echo "Nom du Cours: " . $coursDetails['NomC'] . "<br>";
            echo "Description: " . $coursDetails['DescriptionC'] . "<br>";
            // Afficher l'image en utilisant son chemin
            echo "<img src='" . $coursDetails['ImageC'] . "' alt='Image du Cours' style='max-width:200px;' />";
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}
?>
