<?php
  class Session  {
    public $student_id;
    public $first_name;

    public function __construct () {
      session_start();
      $this->student_id = $_SESSION[ 'student_id' ] ?? 0;
      $this->first_name = $_SESSION[ 'first_name' ] ?? '';
    }

    public function create ( $student ) {
      session_regenerate_id( true );
      $_SESSION[ 'student_id' ] = $student[ 'id' ];
      $_SESSION[ 'first_name' ] = $student[ 'first_name' ];
    }

    public function delete () {
      $_SESSION = [];
      $params   = session_get_cookie_params();
      setcookie(
        'PHPSESSID', '', time() - ( 1 * 60 * 60 ),
        $params[ 'path'     ],
        $params[ 'domain'   ],
        $params[ 'secure'   ],
        $params[ 'httponly' ]
      );
      session_destroy();
    }
  }
?>