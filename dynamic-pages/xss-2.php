<a class="badlink" href="xss-2.php?msg=<script src=js/bad.js></script>">
LINK TO DEMONSTRATE XSS</a>

<?php
  $message = $_GET[ 'msg' ] ?? 'Click link at top of page';
?>
<?php include 'includes/header.php' ?>

<h1>XSS Example</h1>
<p><?= htmlspecialchars( $message ) ?></p>

<?php include 'includes/footer.php' ?>