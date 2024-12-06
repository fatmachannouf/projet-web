<?php

class questions
{
    // Propriétés privées
    private $idquestion;
    private $texte;
    private $type;
    private $reponsepossible;
    private $reponsecorrecte;
    private $note;

    // Constructeur
    public function __construct($idquestion= null,$texte = null, $type = null, $reponsepossible = null, $reponsecorrecte = null, $note = null)
    {
        $this->idquestion = $idquestion;
        $this->texte = $texte;
        $this->type = $type;
        $this->reponsepossible = $reponsepossible;
        $this->reponsecorrecte = $reponsecorrecte;
        $this->note = $note;
    }

    // Getters
    public function getIdQuestion()
    {
        return $this->idquestion;
    }

    public function getTexte()
    {
        return $this->texte;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getReponsesPossibles()
    {
        return $this->reponsepossible;
    }

    public function getReponseCorrecte()
    {
        return $this->reponsecorrecte;
    }

    public function getNote()
    {
        return $this->note;
    }

    // Setters
    public function setIdQuestion($idquestion)
    {
        $this->idquestion = $idquestion;
    }

    public function setTexte($texte)
    {
        $this->texte = $texte;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setReponsesPossibles($reponsepossible)
    {
        $this->reponsepossible = $reponsepossible;
    }

    public function setReponseCorrecte($reponsecorrecte)
    {
        $this->reponsecorrecte = $reponsecorrecte;
    }

    public function setNote($note)
    {
        $this->note = $note;
    }
}

?>
