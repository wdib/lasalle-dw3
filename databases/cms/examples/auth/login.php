<?php
  include 'includes/sessions.php';
  include 'includes/functions.php';
  include 'includes/database-connection.php';

  if ( $logged_in ) {
    header( 'Location: account.php' );
    exit;
  }

  $errors = [];

  if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
    $user_email    = $_POST[ 'email'    ];
    $user_password = $_POST[ 'password' ];

    $sql = "SELECT
        id, forename, email, password
        FROM member
        WHERE email = :email
      ;"
    ;

    $member = pdo( $pdo, $sql, [ 'email' => $user_email ] )->fetch();
    
    if ( ! $member ) {
      $errors[ 'message' ] = 'No user with this email can be found!';
    }
    else {
      if ( password_verify( $user_password, $member[ 'password' ] ) ) {
        login( $member );
        header( 'Location: account.php' );
        exit;
      }
      else {
        $errors[ 'message' ] = 'Please try again!';
      }
    }
  }
?>

<?php include 'includes/header-member.php'; ?>

<h1>Login</h1>

<form method="POST" action="login.php">
  Email: <input type="email" name="email">
  <br />
  Password: <input type="password" name="password">
  <br />
  <input type="submit" value="Log In">
</form>

<?php if ( isset( $errors[ 'message' ] ) ) { ?>
  <div class="alert alert-danger"><?= $errors[ 'message' ] ?></div>
<?php } ?>

<?php include 'includes/footer.php'; ?>