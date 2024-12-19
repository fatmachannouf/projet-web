<?php
class Offre
{
    private $id_offre;
    private $titre;
    private $description;
    private $image;
    private $duree;
    private $id_categorie;

    // Constructeur
    public function __construct($id_offre, $titre, $description, $image, $duree, $id_categorie)
    {
        $this->id_offre = $id_offre;
        $this->titre = $titre;
        $this->description = $description;
        $this->image = $image;
        $this->duree = $duree;
        $this->id_categorie = $id_categorie;
    }

    // Getters
    public function getIdOffre() { return $this->id_offre; }
    public function getTitre() { return $this->titre; }
    public function getDescription() { return $this->description; }
    public function getImage() { return $this->image; }
    public function getDuree() { return $this->duree; }
    public function getIdCategorie() { return $this->id_categorie; }

    // Setters
    public function setIdOffre($id_offre) { $this->id_offre = $id_offre; }
    public function setTitre($titre) { $this->titre = $titre; }
    public function setDescription($description) { $this->description = $description; }
    public function setImage($image) { $this->image = $image; }
    public function setDuree($duree) { $this->duree = $duree; }
    public function setIdCategorie($id_categorie) { $this->id_categorie = $id_categorie; }
}
?>
