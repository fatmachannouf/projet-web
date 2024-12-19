<?php
class Categorie
{
    private $id_categorie;
    private $type;
    private $description;
    private $image;

    // Constructeur
    public function __construct($id_categorie, $type, $description, $image)
    {
        $this->id_categorie = $id_categorie;
        $this->type = $type;
        $this->description = $description;
        $this->image = $image;
    }

    // Getters
    public function getIdCategorie() { return $this->id_categorie; }
    public function getType() { return $this->type; }
    public function getDescription() { return $this->description; }
    public function getImage() { return $this->image; }

    // Setters
    public function setIdCategorie($id_categorie) { $this->id_categorie = $id_categorie; }
    public function setType($type) { $this->type = $type; }
    public function setDescription($description) { $this->description = $description; }
    public function setImage($image) { $this->image = $image; }
}
?>
