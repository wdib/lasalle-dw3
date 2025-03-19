<?php
  declare(strict_types=1);
  require 'includes/database-connection.php';

  $sql = "SELECT
      A.id,   A.title, A.summary,
      C.name AS category,
      CONCAT( M.forename, ' ', M.surname ) AS author,
      I.file AS image_file,
      I.alt  AS image_alt
    FROM article AS A
    JOIN      category AS C ON A.category_id = C.id
    JOIN      member   AS M ON A.member_id   = M.id
    LEFT JOIN image    AS I ON A.image_id    = I.id
    WHERE
      A.summary LIKE '%design%' AND
      A.published = 1
    ORDER BY A.created DESC
    LIMIT 6;"
  ;

  $statement = $pdo->query( $sql );
  $articles  = $statement->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/dw3/databases/cms/css/styles.css" />
  </head>
  <body>
    <main class="container grid" id="content">
      <?php foreach ( $articles as $article ) { ?>
        <article class="summary">
          <a href="article.php?id=<?= $article['id'] ?>">
            <img
              src = "uploads/<?= htmlspecialchars( $article[ 'image_file' ] ?? 'blank.png' ) ?>"
              alt = "<?= htmlspecialchars( $article[ 'image_alt' ] ) ?>"
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
    </main>
  </body>
</html>