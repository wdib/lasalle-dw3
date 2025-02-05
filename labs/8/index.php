<?php
  class Book {
    public string $title;
    public string $author;
    public int    $yearPublished;

    public function setTitle( $title ) {
      $this->title = $title;
    }

    public function setAuthor( $author ) {
      $this->author = $author;
    }

    public function setYearPublished( $year ) {
      $this->yearPublished = $year;
    }

    public function getBookInfo() {
      return 'Title: ' . $this->title   . ', '
        . 'Author: '   . $this->author  . ', '
        . 'Year: '     . $this->yearPublished
      ;
    }
  }

  $book1 = new Book();
  $book1->setTitle( 'The Great Gatsby' );
  $book1->setAuthor( 'F. Scott Fitzgerald' );
  $book1->setYearPublished( 1925 );

  $book2 = new Book();
  $book2->setTitle( '1984' );
  $book2->setAuthor( 'George Orwell' );
  $book2->setYearPublished( 1949 );
?>
<!DOCTYPE html>
<html> 
  <head>
    <title>Lab 8</title>
    <link rel="stylesheet" href="/dw3/main.css">
  </head>
  <body>
    <h1>The Book Club</h1>
    <h2>Book List</h2>
    <p><?= $book1->getBookInfo(); ?></p>
    <p><?= $book2->getBookInfo(); ?></p>
  </body>
</html>