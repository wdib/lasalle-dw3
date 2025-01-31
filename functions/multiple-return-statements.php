<?php
  $stock = 0;

  // Write a function that accepts the stock number as a parameter
  // If the stock is 10 or more: return 'Good availability'
  // If the stock is more than 0 but less than 10: return 'Low stock'
  // Otherwise: return 'Out of stock'
  function get_message ( $stock_count ) {
    if ( $stock_count >= 10 ) {
      return 'Good availability';
    }
    elseif ( $stock_count > 0 && $stock_count < 10 ) {
      return 'Low stock';
    }
    else {
      return 'Out of stock';
    }
  }
?>
<!DOCTYPE html>
<html> 
  <head>
    <title>Multiple Return Statements</title>
    <link rel="stylesheet" href="/dw3/main.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Chocolates</h2>
    <p><?= get_message( $stock ); ?></p>
  </body>
</html>