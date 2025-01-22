<?php
  $day = 'Monday';

  switch ( $day ) {
    case 'Monday':
      $offer = '20% off croissants';
      break;

    case 'Tuesday':
      $offer = '20% off muffins';
      break;
    
    default:
      $offer = 'Buy three packs, get one free!';
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>switch Statement</title>
    <link rel="stylesheet" href="/dw3/main.css">
  </head>
  <body>
    <h1>The Bakery</h1>
    <h2>Offers on <?= $day; ?></h2>
    <p><?= $offer ?></p>
  </body>
</html>