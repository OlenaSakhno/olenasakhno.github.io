<?php
  $title = trim(filter_var($_POST['title'], FILTER_SANITIZE_STRING));
  $intro = trim(filter_var($_POST['intro'], FILTER_SANITIZE_STRING));
  $text = trim(filter_var($_POST['article'], FILTER_SANITIZE_STRING));


    $error = '';
  if(strlen($title) <= 3)
    $error = 'Enter title';
  else if(strlen($intro) <= 10)
    $error = 'Enter intro. Minimum 10 symbors';
  else if(strlen($text) <= 50)
    $error = 'Enter text.Minimum 50 symbols';
 

  if($error != '') {
    echo $error;
    exit();
  }


  require '../mysql_connect.php';


  $sql = 'INSERT INTO articles(title, intro, article, date, author) VALUES(?, ?, ?, ?, ?)';
  $query = $pdo->prepare($sql);
  $query->execute([$title, $intro, $text, time(), $_COOKIE['login']]);



  echo 'Done';
?>
