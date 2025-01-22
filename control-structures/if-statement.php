<?php 
  $name     = 'Sally';
  $greeting = 'Hello';

  if ( $name !== '' ) {
    $greeting = 'Welcome back, ' . $name;
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>if Statement</title>
    <link rel="stylesheet" href="/dw3/main.css">
  </head>
    <h1>The Candy Store</h1>
    <h2><?= $greeting ?></h2>
  </body>
</html>