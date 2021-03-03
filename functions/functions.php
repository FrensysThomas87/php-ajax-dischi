
<?php

@require_once __DIR__ . '/../app/server.php';


// Funzione che filtra gli album per genere, generando di volta in volta un nuovo array
function filterByGenre($originalArray, $genere){
  $filtered = [];

  foreach ($originalArray as $album) {
    if($album['genre'] === $genere  ){
      $filtered[] = $album;
    }
  }
  return $filtered;
}
