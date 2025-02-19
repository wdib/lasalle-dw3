<?php include 'includes/header.php'; ?>

<form action="single-field-form.php" method="POST">
  Name: <input
    type  = "text"
    name  = "user"
    value = "<?= 
      isset( $_POST[ 'user' ] )
      ? htmlspecialchars( $_POST[ 'user' ] )
      : ''
    ?>"
  />
  <input type="submit" value="Save" />
</form>

<?php include 'includes/footer.php'; ?>