<?php
//Leggo i dati dal file Json
$data = file_get_contents('albums.json');

//Decodifico i dati
$albums = json_decode($data, true);

// Invia i dati come
header('Content-Type: application/json');
echo json_encode($albums);

?>