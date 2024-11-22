<?php

class offredeVoayage{

private  ?int $ID;
private string $titre;
private string $destination;  
private DateTime $date_depart;
private DateTime $date_retour;
private float$prix;
private bool $disponible;
private string $categorie;


public function __construct(?int $id_offer,string $Titre,string $Dest, DateTime $date_D,DateTime $date_R,float $Prix,bool $Disp,string $Cat){

    $this->ID = $id_offer;
    $this->titre = $Titre;
    $this->destination = $Dest;
    $this->date_depart = $date_D;
    $this->date_retour = $date_R;
    $this->prix = $Prix;
    $this->disponible = $Disp;
    $this->categorie = $Cat;


}
public function getId() {
    return $this->ID;
}

public function getTitle() {
    return $this->titre;
}

public function getDestination() {
    return $this->destination;
}

public function getDateDepart() {
    return $this->date_depart;
}

public function getDateRetour() {
    return $this->date_retour;
}

public function getPrix() {
    return $this->prix;
}

public function getDisponible() {
    return $this->disponible;
}

public function getCategorie() {
    return $this->categorie;
}


//method show
public function show(){

    echo "<table border ='1'>
    <tr>
    <td>Title</td>
    <td>Destination</td>
    <td>Departure Date</td>
    <td>Return Date</td>
    <td>Price</td>
    <td>Availbility</td>
    <td>Category</td>
    </tr>
    <tr>
    <td>{$this->getTitle()}</td>
    <td>{$this->getDestination()}</td>
    <td>{$this->getDateDepart()->format('Y-m-d')}</td>
    <td>{$this->getDateRetour()->format('Y-m-d')}</td>
    <td>{$this->getPrix()}</td>
    <td>" . ($this->getDisponible() ? '1' : '0') . "</td>
    <td>{$this->getCategorie()}</td>
    </tr>
    </table>";
}   



}











?>