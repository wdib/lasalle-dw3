<?php
  // Old developer comment:
  // "This file contains global application configuration"
  //

  $type     = 'mysql';
  $server   = 'localhost';
  $db       = 'college';
  $port     = '3306';    
  $charset  = 'utf8mb4';    
  $username = ''; // Your non-root username
  $password = ''; // Your non-root username's password

  $dsn = "$type:host=$server;dbname=$db;port=$port;charset=$charset";
?>