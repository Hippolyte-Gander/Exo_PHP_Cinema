<?php

class Casting {
    private Film $film;
    private array $listeRoles;
    private array $listeActeurs;

    public function __construct(Film $film) {
        $this->film = $film;
        $this->listeRoles = [];
        $this->listeActeurs = [];
    }

    public function __toString() {
        return "casting du film " . $this->film;
    }

    // Ajouter nouveau role à la liste de roles
    public function ajoutRole(Role $listeRoles) {
        $this->listeRoles[] = $listeRoles;
        }
    // Ajouter nouvel acteur à la liste d'acteurs
    public function ajoutActeur(Acteur $listeActeurs) {
        $this->listeActeurs[] = $listeActeurs;
        }







    # Début des Getter and Setter----------------------------------





}




?>