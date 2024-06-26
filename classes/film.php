<?php

class Film {
    private string $titreFilm;
    private DateTime $dateSortie;
    private int $dureeFilm;
    private Genre $genreFilm;
    private Realisateur $realisateurDuFilm;
    private  $synopsis;
    private array $listeCastings;


    public function __construct(string $titreFilm, $dateSortie, int $dureeFilm,  Genre $genreFilm, Realisateur $realisateurDuFilm, $synopsis = null) {
        $this->titreFilm = $titreFilm;
        $this->dateSortie = new DateTime($dateSortie);
        $this->dureeFilm = $dureeFilm;
        $this->genreFilm = $genreFilm;
        $this->dateSortie = new DateTime($dateSortie);
        $this->realisateurDuFilm = $realisateurDuFilm;
        $this->synopsis = $synopsis;
        $realisateurDuFilm->ajoutRealisateur($this); // Ajout du film au tableau du realisateur
        $genreFilm->ajoutGenre($this); // Ajout du film au tableau du genre du film
        $this->listeCastings = [];
    }

    public function __toString() {
        return $this->titreFilm;
    }

// Ajout d'un casting dans le film
public function ajoutCastingDuFilm(Casting $listeCasting) {
    $this->listeCastings[] = $listeCasting;
}

// Afficher tous les castings d'un film
public function afficherCastingsDuFilm() {
    $result = "Casting complet du film ".$this. " : <br>";
    foreach ($this->listeCastings as $casting) {
        $result .= "- " . $casting->getRole(). " joué par ". $casting->getActeur() . " dans le film '" .$casting->getFilm() ."'<br>";
    }
    return $result;
}




    # Début des Getter and Setter----------------------------------
    public function getTitreFilm(): string
    {
        return $this->titreFilm;
    }

    public function setTitreFilm(string $titreFilm): self
    {
        $this->titreFilm = $titreFilm;

        return $this;
    }

    public function getDateSortie(): DateTime
    {
        return $this->dateSortie;
    }

    public function setDateSortie(DateTime $dateSortie): self
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }

    public function getDureeFilm(): int
    {
        return $this->dureeFilm;
    }

    public function setDureeFilm(int $dureeFilm): self
    {
        $this->dureeFilm = $dureeFilm;

        return $this;
    }

    public function getGenreFilm(): Genre
    {
        return $this->genreFilm;
    }

    public function setGenreFilm(Genre $genreFilm): self
    {
        $this->genreFilm = $genreFilm;

        return $this;
    }

    public function getRealisateurDuFilm(): Realisateur
    {
        return $this->realisateurDuFilm;
    }

    public function setRealisateurDuFilm(Realisateur $realisateurDuFilm): self
    {
        $this->realisateurDuFilm = $realisateurDuFilm;

        return $this;
    }

    public function getSynopsis()
    {
        return $this->synopsis;
    }

    public function setSynopsis($synopsis): self
    {
        $this->synopsis = $synopsis;

        return $this;
    }
}




?>