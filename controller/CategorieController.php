<?php
include_once(__DIR__ . '/../config.php');
include(__DIR__ . '/../Model/Categorie.php');

class CategorieController
{
    // Liste toutes les catégories
    public function listCategories()
    {
        $sql = "SELECT * FROM categorie";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste->fetchAll(PDO::FETCH_ASSOC); // Retourne un tableau associatif
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    // Supprime une catégorie par ID
    public function deleteCategorie($id)
    {
        $sql = "DELETE FROM categorie WHERE id_categorie = :id";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);
            $req->bindValue(':id', $id, PDO::PARAM_INT); // Paramètre cohérent
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }


    // Ajoute une nouvelle catégorie
    public function addCategorie($categorie)
    {
        $sql = "INSERT INTO categorie (type, description, image) 
                VALUES (:type, :description, :image)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'type' => $categorie->getType(),
                'description' => $categorie->getDescription(),
                'image' => $categorie->getImage()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    // Met à jour une catégorie
    public function updateCategorie($categorie, $id)
    {
        $sql = "UPDATE categorie SET 
                    type = :type,
                    description = :description,
                    image = :image
                WHERE id_categorie = :id_categorie";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'id_categorie' => $id,
                'type' => $categorie->getType(),
                'description' => $categorie->getDescription(),
                'image' => $categorie->getImage()
            ]);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    // Affiche une catégorie par ID
    public function showCategorie($id)
    {
        $sql = "SELECT * FROM categorie WHERE id_categorie = :id_categorie";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute(['id_categorie' => $id]);
            return $query->fetch(PDO::FETCH_ASSOC); // Retourne une catégorie comme tableau associatif
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    // Contrôle de saisie : vérifier si une catégorie existe déjà
    public function checkCategorieExists($type)
    {
        $sql = "SELECT COUNT(*) FROM categorie WHERE type = :type";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute(['type' => $type]);
            $count = $query->fetchColumn();
            return $count > 0; // Retourne true si la catégorie existe
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
