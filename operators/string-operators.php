<?php
  $username = 'Sally';
  $greeting = 'Good evening, ';

  // String concatenation operator (.)
  $message = $greeting . $username . '!'; // Prints "Good evening, Sally!"

  // String concatenating assignment operator (.=)
  $greeting .= $username . '!'; // This will make the $greeting variable "Good evening, Sally!"
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
  <p><?= $message ?></p>
  <p><?= $greeting ?></p>
</body>
</html>