<?php 
$product_list = [
  [ 'name' => 'Caramel',      'price' => 5, ],
  [ 'name' => 'Cotton candy', 'price' => 3, ],
  [ 'name' => 'Licorice',     'price' => 4, ],
];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Multidimensional Arrays</title>
    <link rel="stylesheet" href="/dw3/main.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Offers</h2>
    <p>
      <?php  echo $product_list[ 0 ][ 'name'  ]; ?> -
      $<?php echo $product_list[ 0 ][ 'price' ]; ?>
    </p>
    <p>
      <?php  echo $product_list[ 1 ][ 'name'  ]; ?> -
      $<?php echo $product_list[ 1 ][ 'price' ]; ?>
    </p>
    <p>
      <?php  echo $product_list[ 2 ][ 'name'  ]; ?> -
      $<?php echo $product_list[ 2 ][ 'price' ]; ?>
    </p>
  </body>
</html>