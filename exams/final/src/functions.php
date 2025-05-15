<?php
  // Old developer comment:
  // "This file contains global functions"
  //

  // Old developer comment:
  // "I need a function here that checks that the password submitted in
  // the login form is valid by checking its length which should be between
  // 6 and 14 characters"
  //
  function is_valid_password ( string $password, $min = 6, $max = 14 ) {
    $length = mb_strlen( $password );
    return ( $length >= $min and $length <= $max );
  }

  function redirect ( string $location) {
    header( 'Location: ' . DOC_ROOT . $location );
    exit;
  }
?>