<?php
  $stock       = 3;
  $user_qty    = 1;
  $can_deliver = true;
  // The user can buy the item if the quantity they want is less than or equal
  // to the quantity in stock AND the merchant is able to deliver it to them
  $can_buy  = ( $user_qty <= $stock ) && $can_deliver;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/dw3/main.css" />
</head>
<body>
  <p><?= $can_buy ?></p>
</body>
</html>