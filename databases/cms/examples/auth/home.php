<?php 
  include 'includes/sessions.php';
  include 'includes/header-member.php'; 
?>

<h1>Home</h1>
<p>
  You are currently logged
  <?=
    $logged_in
    ? '<b>in</b> as <b>' . htmlspecialchars( $_SESSION[ 'forename' ] ) . '</b>'
    : '<b>out</b>'
  ?>
</p>

<?php include 'includes/footer.php'; ?>