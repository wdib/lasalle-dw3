<?php
  $counter = $_COOKIE[ 'counter' ] ?? 0;
  $counter = $counter + 1;
  setcookie( 'counter', $counter );

  $message = 'Page views: ' . $counter;
?>

<?php include 'includes/header.php'; ?> 

<h1>Welcome</h1>
<p><?= $message ?></p>
<p><a href="cookies.php">Refresh this page</a> to see the page views increase.</p>

<?php include 'includes/footer.php'; ?> 