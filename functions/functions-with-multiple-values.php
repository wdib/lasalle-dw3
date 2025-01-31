<?php
  $us_price = 4;
  $fx_rates = [
    'uk' => 0.81,
    'eu' => 0.93,
    'jp' => 113.21,
  ];

  // Write a function that has two parameters: US price and foreign exchange rates.
  // The function should create an associative array:
  //   * The key for each element should be the foreign currency's name
  //   * The value for each element should be the foreign price
  // The function should return the associative array
  function calculate_prices ( $us_price, $exchange_rates ) {
    $foreign_prices = [
      'pound' => $us_price * $exchange_rates[ 'uk' ],
      'euro'  => $us_price * $exchange_rates[ 'eu' ],
      'yen'   => $us_price * $exchange_rates[ 'jp' ]
    ];
    return $foreign_prices;
  }

  // Create a variable, $global_prices, which contains the prices
  // of chocolates in other countries
  $global_prices = calculate_prices( $us_price, $fx_rates );
?>
<!DOCTYPE html>
<html> 
  <head>
    <title>Functions with Multiple Values</title>
    <link rel="stylesheet" href="/dw3/main.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Chocolates</h2>
    <p>US $<?= $us_price ?></p>
    <p>(UK &pound; <?= $global_prices[ 'pound' ] ?> | 
        EU &euro;  <?= $global_prices[ 'euro'  ]  ?> | 
        JP &yen;   <?= $global_prices[ 'yen'   ] ?>)</p>
  </body>
</html>