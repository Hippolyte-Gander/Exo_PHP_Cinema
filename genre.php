<?php

class Genre {
    private string $genreFilm;
    private array $listeFilms;

    public function __construct(string $genreFilm) {
        $this->genreFilm = $genreFilm;
        $this->listeFilms = [];
    }

    public function __toString() {
        return $this->genreFilm;
    }

    // Ajouter nouveau film dans un genre
    // public function ajoutFilmDansGenre(Film $titreFilm) {
    //     $this->listeFilms[] = $titreFilm;
    // }







    # Début des Getter and Setter----------------------------------





}




?>