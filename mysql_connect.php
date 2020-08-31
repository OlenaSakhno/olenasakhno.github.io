<?php
  $user = 'root';
  $password = '';
  $db = 'testingbd';
  $host = 'localhost';
  //$user = 'Olena';
  //$password = 'MSS@khn0_H_38!';
  //$db = 'testingbd';
  //$host = 'localhost';
  $dsn = 'mysql:host='.$host.';dbname='.$db;
  $pdo = new PDO($dsn, $user, $password);
?>
