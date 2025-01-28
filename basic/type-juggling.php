<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/dw3/main.css" />
</head>
<body>
  <p><?php echo 'Hi ' . 1.23;  ?></p>
  <p><?php echo 'Hi ' . true;  ?></p>
  <p><?php echo 'Hi ' . false; ?></p>
  <p><?php echo 1 + true;      ?></p>
  <p><?php echo 1 + false;     ?></p>
  <p><?php echo 1 + '1.2';     ?></p>
  <p><?php echo 1 + '3.5star'; ?></p>
  <p><?php //echo 1 + 'star3.5'; ?></p>
  <p><?php echo true  < 0;     ?></p>
  <p><?php echo false < 0;     ?></p>
</body>
</html>