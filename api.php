<?php
  include __DIR__ . '/data/db.php';

  $genres = [];
  $years = [];
  $dbOrdered = [];

  foreach ($database as $disc) {
    if (!in_array($disc['year'], $years)) {
      $years[] = $disc['year'];
    }
    rsort($years); 
  }

  foreach ($years as $year) {
    foreach ($database as $disc) {
      if ($year === $disc['year']) {
        $dbOrdered[] = $disc;
      }
    }
  }
  
  $discs = empty($_GET['genre']) || $_GET['genre'] === 'all' ? $dbOrdered : [];
  
  foreach ($database as $disc) {
    if (!in_array($disc['genre'], $genres)) {
      $genres[] = $disc['genre'];
    }
  }

  if (count($discs) === 0) {
    foreach ($dbOrdered as $disc) {
      if ($disc['genre'] === $_GET['genre']) {
        $discs[] = $disc;
      }
    }
  }

  $response = [
    'discs' => $discs,
    'genres' => $genres
  ];

  header('Content-Type: application/json');

  echo json_encode($response);

?>