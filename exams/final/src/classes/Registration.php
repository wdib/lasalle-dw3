<?php
  class Registration {
    protected $db;

    public function __construct ( Database $db ) {
      $this->db = $db;
    }

    public function get ( int $id ) {
      $sql = "SELECT id, name
        FROM registration
        WHERE id = :id;"
      ;
      return $this->db->runSQL( $sql, [ 'id' => $id ] )->fetch();
    }

    public function getAll ( $student_id ):array {
      $sql = "SELECT id, course_id
        FROM registration
        WHERE student_id = :student_id;"
      ;
      return $this->db->runSQL( $sql, [ 'student_id' => $student_id ] )->fetchAll();
    }

    function create ( $student_id, $course_id ) {
      // Old developer comment:
      // "Do not register the student for the same course more than once"
      $sql = "SELECT id
        FROM registration
        WHERE student_id = :student_id
          AND course_id  = :course_id;"
      ;
      $registration = $this
        ->db
        ->runSQL( $sql, [
          'student_id' => $student_id,
          'course_id'  => $course_id
        ])
        ->fetch()
      ;
      if ( $registration ) {
        return false;
      }
  
      // Old developer comment:
      // "Register the student for the course"
      $sql = "INSERT INTO registration
        ( student_id, course_id )
        VALUES ( :student_id, :course_id );"
      ;
      $this->db->runSQL( $sql, [
        'student_id' => $student_id,
        'course_id'  => $course_id
      ]);
  
      // Old developer comment:
      // "Need to update the available slots for the course"
      //
      $sql = "UPDATE course
        SET available_slots = available_slots - 1
        WHERE id = :course_id;"
      ;
      $this->db->runSQL( $sql, [ 'course_id' => $course_id ] );

      return true;
    }

    function delete ( $student_id, $course_id ) {
      // Old developer comment:
      // "Do not proceed if the registration does not exist"
      $sql = "SELECT id
        FROM registration
        WHERE student_id = :student_id
          AND course_id  = :course_id;"
      ;
      $registration = $this
        ->db
        ->runSQL( $sql, [
          'student_id' => $student_id,
          'course_id'  => $course_id
        ])
        ->fetch()
      ;
      if ( ! $registration ) {
        return false;
      }
      
      // Old developer comment:
      // "Need to delete the registration for the student and course in question"
      //
      $sql = "DELETE FROM registration WHERE id = :registration_id;";
      $this->db->runSQL( $sql, [ 'registration_id' => $registration[ 'id' ] ] );

      // Old developer comment:
      // "Need to update the available slots for the course"
      //
      $sql = "UPDATE course
        SET available_slots = available_slots + 1
        WHERE id = :course_id;"
      ;
      $this->db->runSQL( $sql, [ 'course_id' => $course_id ] );

      return true;
    }

  }
?>