<?php
  // Is equal to (==)
  // Is identical to (===)

  // Is not equal to (!=)
  // Is not identical to (!==)

  // Greater than (>)
  // Greater than or equal to (>=)

  // Less than (<)
  // Less than or equal to (<=)
  $a = 5;
  $b = '5';
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
  <p>$a == $b: <?php echo $a == $b; ?></p>
  <p>$a === $b: <?php echo $a === $b; ?></p>
  <p>$a != $b: <?php echo $a != $b; ?></p>
  <p>$a !== $b: <?php echo $a !== $b; ?></p>
</body>
</html>