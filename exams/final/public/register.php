<?php
  declare(strict_types=1);
  include '../src/bootstrap.php';

  $student_id = $college->getSession()->student_id;

  if ( $student_id === 0 ) {
    redirect( 'login.php' );
  }

  if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' ) {
    $student_id = $_SESSION[ 'student_id' ];
    $course_id  = $_POST[ 'course_id' ];
    $action     = $_POST[ 'action' ];
    try {
      if ( $action == 'register' ) {
        $is_successful = $college
          ->getRegistration()
          ->create( $student_id, $course_id )
        ;
      }
      elseif ( $action == 'deregister' ) {
        $is_successful = $college
          ->getRegistration()
          ->delete( $student_id, $course_id )
        ;
      }
      else {
        // Nothing
      }
    }
    catch ( Exception $e ) {
      echo "Error: " . $e->getMessage();
    }
  }

  // Begin /DO NOT MODIFY/
  // The following script is required for the core functionality of the app
  // and must not be modified
  ob_start();
  $courses = $college->getCourse()->getAll();
  $registrations = array_column(
    $college->getRegistration()->getAll( $student_id ), 'course_id'
  );
  include APP_ROOT . '/public/includes/table.php';
  $html = ob_get_clean();
  echo $html;
  // . END /DO NOT MODIFY/
?>