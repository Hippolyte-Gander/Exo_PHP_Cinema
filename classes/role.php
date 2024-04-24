<?php

class Role {
    private string $nomPersonnage;
    private array $listeActeurs;

    public function __construct(string $nomPersonnage) {
        $this->nomPersonnage = $nomPersonnage;
        $this->listeActeurs = [];
    }

    public function __toString() {
        return $this->nomPersonnage;
    }

// Ajout d'un role dans le tableau Acteur
    // public function ajoutRoleDeLActeur(Role $listeRole) {
    //     $this->listeRoles[] = $listeRole;
    // }







    # Début des Getter and Setter----------------------------------
    public function getNomPersonnage(): string
    {
        return $this->nomPersonnage;
    }

    public function setNomPersonnage(string $nomPersonnage): self
    {
        $this->nomPersonnage = $nomPersonnage;

        return $this;
    }

    public function getListeActeurs(): array
    {
        return $this->listeActeurs;
    }

    public function setListeActeurs(array $listeActeurs): self
    {
        $this->listeActeurs = $listeActeurs;

        return $this;
    }
}




?>