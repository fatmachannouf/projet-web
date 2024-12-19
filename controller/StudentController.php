<?php
include_once(__DIR__ . '/../config.php');
include(__DIR__ . '/../Model/Student.php');

class StudentController
{
    public function listStudents()
    {
        $sql = "SELECT * FROM students";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste->fetchAll(PDO::FETCH_ASSOC); // Retourne un tableau associatif
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
