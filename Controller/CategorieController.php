<?php
include(__DIR__ . '/../config.php');
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
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    // Supprime une catégorie par ID
    public function deleteCategorie($id)
    {
        $sql = "DELETE FROM categorie WHERE id = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    // Ajoute une nouvelle catégorie
    public function addCategorie($categorie)
    {
        $sql = "INSERT INTO categorie (type, url) VALUES (:type, :url)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'type' => $categorie->getType(),
                'url' => $categorie->getUrl()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    // Met à jour une catégorie
    public function updateCategorie($categorie, $id)
    {
        try {
            $db = config::getConnexion();

            $query = $db->prepare(
                'UPDATE categorie SET 
                    type = :type,
                    url = :url
                WHERE id = :id'
            );

            $query->execute([
                'id' => $id,
                'type' => $categorie->getType(),
                'url' => $categorie->getUrl()
            ]);

            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    // Affiche une catégorie par ID
    public function showCategorie($id)
    {
        $sql = "SELECT * FROM categorie WHERE id = :id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute(['id' => $id]);

            $categorie = $query->fetch();
            return $categorie;
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
?>
