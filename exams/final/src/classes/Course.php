<?php
  class Course {
    protected $db;

    public function __construct ( Database $db ) {
      $this->db = $db;
    }

    public function get ( int $id ) {
      $sql = "SELECT id, name, description, available_slots
        FROM course
        WHERE id = :id;"
      ;
      return $this->db->runSQL( $sql, [ 'id' => $id ] )->fetch();
    }

    public function getAll ():array {
      $sql = "SELECT id, name, description, available_slots
        FROM course;"
      ;
      return $this->db->runSQL( $sql )->fetchAll();
    }

  }
?>