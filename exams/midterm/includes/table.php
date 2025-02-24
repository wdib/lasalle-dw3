<table>
  <tr>
    <th>Title</th>
    <th>Genre</th>
    <th>Release year</th>
    <th>Stock</th>
  </tr>
  <?php foreach ( $movie_list as $movie ) {
    $has_genre_filter = $genre_filter !== '';
    $is_in_genre      = $movie->getGenre() === $genre_filter;
  ?>
    <?php
      if ( $has_genre_filter && ! $is_in_genre ) {
        // Skip if there is a genre filter and the movie is not in the genre
      }
      else {
        $is_available = $movie->isAvail();
        $class_str    = $is_available ? '' : 'out-of-stock';
    ?>
      <tr>
        <td class="<?= $class_str ?>">
          <?= $movie->title ?>
        </td>
        <td class="<?= $class_str ?>">
          <?= $movie->genre ?>
        </td>
        <td class="<?= $class_str ?>">
          <?= $movie->releaseYear ?>
        </td>
        <td class="<?= $class_str ?>">
          <?= $movie->stock ?>
        </td>
      </tr>
    <?php } ?>
  <?php } ?>
</table>