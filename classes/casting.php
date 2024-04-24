<?php

class Casting {
    private Film $film;
    private array $acteurs;
    private array $roles;

    public function __construct( Film $film) {
        $this->film = $film;
        $this->acteurs = [];
        $this->roles = [];
    }
    
    public function __toString() {
        return $this->film;
    }

 // Ajout du rôle avec l'acteur comme clé
    public function addRole(Acteur $acteur, Role $role) {
        $this->roles[$acteur] = $role;
    }
 // Ajout d'un acteur avec le role comme clé
    public function addActeur(Role $role, Acteur $acteur) {
        $this->acteurs[$role] = $acteur;
    }








    // Ajout d'un acteur dans le tableau personnage / role
    public function ajoutActeurPourRole(Acteur $listeActeur) {
        $this->acteurs[] = $listeActeur;
    }












    // Obtenir casting d'un film
    public function getCastingFilm() {
        $result = "";
    }

    
    
    // $acteurs->ajoutActeurPourRole($this); // Ajout du acteur au tableau du role
    // $film->ajoutFilmDeLActeur($this); // Ajout du film au tableau de l'acteur
    // $nomPersonnage->ajoutRoleDeLActeur($this); // Ajout du role au tableau de l'acteur



    # Début des Getter and Setter----------------------------------







    

}


?>