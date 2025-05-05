<?php
  // Old developer comment:
  // "This file contains global application configuration"
  //

  $type     = 'mysql';
  $server   = '';
  $db       = '';
  $port     = '';    
  $charset  = 'utf8mb4';    
  $username = '';
  $password = '';

  $dsn = "$type:host=$server;dbname=$db;port=$port;charset=$charset";
?>