<?php

function pdo ( PDO $pdo, string $sql, array $arguments = null ) {
  if ( ! $arguments ) {               // If no arguments
    return $pdo->query( $sql );       // Run SQL and return PDOStatement object
  }
  $statement = $pdo->prepare( $sql ); // If arguments prepare statement
  $statement->execute( $arguments );  // Execute statement
  return $statement;                  // Return PDOStatement object
}

function format_date( string $string ): string {
  $date = date_create_from_format( 'Y-m-d H:i:s', $string );
  return $date->format( 'F d, Y' );
}

?>