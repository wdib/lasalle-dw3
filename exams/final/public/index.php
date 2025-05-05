<?php
  declare(strict_types=1);
  include '../src/bootstrap.php';

  $student_id = $college->getSession()->student_id;

  if ( $student_id === 0 ) {
    redirect( 'login.php' );
  }

  // Old developer comment:
  // "Get the available courses from the database"
  $courses = $college->getCourse()->getAll();

  // Old developer comment:
  // "Get the registrations from the database, too, so that the page can use
  // this data to manipulate the Register/Deregister button as needed"
  $registrations = array_column(
    $college->getRegistration()->getAll( $student_id ), 'course_id'
  );
?>

<?php include APP_ROOT . '/public/includes/header.php' ?>
  <div>Welcome, <?= $_SESSION[ 'first_name' ] ?>! <a href="<?= DOC_ROOT ?>logout.php">Logout</a></div>
</nav>

<h2>Available Courses</h2>

<?php if ( empty( $courses ) ) { ?>
  <p>No courses available at the moment.</p>
<?php } else {
    include APP_ROOT . '/public/includes/table.php';
  } 
?>

<?php include APP_ROOT . '/public/includes/footer.php' ?>