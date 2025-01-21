<?php
  // Logical AND (`&&` or `and`)
  // true  && true  // Result: true
  // true  && false // Result: false
  // false && true  // Result: false
  // false && false // Result: false

  // Logical OR (`||` or `or`)
  // true  || true  // Result: true
  // true  || false // Result: true
  // false || true  // Result: true
  // false || false // Result: false

  // Logical NOT (`!` or `not`)
  // !false // true
  // !true  // false
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="main.css" />
</head>
<body>
  <p>!false is: <?= ! false ?></p>
  <p>!true is: <?= ! true ?></p>
</body>
</html>