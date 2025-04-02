<?php
  session_start();

  $logged_in = $_SESSION[ 'logged_in' ] ?? false;
  $forename  = $_SESSION[ 'forename'  ] ?? '';
  $id        = $_SESSION[ 'id'        ] ?? '';
  
  function login ( $member ) {
    session_regenerate_id( true );
    $_SESSION[ 'logged_in' ] = true;
    $_SESSION[ 'forename'  ] = $member[ 'forename' ];
    $_SESSION[ 'id'        ] = $member[ 'id' ];
  }

  function logout () {
    $_SESSION = [];

    $params = session_get_cookie_params();

    setcookie(
      'PHPSESSID',
      '',
      time() - ( 60 * 60 * 2 ),
      $params[ 'path'     ],
      $params[ 'domain'   ],
      $params[ 'secure'   ],
      $params[ 'httponly' ]
    );

    session_destroy();
  }
  
  function require_login ( $logged_in ) {
    if ( $logged_in == false ) {
      header( 'Location: login.php' );
      exit;
    }
  }
?>