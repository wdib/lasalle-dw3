<?php
  class Movie {
    public string $title;
    public string $genre;
    public int    $releaseYear;
    public int    $stock;

    public function __construct ( $title, $genre, $releaseYear, $stock = 0 ) {
      $this->title       = $title;
      $this->genre       = $genre;
      $this->releaseYear = $releaseYear;
      $this->stock       = $stock;
    }

    public function isAvail (): bool {
      return $this->stock > 0;
    }

    public function rent (): bool {
      if ( $this->isAvail() ) {
        $this->stock -= 1;
        return true;
      }
      return false;
    }

    public function return () {
      $this->stock += 1;
    }

    public function getGenre (): string {
      return $this->genre;
    }
  }
?>