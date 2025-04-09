<?php
  declare(strict_types = 1);
  require 'includes/database-connection.php';
  require 'includes/functions.php';

  $id = $_GET[ 'id' ];

  if ( ! $id ) {
    include 'page-not-found.php';
  }

  $sql = "SELECT
      forename, surname, joined, picture
    FROM member
    WHERE id = :id;"
  ;

  $member = pdo( $pdo, $sql, [ 'id' => $id ] )->fetch();

  if ( ! $member ) {
    include 'page-not-found.php';
  }

  $sql = "SELECT
      A.id,          A.title,     A.summary,
      A.category_id, A.member_id,
      C.name AS category,
      CONCAT( M.forename, ' ', M.surname ) AS author,
      I.file AS image_file,
      I.alt  AS image_alt 
    FROM article    AS A
    JOIN      category AS C ON A.category_id = C.id
    JOIN      member   AS M ON A.member_id   = M.id
    LEFT JOIN image    AS I ON A.image_id    = I.id
    WHERE
      A.member_id = :id AND
      A.published = 1
    ORDER BY A.created DESC;"
  ;

  $articles = pdo( $pdo, $sql, [ 'id' => $id ] )->fetchAll();

  $title       = $member[ 'forename' ] . ' ' . $member[ 'surname' ];
  $description = $title . ' on Creative Folk';
  $section     = '';

  $sql         = "SELECT id, name FROM category WHERE navigation = 1;";
  $navigation  = pdo( $pdo, $sql )->fetchAll();
?>

<?php include 'includes/header.php'; ?>

<main class="container" id="content">
  <section class="header">
    <h1>
      <?=
        htmlspecialchars( $member[ 'forename' ] . ' ' . $member[ 'surname' ] )
      ?>
    </h1>
    <p class="member">
      <b>Member since:</b> <?= format_date( $member[ 'joined' ] ) ?>
    </p>
    <img
      src   = "uploads/<?= htmlspecialchars( $member[ 'picture' ] ?? 'member.png' ) ?>"
      alt   = "<?= htmlspecialchars( $member[ 'forename' ] ) ?>"
      class = "profile"
    />
    <br />
  </section>
  <section class="grid">
    <?php foreach ( $articles as $article ) { ?>
      <article class="summary">
        <a href="article.php?id=<?= $article[ 'id' ] ?>">
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
  </section>
</main>

<?php include 'includes/footer.php'; ?>