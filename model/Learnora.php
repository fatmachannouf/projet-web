<?php

class Cours {
    private ?string $NomC;
    private ?string $ImageC; // Le type devrait être 'string' ou 'blob'
    private ?string $DescriptionC;

    // Constructor
    public function __construct(?string $NomC, ?string $ImageC, ?string $DescriptionC) {
        $this->NomC = $NomC;
        $this->ImageC = $ImageC;
        $this->DescriptionC = $DescriptionC;
    }

    // Getters and Setters

    public function getNomC(): ?string {
        return $this->NomC;
    }

    public function setNomC(?string $NomC): void {
        $this->NomC = $NomC;
    }

    public function getImageC(): ?string {
        return $this->ImageC;
    }

    public function setImageC(?string $ImageC): void {
        $this->ImageC = $ImageC;
    }

    public function getDescriptionC(): ?string {
        return $this->DescriptionC;
    }

    public function setDescriptionC(?string $DescriptionC): void {
        $this->DescriptionC = $DescriptionC;
    }
}


?>
