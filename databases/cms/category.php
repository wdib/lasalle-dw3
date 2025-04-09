<?php

  declare(strict_types=1);
  require 'includes/database-connection.php';
  require 'includes/functions.php';

  // Capture the ID of the category from the query string of
  // the URL. For example, "category.php?id=1".
  $id = $_GET[ 'id' ];

  // If an ID is not available, redirect the user to the
  // "Page not found" page
  if ( ! $id ) {
    include 'page-not-found.php';
  }

  // Fetch the category whose ID is provided
  // If the category does not exist, redirect the user to "Page not found".
  $sql      = "SELECT id, name, description FROM category WHERE id=:id;";
  $category = pdo( $pdo, $sql, [ 'id' => $id ] )->fetch();
  if ( ! $category ) {
    include 'page-not-found.php';
  }

  $sql = "SELECT
      A.id,          A.title,     A.summary,
      A.category_id, A.member_id,
      C.name AS category,
      CONCAT( M.forename, ' ', M.surname ) AS author,
      I.file AS image_file,
      I.alt  AS image_alt
    FROM article AS A
    JOIN      category AS C ON A.category_id = C.id
    JOIN      member   AS M ON A.member_id   = M.id
    LEFT JOIN image    AS I ON A.image_id    = I.id
    WHERE
      A.category_id = :id AND
      A.published   = 1
    ORDER BY A.created DESC
    LIMIT 6;"
  ;

  $articles = pdo( $pdo, $sql, [ 'id' => $id ] )->fetchAll();

  $title       = $category[ 'name'        ];
  $description = $category[ 'description' ];
  $section     = $category[ 'id'          ];

  $sql         = "SELECT id, name FROM category WHERE navigation = 1;";
  $navigation  = pdo( $pdo, $sql )->fetchAll();
?>

<?php include 'includes/header.php'; ?>

<main class="container" id="content">
  <section class="header">
    <h1><?= htmlspecialchars( $category[ 'name'        ] ) ?></h1>
    <p><?=  htmlspecialchars( $category[ 'description' ] ) ?></p>
  </section>
  <section class="grid">
    <?php foreach ( $articles as $article ) { ?>
      <article class="summary">
        <a href="article.php?id=<?= $article[ 'id' ] ?>">
          <img
            src = "uploads/<?= htmlspecialchars( $article[ 'image_file' ] ?? 'blank.png' ) ?>"
            alt = "<?= htmlspecialchars( $article[ 'image_alt' ] ?? '' ) ?>"
          />
          <h2><?= htmlspecialchars( $article[ 'title'   ] ) ?></h2>
          <p><?=  htmlspecialchars( $article[ 'summary' ] ) ?></p>
        </a>
        <p class="credit">
          Posted in <a href="category.php?id=<?= $article[ 'category_id' ] ?>">
          <?= htmlspecialchars( $article[ 'category' ] ) ?></a>
          by <a href="member.php?id=<?= $article[ 'member_id' ] ?>">
          <?= htmlspecialchars( $article[ 'author' ] ) ?></a>
        </p>
      </article>
    <?php } ?>
  </section>
</main>

<?php include 'includes/footer.php'; ?>
