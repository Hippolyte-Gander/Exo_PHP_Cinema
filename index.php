<?php


spl_autoload_register(function ($class_name){
    require "classes/". $class_name . ".php";
});


$genreSF = new Genre ("science-fiction");
$real1 = new Realisateur ("Steven", "Spielberg", "H", "18-12-1946");
$film1 = new Film("La Revanche des Sits", "01-01-2006", 180, $genreSF, $real1);
$acteur1 = new Acteur("Harrisson", "Ford", "13-03-1964", "H");
$role1 = new Role ("Han Solo");
$casting1 = new Casting ($film1, $acteur1, $role1);


echo $real1->getFilmographieReal();
echo $genreSF->getFilmsDuGenre() . "<br>";

// echo ;









?>