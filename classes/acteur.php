<?php

class Acteur {
    private string $prenom;
    private string $nom;
    private DateTime $dateNaissance;
    private string $sexe;
    private array $listeFilms;

    public function __construct(string $prenom, string $nom, $dateNaissance, string $sexe) {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->dateNaissance = new DateTime($dateNaissance);
        $this->sexe = $sexe;
        $this->listeFilms = [];
    }

    public function __toString() {
        return $this->prenom . " ". $this->nom;
    }

// Ajout d'un film dans le tableau Acteur
    public function ajoutFilmDeLActeur(Casting $listeFilm) {
        $this->listeFilms[] = $listeFilm;
    }

// Afficher filmographie d'un acteur
    public function afficherRolesActeur() {
        $result = "L'acteur ".$this. " a joué dans les films: <br>";
        foreach ($this->listeFilms as $film) {
            $result .= "- " . $film->getFilm() . "<br>";
        }
        return $result;
    }

    # Début des Getter and Setter----------------------------------
    public function getListeFilms(): array
    {
        return $this->listeFilms;
    }

    public function setListeFilms(array $listeFilms): self
    {
        $this->listeFilms = $listeFilms;

        return $this;
    }

    public function getSexe(): string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getDateNaissance(): DateTime
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(DateTime $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }



}
?>