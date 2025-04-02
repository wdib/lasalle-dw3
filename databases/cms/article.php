<?php
  declare(strict_types = 1);
  require 'includes/database-connection.php';
  require 'includes/functions.php';

  $id = $_GET[ 'id' ];
  if ( ! $id ) {
    include 'page-not-found.php';
  }

  $sql = "SELECT
      A.title,   A.summary,     A.content,
      A.created, A.category_id, A.member_id, 
      C.name AS category,
      CONCAT( M.forename, ' ', M.surname ) AS author,
      I.file AS image_file,
      I.alt  AS image_alt 
    FROM article     AS A
    JOIN category    AS C  ON A.category_id = C.id
    JOIN member      AS M  ON A.member_id   = M.id
    LEFT JOIN image  AS I  ON A.image_id    = I.id
    WHERE
      A.id        = :id AND
      A.published = 1
    ;"
  ;

  $article = pdo( $pdo, $sql, [ 'id' => $id ] )->fetch();
  
  if ( ! $article ) {
    include 'page-not-found.php';
  }

  $section     = $article[ 'category_id' ];
  $title       = $article[ 'title'       ];
  $description = $article[ 'summary'     ];

  $sql         = "SELECT id, name FROM category WHERE navigation = 1;";
  $navigation  = pdo( $pdo, $sql )->fetchAll();
?>

<?php include 'includes/header.php'; ?>

<main class="article container" id="content">
  <section class="image">
    <img
      src = "uploads/<?= htmlspecialchars( $article[ 'image_file' ] ?? 'blank.png' ) ?>"
      alt = "<?= htmlspecialchars( $article[ 'image_alt' ] ) ?>"
    >
  </section>
  <section class="text">
    <h1><?= htmlspecialchars( $article[ 'title' ] ) ?></h1>
    <div class="date"><?= format_date( $article[ 'created' ] ) ?></div>
    <div class="content"><?= htmlspecialchars( $article[ 'content' ] ) ?></div>
    <p class="credit">
      Posted in <a href="category.php?id=<?= $article[ 'category_id' ] ?>">
        <?= htmlspecialchars( $article[ 'category' ] ) ?></a>
        by <a href="member.php?id=<?= $article[ 'member_id' ] ?>">
        <?= htmlspecialchars( $article[ 'author' ] ) ?></a>
    </p>
  </section>
</main>

<?php include 'includes/footer.php'; ?>