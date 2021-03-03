<?php

@require_once __DIR__ . '/../database/database.php';
@require_once __DIR__ . '/../functions/functions.php';


header('Content-Type: application/json');

// Variabile che cattura il valore di "genre" passato in $_GET
// $genreQuery = $_GET['genre'];




// Se il valore in $_GET non è vuoto chiamo la funziona che filtra per genere
if(!empty($_GET['genre'])){
  if(array_key_exists('genre', $_GET)){
    $disks = filterByGenre($disks, $_GET['genre']);
    checkGet( $_GET['genre']);
  }

}


// Qua trasformo l'array in json e poi lo stampo
  $json = json_encode($disks);
  echo $json;
