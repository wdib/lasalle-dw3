<?php
  $name = 'Sally';

  $greeting = 'Hello';
  if ( $name ) {
    $greeting = 'Welcome back, ' . $name;
  }

  $product = 'Cake';
  $cost    = 13;

  for ( $i = 1; $i <= 10; $i++ ) {
    $subtotal        = $cost * $i;
    $discount_pct    = $i * 0.04; // 4% = ( 4 / 100) = 0.04
    $discount_dollar = $subtotal * $discount_pct;
    $totals[ $i ]    = $subtotal - $discount_dollar;
  }
?>

<?php include 'includes/header.php'; ?>

<p><?= $greeting ?></p>
<h2><?= $product ?> Discounts</h2>
<table>
  <tr>
    <th>Packs</th>
    <th>Price</th>
  </tr>
  <?php foreach ( $totals as $quantity => $price ) { ?>
    <tr>
      <td>
        <?= $quantity ?>
        pack<?= ( $quantity === 1 ) ? '' : 's'; ?>
      </td>
      <td>
        $<?= $price ?>
      </td>
    </tr>
  <?php } ?>
</table>

<?php include 'includes/footer.php'; ?>