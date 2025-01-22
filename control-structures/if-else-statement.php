<?php 
  $stock = 5;

  if ( $stock > 0 ) {
    $message = 'In stock';
  }
  else {
    $message = 'Sold out';
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>if else Statement</title>
    <link rel="stylesheet" href="/dw3/main.css">
  </head>
  <body>
    <h1>The Bakery</h1>
    <h2>Croissant</h2>
    <p><?= $message ?></p>
  </body>
</html>