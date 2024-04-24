<?php

class Casting {
    private Film $film;
    private Acteur $acteur;
    private Role $role;

    public function __construct( Film $film, Acteur $acteur, Role $role) {
        $this->film = $film;
        $this->acteur = $acteur;
        $this->role = $role;
        $role->ajoutActeurPourRole($this); // Ajout du acteur au tableau du casting
        $acteur->ajoutFilmDeLActeur($this); // Ajout du film au tableau de l'acteur
        $film->ajoutCastingDuFilm($this); // Ajout du casting au film
    }
    
    public function __toString() {
        return $this->film;
    }

    
    # Début des Getter and Setter----------------------------------
    public function getRole(): Role
    {
        return $this->role;
    }

    public function setRole(Role $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getActeur(): Acteur
    {
        return $this->acteur;
    }

    public function setActeur(Acteur $acteur): self
    {
        $this->acteur = $acteur;

        return $this;
    }

    public function getFilm(): Film
    {
        return $this->film;
    }

    public function setFilm(Film $film): self
    {
        $this->film = $film;

        return $this;
    }




}
?>