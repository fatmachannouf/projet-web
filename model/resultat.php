<?php

class resultat
{
    // Propriétés privées
    private $idtest;
    private $userid;
    private $idquestion;
    private $note;
    private $date;

    // Constructeur
    public function __construct($idtest= null,$userid = null, $idquestion = null, $note = null, $date = null)
    {
        $this->idtest = $idtest;
        $this->userid = $userid;
        $this->idquestion = $idquestion;
        $this->note = $note;
        $this->date = $date;
        
    }

    // Getters
    public function getIdtest()
    {
        return $this->idtest;
    }

    public function getuserid()
    {
        return $this->userid;
    }

    public function getidquestion()
    {
        return $this->idquestion;
    }

    public function getnote()
    {
        return $this->note;
    }

    public function getdate()
    {
        return $this->date;
    }
    // Setters
    public function setIdtest()
    {
        return $this->idtest;
    }

    public function setuserid()
    {
        return $this->userid;
    }

    public function setidquestion()
    {
        return $this->idquestion;
    }

    public function setnote()
    {
        return $this->note;
    }

    public function setdate()
    {
        return $this->date;
    }
}

?>
