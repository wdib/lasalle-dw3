<?php
  class College {
    protected $db           = null;
    protected $student      = null;
    protected $course       = null;
    protected $registration = null;
    protected $session      = null;

    public function __construct ( $dsn, $username, $password ) {
      $this->db = new Database( $dsn, $username, $password );
    }

    public function getStudent () {
      if ( $this->student === null ) {
        $this->student = new Student( $this->db );
      }
      return $this->student;
    }
    
    public function getCourse () {
      if ( $this->course === null ) {
        $this->course = new Course( $this->db );
      }
      return $this->course;
    }
    
    public function getRegistration () {
      if ( $this->registration === null ) {
        $this->registration = new Registration( $this->db );
      }
      return $this->registration;
    }

    public function getSession () {
      if ( $this->session === null ) {
        $this->session = new Session();
      }
      return $this->session;
    }
  }
?>