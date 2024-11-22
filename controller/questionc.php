<?php
include(__DIR__ . '/../config.php');
include(__DIR__ . '/../Model/question.php');

class questionc
{
    public function listquestion()
    {
        $sql = "SELECT * FROM question";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deletequestion($idquestion)
    {
        $sql = "DELETE FROM question WHERE idquestion = :idquestion";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':idquestion', $idquestion);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addquestion($question)
    {   var_dump($question);
        $sql = "INSERT INTO question  
        VALUES (:texte, :type, :reponsepossible, :reponsecorrecte, :note)";
        $db = config::getConnexion();
        try {
            
            $query = $db->prepare($sql);
            $query->execute([
                'texte' => $question->getquestion(),
                'type' => $question->gettype(),
                'reponsepossible' => $question->getreponsepossible(),
                'reponsecorrecte' => $question->getreponsecorrecte(),
                'note' => $question->getnote(),
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updatequestion($question, $idquestion)
{
    var_dump($question);
    try {
        $db = config::getConnexion();

        $query = $db->prepare(
            'UPDATE question SET 
                idquestion = :idquestion,
                texte = :texte,
                type = :type,
                reponsepossible = :reponsepossible,
                reponsecorrecte = :reponsecorrecte,
                note = :note,
            WHERE idquestion = :idquestion'
        );

        $query->execute([
            'id' => $id,
            'title' => $offer->getTitle(),
            'destination' => $offer->getDestination(),
            'departure_date' => $offer->getDepartureDate()->format('Y-m-d'), 
            'return_date' => $offer->getReturnDate()->format('Y-m-d'),
            'price' => $offer->getPrice(),
            'disponible' => $offer->isDisponible() ? 1 : 0, 
            'category' => $offer->getCategory()
        ]);

        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage(); 
    }
}


    function showquestion($id)
    {
        $sql = "SELECT * from question where idquestion = $idquestion";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $offer = $query->fetch();
            return $offer;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
