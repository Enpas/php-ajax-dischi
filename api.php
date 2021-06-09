<?php

  include __DIR__ . '/data/db.php';

$arrGenres = [];
$arrDiscs = empty($_GET['genre']) || $_GET['genre'] === 'all' ? $database : [];

foreach($database as $disc){

  if(!in_array($disc['genre'],$arrGenres)){
    $arrGenres[] = $disc['genre'];
  }

}

if(count($arrDiscs) === 0){

  foreach($database as $disc){
    if($disc['genre'] === $_GET['genre']){
      $arrDiscs[] = $disc;
    }
  }

}


$response = [
  'arrDiscs' => $arrDiscs,
  'arrGenres' => $arrGenres
];

  header('Content-Type: application/json');

  echo json_encode($database);

?>