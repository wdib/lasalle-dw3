<?php
  declare(strict_types = 1);
  include '../src/bootstrap.php';

  $email    = '';
  $password = '';
  $errors   = [];

  if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
    $email    = $_POST[ 'email'    ];
    $password = $_POST[ 'password' ];

    if ( ! is_valid_password( $password ) ) {
      $errors[ 'password' ] = 'Password must be between 6-14 characters';
    }

    $error_count = count( $errors );

    if ( $error_count === 0 ) {
      $student = $college->getStudent()->login( $email, $password );
      if ( $student ) {
        $college->getSession()->create( $student );
        redirect( 'index.php', [ 'student_id' => $student[ 'id' ] ] );
      }
      else {
        $errors[ 'message' ] = 'You have entered an invalid username or password';
      }
    }
  }
?>

<?php include APP_ROOT . '/public/includes/header.php' ?>
</nav>

<?php if ( isset( $errors[ 'message' ] ) ) { ?>
  <div class="alert alert-danger"><?= $errors[ 'message' ] ?></div>
<?php } ?>

<form method="POST" action="login.php">
  <input type="email" name="email" placeholder="Email address" value="<?= $email ?>">
  <br />
  <input type="password" name="password" placeholder="Password" value="<?= $password ?>">
  <br />
  <?php if ( isset( $errors[ 'password' ] ) ) { ?>
    <span class="alert-danger"><?= $errors[ 'password' ] ?? '' ?></span>
  <?php } ?>
  <br />
  <input type="submit" value="Log In">
</form>

<?php include APP_ROOT . '/public/includes/footer.php' ?>