<?php
  declare(strict_types = 1);
  include '../src/bootstrap.php';
  $college->getSession()->delete();
  redirect( '' );
?>