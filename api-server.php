<?php

// Includo file databse
include __DIR__ . '/database.php';

// Ritorna formato json
header('Content-Type: application/json');


if ( !empty($_GET['author']) ) {
  
  // Creo array vuoto che conterrà i cd dell'artista selezionato
  $filter_by_author = [];

  foreach ($database as $cd) {
    if ( $cd['author'] === $_GET['author'] ) {
      $filter_by_author[] = $cd;
    }
  }
  echo json_encode($filter_by_author);
} 
else {
  // Stampo risultati in json
  //   ---> converto array db da php a json
  echo json_encode($database);
}




?>