<?php
  require '../includes/database-connection.php';
  require '../includes/functions.php';

  $sql = "SELECT forename, surname
    FROM member;"
  ;

  $members = pdo( $pdo, $sql )->fetchAll(); 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Using the pdo() function to get database data</title>
    <link rel="stylesheet" type="text/css" href="/dw3/databases/cms/css/styles.css" />
  </head>
  <body>
    <?php foreach ( $members as $member ) { ?>
      <p>
        <?= htmlspecialchars( $member[ 'forename' ] ) ?>
        <?= htmlspecialchars( $member[ 'surname'  ] ) ?>
      <p>
    <?php } ?>
  </body>
</html>