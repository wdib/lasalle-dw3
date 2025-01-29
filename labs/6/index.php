<?php
  $product_list = [
    [
      'day'     => 'Monday',
      'offer'   => 'Buy 1, get 1 free!',
      'product' => 'Croissant',
      'stock'   => 10,
      'price'   => 3.50
    ],
    [
      'day'     => 'Tuesday',
      'offer'   => 'Buy 2, get 1 free!',
      'product' => 'Muffin',
      'stock'   => 0,
      'price'   => 4.25
    ],
    [
      'day'     => 'Wednesday',
      'offer'   => '10% off!',
      'product' => 'Cake',
      'stock'   => 3,
      'price'   => 25
    ],
    [
      'day'     => 'Thursday',
      'offer'   => '2 for $10',
      'product' => 'Sourdough bread',
      'stock'   => 4,
      'price'   => 6
    ],
  ];

  $today = 'Friday';

  $offer_message = '';
  $offer_stock   = 0;

  foreach ( $product_list as $product_map ) {
    if ( $product_map[ 'day' ] === $today ) {
      $offer_product = $product_map[ 'product' ];
      $offer_message = $product_map[ 'offer'   ];
      $offer_stock   = $product_map[ 'stock'   ];
    }
  }

  if ( $offer_stock >= 10 ) {
    $stock_message = 'All stock must go - come get yours!';
  }
  elseif ( $offer_stock > 0 && $offer_stock < 10 ) {
    $stock_message = 'Hurry! Our stock is running fast!';
  }
  else {
    $stock_message = 'Unfortunately, our stock has run out :(';
  }
?>

<?php include 'includes/header.php' ?>

<table>
  <tr>
    <th>Product</th>
    <th>Stock</th>
    <th>Price</th>
  </tr>
  <?php foreach ( $product_list as $product_map ) { ?>
    <tr>
      <td><?=  $product_map[ 'product' ] ?></td>
      <td><?=  $product_map[ 'stock'   ] ?></td>
      <td>$<?= $product_map[ 'price'   ] ?></td>
    </tr>
  <?php } ?>
</table>

<?php
  if ( $offer_message !== '' ) {
    echo '<p>' . $offer_product . ' special offer:</p>';
    echo '<p>' . $offer_message . '</p>';
    echo '<p>' . $stock_message . '</p>';
  }
  else {
    echo '<p>We don\'t have any offers today, but our baked goods are just as delicious!</p>';
  }
?>

<?php include 'includes/footer.php' ?>