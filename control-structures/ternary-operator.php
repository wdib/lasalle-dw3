<?php 
  $stock   = 5;
  $message = ( $stock > 0 ) ? 'In stock' : 'Sold out';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Ternary Operator</title>
    <link rel="stylesheet" href="/dw3/main.css">
  </head>
  <body>
    <h1>The Bakery</h1>
    <h2>Croissant</h2>
    <p><?= $message ?></p>
  </body>
</html>