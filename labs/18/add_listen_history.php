<?php
  include 'Database.php';

  $db  = new Database();
  $pdo = $db->getConnection();

  function add_listen_history ( $user_id, $track_id ) {
    $sql="INSERT INTO listen_history
      ( user_id, track_id )
      VALUES ( :user_id, :track_id );"
    ;
    $statement = $pdo->prepare( $sql );
    $statement->execute([
      'user_id' => $user_id,
      'track_id'=> $track_id
    ]);
    return $statement;
  }
?>