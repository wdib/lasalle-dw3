<?php
  declare(strict_types = 1);

  include 'classes/Movie.php';

  $movie_list = [
    new Movie( 'The Matrix',    'Sci-Fi', 1999, 5 ),
    new Movie( 'Inception',     'Sci-Fi', 2010, 3 ),
    new Movie( 'Asteroid City', 'Comedy', 2023, 0 ),
    new Movie( 'The Godfather', 'Crime',  1972, 8 ),
  ];

  $genre_list = [];
  foreach ( $movie_list as $movie ) {
    $genre = $movie->getGenre();
    if ( array_search( $genre, $genre_list ) === false ) {
      array_push( $genre_list, $genre );
    }
  }

  $genre_filter = isset( $_GET[ 'genre' ] ) ? $_GET[ 'genre' ] : '';
?>

<?php include 'includes/header.php'; ?>

<nav>
  <?php foreach ( $genre_list as $genre ) { ?>
    <a
      href  = "index.php?genre=<?= urlencode( $genre ) ?>"
      class = "<?= $genre === $genre_filter ? 'active' : '' ?>"
    >
      <?= $genre ?>
    </a>
  <?php } ?>
</nav>

<?php include 'includes/table.php' ?>

<p>Sally just returned "Asteroid City" and rented "The Matrix"</p>

<?php $movie_list[ 2 ]->return(); ?>

<?php $movie_list[ 0 ]->rent();   ?>

<?php include 'includes/table.php' ?>

<?php include 'includes/footer.php'; ?>