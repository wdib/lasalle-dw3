<?php
  $offer_list = [
    [
      'offer'   => 'Buy 1, get 1 free!',
      'day'     => 'Monday',
      'product' => 'Croissant',
      'stock'   => 10,
    ],
    [
      'offer'   => 'Buy 2, get 1 free!',
      'day'     => 'Tuesday',
      'product' => 'Muffin',
      'stock'   => 8,
    ],
    [
      'offer'   => '10% off!',
      'day'     => 'Wednesday',
      'product' => 'Cake',
      'stock'   => 3,
    ],
    [
      'offer'   => '2 for $10',
      'day'     => 'Thursday',
      'product' => 'Sourdough bread',
      'stock'   => 4,
    ],
  ];

  $today = 'Tuesday';

  switch ( $today ) {
    case 'Monday':
      $offer   = $offer_list[ 0 ][ 'offer'   ];
      $product = $offer_list[ 0 ][ 'product' ];
      $stock   = $offer_list[ 0 ][ 'stock'   ];
      break;

    case 'Tuesday':
      $offer   = $offer_list[ 1 ][ 'offer' ];
      $product = $offer_list[ 1 ][ 'product' ];
      $stock   = $offer_list[ 1 ][ 'stock'   ];
      break;

    case 'Wednesday':
      $offer   = $offer_list[ 2 ][ 'offer' ];
      $product = $offer_list[ 2 ][ 'product' ];
      $stock   = $offer_list[ 2 ][ 'stock'   ];
      break;

    case 'Thursday':
      $offer   = $offer_list[ 3 ][ 'offer' ];
      $product = $offer_list[ 3 ][ 'product' ];
      $stock   = $offer_list[ 3 ][ 'stock'   ];
      break;

    default:
      $offer   = '';
      $product = '';
      $stock   = 0;
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Lab 4</title>
    <link rel="stylesheet" href="/dw3/main.css">
  </head>
  <body>
    <h1>The Bakery</h1>
    <h2>Today is <?= $today ?></h2>
    <?php
      if ( $offer ) {
        echo '<h2>'
          . 'Our special offer for ' . $product
          . '</h2>'
          . '<p>' . $offer . '</p>'
          . '<p>'
            . ( $stock > 0 ? $stock . ' left in stock' : 'Out of stock :(' )
          . '</p>'
        ;
      }
      else {
        echo '<h2>'
          . 'No offers for today'
          . '</h2>'
        ;
      }
    ?>
  </body>
</html>