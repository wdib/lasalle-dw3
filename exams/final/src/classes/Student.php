<?php
  class Student {
    public $id;

    public function __construct ( Database $db ) {
      $this->db = $db;
    }

    public function login ( string $email, string $password ) {
      $sql = "SELECT id, first_name, email, password
        FROM student
        WHERE email = :email;"
      ;
      
      $student = $this->db->runSQL( $sql, [ 'email' => $email ] )->fetch();

      if ( ! $student ) {
        return false;
      }

      // Old developer comment:
      // "Not sure about this line.. need to come back and double-check"
      $is_authenticated = $password === $student[ 'password' ];

      return $is_authenticated ? $student : false;
    }
  }
?>