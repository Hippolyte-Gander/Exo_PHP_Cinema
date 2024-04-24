<?php


spl_autoload_register(function ($class_name){
    require "classes/". $class_name . ".php";
});


$genreSF = new Genre ("science-fiction");
$real1 = new Realisateur ("Steven", "Spielberg", "H", "18-12-1946");
$real2 = new Realisateur ("Georges", "Lucas", "H", "18-12-1946");
$film1 = new Film("La Revanche des Sits", "01-01-2006", 180, $genreSF, $real2);
$film2 = new Film("Les aventuriers de l'Arche perdue", "01-01-2002", 160, $genreSF, $real1);
$acteur1 = new Acteur("Harrisson", "Ford", "13-03-1964", "H");
$acteur2 = new Acteur("Mark", "Hamil", "11-07-1974", "H");
$acteur3 = new Acteur("Bernard", "Campan", "11-07-1974", "H");
$role1 = new Role ("Han Solo");
$role3 = new Role ("Indiana Jones");
$role2 = new Role ("Luc Skywalker");
$casting1 = new Casting ($film1, $acteur1, $role1);
$casting2 = new Casting ($film1, $acteur2, $role2);
$casting3 = new Casting ($film2, $acteur1, $role3);
$casting4 = new Casting ($film2, $acteur3, $role3);


echo $role3->afficherActeursDuRole() . "<br>";
echo $film1->afficherCastingsDuFilm() . "<br>";
echo $genreSF->getFilmsDuGenre() . "<br>";
echo $acteur1->afficherRolesActeur() . "<br>";
echo $real2->getFilmographieReal(). "<br>";







?>