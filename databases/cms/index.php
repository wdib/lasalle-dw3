<?php
  declare(strict_types=1);
  require 'includes/database-connection.php';
  require 'includes/functions.php';

  $sql = "SELECT
      A.id,   A.title, A.summary,
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
      A.published = 1
    ORDER BY A.created DESC
    LIMIT 6;"
  ;

  $articles = pdo( $pdo, $sql )->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">
    <link rel="shortcut icon" type="image/png" href="/dw3/databases/cms/img/favicon.ico">
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