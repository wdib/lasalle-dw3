<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    <link href="main.css" rel="stylesheet">
  </head>
  <body>
    <div class="page">
      <nav>
        <a href="home.php">Home</a>
        <a href="products.php">Products</a>
        <a href="account.php">My Account</a>
        <?=
          // If the user is logged in, display a link to the logout page.
          // Otherwise, display a link to the login page.
          // Ensure that both links have the appropriate text.
        ?>
      </nav>
      <section>