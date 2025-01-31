<?php
  // Write a function that has two parameters: price and quantity.
  // The function should:
  //   * Calculate the subtotal
  //   * Calculate the tax (assume a 15% tax rate)
  //   * Add the subtotal and the tax
  //   * Return the total
  function calculate_total ( $price, $quantity ) {
    $subtotal = $price * $quantity;
    $tax      = $subtotal * ( 15 / 100 );
    $total    = $subtotal + $tax;
    return $total;
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Functions with Parameters</title>
    <link rel="stylesheet" href="/dw3/main.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <!-- Call the function with price: 2, quantity 5. -->
    <p>Mints:  $<?= calculate_total( 2, 5 );?></p>
    <!-- Call the function with price: 3, quantity 5. -->
    <p>Toffee: $<?= calculate_total( 3, 5 ); ?></p>
    <!-- Call the function with price: 5, quantity 4. -->
    <p>Fudge:  $<?= calculate_total( 5, 4 ); ?></p>
  </body>
</html>