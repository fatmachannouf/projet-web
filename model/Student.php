<?php
class Student
{
    private $id;
    private $fullname;
    private $email;

    // Constructeur
    public function __construct($id, $fullname, $email)
    {
        $this->id = $id;
        $this->fullname = $fullname;
        $this->email = $email;
    }

    // Getters
    public function getId() { return $this->id; }
    public function getFullname() { return $this->fullname; }
    public function getEmail() { return $this->email; }

    // Setters
    public function setId($id) { $this->id = $id; }
    public function setFullname($fullname) { $this->fullname = $fullname; }
    public function setEmail($email) { $this->email = $email; }
}
?>
