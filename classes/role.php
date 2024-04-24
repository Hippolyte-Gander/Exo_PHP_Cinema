<?php

class Role {
    private string $nomDuRole;
    private array $listeCasting;

    public function __construct(string $nomDuRole) {
        $this->nomDuRole = $nomDuRole;
        $this->listeCasting = [];
    }

    public function __toString() {
        return $this->nomDuRole;
    }

    // Ajout d'un acteur dans le tableau role
    public function ajoutActeurPourRole(Casting $listeActeur) {
        $this->listeCasting[] = $listeActeur;
    }

// Afficher tous les acteurs pour un rôle
    public function afficherActeursDuRole() {
        $result = "Le rôle ".$this. " a été joué par : <br>";
        foreach ($this->listeCasting as $casting) {
            $result .= "- " . $casting->getActeur(). " dans le film ". $casting->getFilm() . "<br>";
        }
        return $result;
    }


    # Début des Getter and Setter----------------------------------
    public function getListeCasting(): array
    {
        return $this->listeCasting;
    }

    public function setListeCasting(array $listeCasting): self
    {
        $this->listeCasting = $listeCasting;

        return $this;
    }

    public function getnomDuRole(): string
    {
        return $this->nomDuRole;
    }

    public function setNomPersonnage(string $nomDuRole): self
    {
        $this->nomDuRole = $nomDuRole;

        return $this;
    }
}
?>