<?php
  $username = 'Sally';
  $greeting = 'Hello, ' . $username . '.';
  $offer    = [
    'product'  => 'Croissant',
    'qty'      => 2,
    'price'    => 4,
    'discount' => 3,
  ];
  $usual_price = $offer[ 'qty' ] * $offer[ 'price'    ];
  $offer_price = $offer[ 'qty' ] * $offer[ 'discount' ];
  $saving      = $usual_price - $offer_price;
?>
<!DOCTYPE html>
<html>
  <head>
    <title>The Bakery</title>
    <link rel="stylesheet" href="/dw3/main.css">
  </head>
  <body>
    <h1>The Bakery</h1>
    <h2>Multi-buy Offer</h2>
    <p><?= $greeting ?></p>
    <p>Save $<?= $saving ?></p>
    <p>Buy <?= $offer[ 'qty' ] ?> packs of <?= $offer[ 'product' ] ?> 
      for $<?= $offer_price ?><br> (usual price $<?= $usual_price ?>)</p> 
  </body>
</html>