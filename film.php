<?php

class Film {
    private string $titreFilm;
    private DateTime $dateSortie;
    private int $dureeFilm;
    private Genre $genreFilm;
    private  $synopsis;


    public function __construct(string $titreFilm, $dateSortie, int $dureeFilm,  Genre $genreFilm, $synopsis = null) {
        $this->titreFilm = $titreFilm;
        $this->dateSortie = new DateTime($dateSortie);
        $this->dureeFilm = $dureeFilm;
        $this->dateSortie = new DateTime($dateSortie);
        $this->synopsis = $synopsis;
    }

    public function __toString() {
        return $this->titreFilm;
    }








    # Début des Getter and Setter----------------------------------






}




?>