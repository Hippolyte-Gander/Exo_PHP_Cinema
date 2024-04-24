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
    
// Ajout d'un film dans le tableau Realisateur
    public function ajoutGenre(Film $listeFilm) {
        $this->listeFilms[] = $listeFilm;
    }

// Obtenir la liste des films d'un genre
    public function getFilmsDuGenre() {
        $result = "Les Films du genre ".$this. " sont: <br>";
        foreach ($this->listeFilms as $listeFilm) {
            $result .= "- ".$listeFilm."<br>";
        }
        return $result;
    }






    # Début des Getter and Setter----------------------------------


    public function getGenreFilm(): string
    {
        return $this->genreFilm;
    }

    public function setGenreFilm(string $genreFilm): self
    {
        $this->genreFilm = $genreFilm;

        return $this;
    }

    public function getListeFilms(): array
    {
        return $this->listeFilms;
    }

    public function setListeFilms(array $listeFilms): self
    {
        $this->listeFilms = $listeFilms;

        return $this;
    }
}




?>