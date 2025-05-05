<?php
  // Begin /DO NOT MODIFY/
  // The following script is required for the core functionality of the app
  // and must not be modified

  define( 'APP_ROOT', dirname( __FILE__, 2 ) );

  // Examples for reference:
  //   src_abs_path    => /Applications/XAMPP/xamppfiles/htdocs/exam/src
  //   htdocs_abs_path => /Applications/XAMPP/xamppfiles/htdocs
  //   src_rel_path    => /exam/src
  //   parent_rel_path => /exam
  //
  $src_abs_path    = __DIR__;
  $htdocs_abs_path = $_SERVER[ 'DOCUMENT_ROOT' ];
  $src_rel_path    = substr( $src_abs_path, strlen( $htdocs_abs_path ) );
  $parent_rel_path = dirname( $src_rel_path );
  define( 'DOC_ROOT', $parent_rel_path . '/public/' );

  // Load global functions
  require APP_ROOT . '/src/functions.php';

  // Load global configuration
  require APP_ROOT . '/config.php';

  spl_autoload_register( function ( $class_name ) {
    $path = APP_ROOT . '/src/classes/';
    require $path . $class_name . '.php';
  });

  $college = new College( $dsn, $username, $password );
  
  // . END /DO NOT MODIFY/
?>