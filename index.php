<?php

require "realisateur.php";
require "acteur.php";
require "role.php";
require "casting.php";
require "genre.php";
require "film.php";


$genreSF = new Genre ("science-fiction");
$f1 = new Film("La Revanche des Sits", "01-01-2006", 180, $genreSF);


echo var_dump($f1);


echo $f1->get







?>