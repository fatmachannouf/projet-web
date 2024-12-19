<?php
include_once(__DIR__ . '/../config.php');
include(__DIR__ . '/../Model/Offre.php');

class OffreController
{
    public function listOffresByCategorie($id_categorie)
    {
        $db = config::getConnexion();
        $stmt = $db->prepare("SELECT * FROM offre WHERE id_categorie = :id_categorie");
        $stmt->bindParam(':id_categorie', $id_categorie, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    // Liste toutes les offres
    public function listOffres()
    {
        $sql = "SELECT * FROM offre";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste->fetchAll(PDO::FETCH_ASSOC); // Retourne un tableau associatif
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    // Affiche une offre par ID
    public function showOffre($id_offre)
    {
        $sql = "SELECT * FROM offre WHERE id_offre = :id_offre";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute(['id_offre' => $id_offre]);
            return $query->fetch(PDO::FETCH_ASSOC); // Retourne une offre comme tableau associatif
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    // Ajoute une nouvelle offre
    public function addOffre($offre)
    {
        $sql = "INSERT INTO offre (titre, description, image, duree, id_categorie) 
                VALUES (:titre, :description, :image, :duree, :id_categorie)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'titre' => $offre->getTitre(),
                'description' => $offre->getDescription(),
                'image' => $offre->getImage(),
                'duree' => $offre->getDuree(),
                'id_categorie' => $offre->getIdCategorie()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    // Met à jour une offre
    public function updateOffre($offre, $id_offre)
    {
        $sql = "UPDATE offre SET 
                    titre = :titre,
                    description = :description,
                    image = :image,
                    duree = :duree,
                    id_categorie = :id_categorie
                WHERE id_offre = :id_offre";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'titre' => $offre->getTitre(),
                'description' => $offre->getDescription(),
                'image' => $offre->getImage(),
                'duree' => $offre->getDuree(),
                'id_categorie' => $offre->getIdCategorie(),
                'id_offre' => $id_offre
            ]);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    // Supprime une offre par ID
    public function deleteOffre($id_offre)
    {
        $sql = "DELETE FROM offre WHERE id_offre = :id_offre";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->bindValue(':id_offre', $id_offre, PDO::PARAM_INT);
            $query->execute();
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    // Vérifie si une offre existe pour un titre donné
    public function checkOffreExists($titre)
    {
        $sql = "SELECT COUNT(*) FROM offre WHERE titre = :titre";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute(['titre' => $titre]);
            $count = $query->fetchColumn();
            return $count > 0; // Retourne true si l'offre existe
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    // Récupère une offre spécifique par ID
    public function getOffre($id_offre)
    {
        $sql = "SELECT * FROM offre WHERE id_offre = :id_offre";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->bindValue(':id_offre', $id_offre, PDO::PARAM_INT);
            $query->execute();
            $offre = $query->fetch(PDO::FETCH_ASSOC);
            if ($offre) {
                return $offre; // Retourne l'offre comme tableau associatif
            } else {
                throw new Exception("Aucune offre trouvée avec l'ID : $id_offre");
            }
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}
