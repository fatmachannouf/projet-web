<?php

class offredeVoayage{

public $ID;
public $titre;
public $destination;  
public $date_depart;
public $date_retour;
public $prix;
public $disponible;
public $categorie;


public function __construct($id_offer,$Titre,$Dest, $date_D,$date_R,$Prix,$Disp,$Cat){

    $this->ID = $id_offer;
    $this->titre = $Titre;
    $this->destination = $Dest;
    $this->date_depart = $date_D;
    $this->date_retour = $date_R;
    $this->prix = $Prix;
    $this->disponible = $Disp;
    $this->categorie = $Cat;


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
    <td>{$this->titre}</td>
    <td>{$this->destination}</td>
    <td>{$this->date_depart}</td>
    <td>{$this->date_retour}</td>
    <td>{$this->prix}</td>
    <td>" . ($this->disponible ? '1' : '0') . "</td>
    <td>{$this->categorie}</td>

    </tr>
    </table>";
}   



}



?>