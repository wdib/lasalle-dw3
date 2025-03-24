<?php
  require '../includes/database-connection.php';
  require '../includes/functions.php';

  $id = $_GET[ 'id' ];
  if ( ! $id ) {
    include 'page-not-found.php';
  }

  $sql = "SELECT forename, surname
    FROM member
    WHERE id = :id;"
  ;
  $member = pdo( $pdo, $sql, [ 'id' => $id ] )->fetch();

  if ( ! $member ) {
    include 'page-not-found.php';
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Using functions to get database data 2</title>
    <link rel="stylesheet" type="text/css" href="/dw3/databases/cms/css/styles.css" />
  </head>
  <body>
    <p>
       <?= htmlspecialchars( $member[ 'forename' ] ) ?>
       <?= htmlspecialchars( $member[ 'surname'  ] ) ?>
    </p>
  </body>
</html>