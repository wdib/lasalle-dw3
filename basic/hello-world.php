<?php
  $welcome_message = 'Welcome to DW3, number of messages in inbox:';
  $msg_count       = 7;
  $true_bool       = true;
  $false_bool      = false;
  $fruit_list      = [
    'Banana',    // index: 0
    'Apple',     // index: 1
    'Orange',    // index: 2
    'Mango',     // index: 3
    'Grapes',    // index: 4
    'Pineapple'  // index: 5
  ];
  $student = [
    'name'    => 'John Smith',
    'age'     => 21,
    'program' => 'Computer Science'
  ];
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
  <h1><?php echo $welcome_message; ?></h1>
  <p><?php  echo $msg_count; ?></p>
  <p>Boolean true prints: <?php  echo $true_bool; ?></p>
  <p>Boolean false prints: <?php  echo $false_bool; ?></p>
  <p><?php echo $fruit_list[ 3 ]; ?></p>
  <p>Student's name is: <?php echo $student[ 'name' ]; ?></p>
</body>
</html>