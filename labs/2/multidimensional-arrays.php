<?php 
$offers = [
  [ 'name' => 'Caramel',      'price' => 5, ],
  [ 'name' => 'Cotton candy', 'price' => 3, ],
  [ 'name' => 'Licorice',     'price' => 4, ],
];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Multidimensional Arrays</title>
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Offers</h2>
    <p>
      <?php  echo $offers[ 0 ][ 'name'  ]; ?> -
      $<?php echo $offers[ 0 ][ 'price' ]; ?>
    </p>
    <p>
      <?php  echo $offers[ 1 ][ 'name'  ]; ?> -
      $<?php echo $offers[ 1 ][ 'price' ]; ?>
    </p>
    <p>
      <?php  echo $offers[ 2 ][ 'name'  ]; ?> -
      $<?php echo $offers[ 2 ][ 'price' ]; ?>
    </p>
  </body>
</html>