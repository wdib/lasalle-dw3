<?php
  declare(strict_types = 1);
  $age     = '';
  $message = '';

  function is_number( $number, int $min = 0, int $max = 100 ): bool {
    return ( $number >= $min and $number <= $max );
  }

  if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
    $age      = $_POST[ 'age' ];
    $is_valid = is_number( $age, 16, 65 );
    $message  = $is_valid ? 'Age is valid' : 'You must be 16-65';
  }
?>

<?php include 'includes/header.php'; ?>

<?= $message ?>

<form action="validate-number-range.php" method="POST">
  Age: <input
    type  = "text"
    name  = "age"
    size  = "4"
    value = "<?= htmlspecialchars($age) ?>"
  > 
  <input type="submit" value="Save">
</form>

<?php include 'includes/footer.php'; ?>