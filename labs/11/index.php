<?php
  declare(strict_types = 1);

  function is_number( $number, $min = 0, $max = 100 ): bool {
    return ( $number >= $min and $number <= $max );
  }

  function is_text( $text, $min = 0, $max = 1000 ): bool {
    $length = mb_strlen( $text );
    return ( $length >= $min and $length <= $max );
  }

  $user = [
    'name'  => '',
    'age'   => '',
    'terms' => '',
  ];

  $errors = [];

  $message = '';

  if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
    $user[ 'name'  ] = $_POST[ 'name' ];
    $user[ 'age'   ] = $_POST[ 'age'  ];
    $user[ 'terms' ] = isset( $_POST[ 'terms' ] );

    if ( ! is_text( $user[ 'name' ], 2, 20 ) ) {
      $errors[ 'name' ] = 'Must be 2-20 characters';
    }

    if ( ! is_number( $user[ 'age' ], 16, 65 ) ) {
      $errors[ 'age' ] = 'You must be 16-65';
    }

    if ( $user[ 'terms' ] != true ) {
      $errors[ 'terms' ] = 'You must agree to the terms and conditions';
    }

    $error_count = count( $errors );
    $message     = $error_count > 0
      ? 'Please correct the following errors:'
      : 'Your data was valid'
    ;
  }
?>

<?php include 'includes/header.php'; ?>

<?= $message ?>

<form action="index.php" method="POST">
  Name: <input
    type  = "text"
    name  = "name"
    value = "<?= htmlspecialchars( $user[ 'name' ] ) ?>"
  >
  <span class="error">
    <?= isset( $errors[ 'name' ] ) ? $errors[ 'name' ] : '' ?>
  </span>
  <br />
  Age:  <input
    type  = "text"
    name  = "age"
    value = "<?= htmlspecialchars( $user[ 'age' ] ) ?>"
  >
  <span class="error">
    <?= isset( $errors[ 'age' ] ) ? $errors[ 'age' ] : '' ?>
  </span>
  <br />
  <input 
    type  = "checkbox" 
    name  = "terms" 
    value = "true"
    <?= $user[ 'terms' ] ? 'checked' : '' ?>
  >
  I agree to the terms and conditions
  <span class="error">
    <?= isset( $errors[ 'terms' ] ) ? $errors[ 'terms' ] : '' ?>
  </span>
  <br />
  <input type="submit" value="Save">
</form>

<?php include 'includes/footer.php'; ?>