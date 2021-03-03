<?php

@require_once __DIR__ . '/../database/database.php';
@require_once __DIR__ . '/../functions/functions.php';


header('Content-Type: application/json');

// Variabile che cattura il valore di "genre" passato in $_GET
$genreQuery = $_GET['genre'];

// Se il valore in $_GET non è vuoto chiamo la funziona che filtra per genere
if(!empty($genreQuery)){
  $disks = filterByGenre($disks, $genreQuery);
}

// Qua trasformo l'array in json e poi lo stampo
  $json = json_encode($disks);
  echo $json;
