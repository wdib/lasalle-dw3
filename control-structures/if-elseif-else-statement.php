<?php 
  $stock   = 5;
  $ordered = 3;

  if ( $stock > 0 ) {
    $message = 'In stock';
  }
  elseif ( $ordered > 0 ) {
    $message = 'Coming soon';
  }
  else {
    $message = 'Sold out';
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>if else if Statement</title>
    <link rel="stylesheet" href="/dw3/main.css">
  </head>
  <body>
    <h1>The Bakery</h1>
    <h2>Croissant</h2>
    <p><?= $message ?></p>
  </body>
</html>