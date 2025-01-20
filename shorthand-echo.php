<?php
  $a = [
    [ 1, 2,  3,  4  ],
    [ 5, 6,  7,  8  ],
    [ 9, 10, 11, 12 ]
  ];
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
  <p>The magic number is: <?php echo $a[ 2 ][ 2 ]; ?></p>
  <p>The magic number is: <?= $a[ 2 ][ 2 ] ?></p>
</body>
</html>