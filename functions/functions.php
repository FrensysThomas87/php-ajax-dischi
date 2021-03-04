
<?php

@require_once __DIR__ . '/../app/server.php';


// Funzione che filtra gli album per genere, generando di volta in volta un nuovo array
function filterByGenre($originalArray, $genere){
  $filtered = [];

  foreach ($originalArray as $album) {
    if($album['genre'] === $genere){
      $filtered[] = $album;
    }
  }
  return $filtered;
}

// Funzione che manda un error 400 se la get ha come valore "Pippo"
// function checkGet($genre){
//   if((array_key_exists('genre', $_GET)) && $genre === "Pippo"){
//       http_response_code(404);
//     }
//   }

function checkGet($suorceArray, $genre){
  if(array_key_exists('genre', $_GET)  && strlen($genre) < 1)  {
    http_response_code(400);
    return;
  }

  $found = false;
  foreach ($suorceArray as  $album) {
    if(array_key_exists('genre', $_GET) && $genre === $album['genre']){
        $found = true;
     }
  }

  if(!$found) {
    http_response_code(404);
  }
}
