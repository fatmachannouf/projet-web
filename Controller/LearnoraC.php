<?php
include("config.php");
class TravelOfferC{
    public function listOffer() {
        $SQL = "SELECT * FROM TravelOffer ";
        $DB = config::getConnexion();
        try {
            $result = $DB->query($SQL);
            return $result;
        }
        catch (Exception $e) {
            die("Error message". $e->getMessage());
    
        }
}
    public function deleteOffer($ID){
        $SQL = "DELETE FROM TravelOffer WHERE ID = :ID";
        $DB = config::getConnexion();
        $req = $DB->prepare($SQL);
        $req->bindValue(':ID', $ID);
        try {
             $req->execute();
        }
        catch (Exception $e) {
            die('Error message'. $e->getMessage());
        }
            
    }
    
    public function addOffer($offer){
        $SQL = 'INSERT INTO TravelOffer VALUES (NULL , :title , :destination,:date_depart ,:date_retour ,:prix ,:disponible ,:categorie)';
        $DB = config::getConnexion();
        try{
            $req = $DB->prepare($SQL);
            $req->execute(['title' => $offer->getTitle() ,
                            'destination' =>$offer->getDestination(),
                            'date_depart' =>$offer->getDateDepart()->format('Y-m-d'),
                            'date_retour' =>$offer->getDateRetour()->format('Y-m-d'),
                            'prix' =>$offer ->getPrix(),
                            'disponible'=>$offer->getDisponible() ? true : false,
                            'categorie' =>$offer->getCategorie() ]);
        }
        catch(Exception $e) {
            die('Error message'. $e->getMessage());
        }
    }

}



?>