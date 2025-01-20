<?php
  $fruit_list = [
    'Banana', 'Apple',  'Orange',
    'Mango',  'Grapes', 'Pineapple'
  ];
  $student = [
    'name'    => 'John Smith',
    'age'     => 21,
    'program' => 'Computer Science'
  ];

  // Update the fourth element in $fruit_list
  $fruit_list[ 3 ] = 'Watermelon';

  // Update the value of the 'name' element in $student
  $student[ 'name' ] = 'Tony Stark';
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
  <p><?php echo $fruit_list[ 3 ]; ?></p>
  <p>Student's name is: <?php echo $student[ 'name' ]; ?></p>
</body>
</html>