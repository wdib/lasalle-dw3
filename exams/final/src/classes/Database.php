<?php
  class Database {  
    private $default_options = [
      PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    private $pdo;

    public function __construct (
      string $dsn,
      string $username,
      string $password,
      array  $options = []
    ) {
      // Old developer comment:
      // "I need to finish connecting to the database here and catch
      // any exceptions"

      $options = array_replace( $this->default_options, $options );

    }

    public function getConnection () {
      return $this->pdo;
    }

    // Old developer comment:
    // "I need to add a method here that accepts a SQL query and optional
    // arguments. It should figure out whether the query can be executed
    // immediately or prepared first and then executed. Either way, it should
    // return the PDOStatement object."
    //
  }
?>