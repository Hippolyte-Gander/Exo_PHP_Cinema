<?php

class Acteur {
    private string $prenom;
    private string $nom;
    private DateTime $dateNaissance;



    public function __construct(string $prenom, string $nom, DateTime $dateNaissance) {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->dateNaissance = $dateNaissance;

    }

    public function __toString() {
        return $this->prenom . " ". $this->nom;
    }








    # Début des Getter and Setter----------------------------------






}




?>