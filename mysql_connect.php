<?php
  $user = 'root';
  $password = '';
  $db = 'testingbd';
  $host = 'localhost';
  //$user = 'olenasco';
  //$password = 'S@khn0_H_39!';
  //$db = 'testingbd';
  //$host = 'localhost';
  $dsn = 'mysql:host='.$host.';dbname='.$db;
  $pdo = new PDO($dsn, $user, $password);
?>
