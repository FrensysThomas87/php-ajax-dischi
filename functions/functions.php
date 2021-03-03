
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


function checkGet($genre){

    if((array_key_exists('genre', $_GET)) && $genre === "Pippo"){
      http_response_code(400);
    }

}

// function checkGet($suorceArray, $genre){
//   foreach ($suorceArray as  $album) {
//     if(array_key_exists('genre', $_GET) && $genre !== $album['genre']   && $genre !== ""){
//         http_response_code(400);
//      }
//   }
// }
