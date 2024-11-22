<?php
//include_once("../Model/TravelOffer(public_ver).php");
class TravelOfferController {
    public function showTravelOffer(offredeVoayage $offer) {
        echo "<table border='1'>
        <tr>
            <td>Title</td>
            <td>Destination</td>
            <td>Departure Date</td>
            <td>Return Date</td>
            <td>Price</td>
            <td>Availability</td>
            <td>Category</td>
        </tr>
        <tr>
            <td>{$offer->titre}</td>
            <td>{$offer->destination}</td>
            <td>{$offer->date_depart->format('Y-m-d')}</td>
            <td>{$offer->date_retour->format('Y-m-d')}</td>
            <td>{$offer->prix}</td>
            <td>" . ($offer->disponible ? '1' : '0') . "</td>
            <td>{$offer->categorie}</td>
        </tr>
        </table>";
    }
}

?>