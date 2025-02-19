<?php include 'includes/header.php'; ?>

<?php

  $data = [
    'user' => ''
  ];

  $errors  = [];
  $message = '';

  if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {

    $data[ 'user' ] = isset( $_POST[ 'user' ] ) ? $_POST[ 'user' ] : '';
    $is_user_valid  = $data[ 'user' ] != '';

    if ( ! $is_user_valid ) {
      $errors[ 'user' ] = 'Name cannot be empty 😡';
    }

    $error_count = count( $errors );
    $message     = $error_count > 0
      ? 'Some data was invalid'
      : 'Thank you for the valid data'
    ;
  }
?>

<p>
<?= $message ?>
</p>

<form action="single-field-form.php" method="POST">
  Name: <input
    type  = "text"
    name  = "user"
    value = "<?= htmlspecialchars( $data[ 'user' ] ) ?>"
  />
  <span class="error">
    <?= isset( $errors[ 'user' ] ) ? $errors[ 'user' ] : '' ?>
  </span>
  <br />
  <input type="submit" value="Save" />
</form>

<?php include 'includes/footer.php'; ?>