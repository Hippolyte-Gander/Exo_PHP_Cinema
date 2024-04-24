<?php

class Realisateur {
    private string $prenom;
    private string $nom;
    private string $sexe;
    private DateTime $dateNaissance;
    private array $filmsRealises;



    public function __construct(string $prenom, string $nom,string $sexe, $dateNaissance) {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->sexe = $sexe;
        $this->dateNaissance = new DateTime ($dateNaissance);
        $this->filmsRealises = [];
    }

    public function __toString() {
        return $this->prenom . " ". $this->nom;
    }

// Ajout d'un film dans le tableau Realisateur
    public function ajoutRealisateur(Film $filmsRealise) {
        $this->filmsRealises[] = $filmsRealise;
    }

// Afficher bibliographie
    public function getFilmographieReal() {
        $result = "Le réalisateur ".$this." a réalisé les films suivants: <br>";
        foreach ($this->filmsRealises as $filmsRealise) {
            $result .= "- ".$filmsRealise."<br>";
        }
        return $result;
    }

    # Début des Getter and Setter----------------------------------
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

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

    public function getFilmsRealises(): array
    {
        return $this->filmsRealises;
    }

    public function setFilmsRealises(array $filmsRealises): self
    {
        $this->filmsRealises = $filmsRealises;

        return $this;
    }
}




?>