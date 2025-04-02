<?php
  include 'includes/sessions.php';
  require_login( $logged_in );
?>

<?php include 'includes/header-member.php'; ?>

<h1><?= htmlspecialchars( $forename ) ?>'s Account</h1>
<p>Hello <?= htmlspecialchars( $forename ) ?>, this is your account page!</p>

<?php include 'includes/footer.php'; ?>