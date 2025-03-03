<?php
  // Is there a file you need to include here? If so, which one? And why?

  if ( $logged_in ) {
    header( 'Location: account.php' );
    // What command can you use here to stop script execution?
  }

  if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
    $user_email    = ; // Capture the email from the body of the POST request
    $user_password = ; // Capture the password from the body of the POST request

    if ( $user_email == $email and $user_password == $password ) {
      login();
      // Redirect the user to the account page
      exit;
    }
  }
?>

<?php include 'includes/header-member.php'; ?>

<h1>Login</h1>

<!-- The method attribute below needs a value -->
<form method="" action="login.php">
  Email: <input type="email" name="email">
  <br />
  Password: <input type="password" name="password">
  <br />
  <input type="submit" value="Log In">
</form>

<?php include 'includes/footer.php'; ?>