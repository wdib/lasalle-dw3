<?php
  $fruit_list = [
    [ 'name' => 'Banana',    'color' => 'yellow'           ],
    [ 'name' => 'Apple',     'color' => 'green'            ],
    [ 'name' => 'Orange',    'color' => 'orange'           ],
    [ 'name' => 'Mango',     'color' => 'yellowish-orange' ],
    [ 'name' => 'Grapes',    'color' => 'purple'           ],
    [ 'name' => 'Pineapple', 'color' => 'brown-green'      ]
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
  <p>A <?php echo $fruit_list[ 0 ][ 'name' ]; ?> is <?php echo $fruit_list[ 0 ][ 'color' ]; ?></p>
  <p><?php echo $fruit_list[ 4 ][ 'name' ] . ' are ' . $fruit_list[ 4 ][ 'color' ]; ?></p>
</body>
</html>