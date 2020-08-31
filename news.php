<!DOCTYPE html>
<html lang="ru">
<head>
  <?php
    require 'mysql_connect.php';
    $sql='SELECT * FROM `articles` WHERE `id`= :id';
    $id=$_GET[`id`];
    $query = $pdo->prepare($sql);
    $query->execute(['id'=>$_GET['id']]);
    $article = $query->fetch(PDO::FETCH_OBJ);

    $website_title = $article -> title;
    require 'blocks/head.php';
  ?>
</head>
<body class="body_color">
  <?php require 'blocks/header.php'; ?>

  <main class="container mt-5">
    <div class="row">
      <div class="col-md-8 mb-3 mt-5 ">
        <div class="jumbotron">
            <h1><?=$article->title?></h1>
            <p><b>By </b> <mark><?= $article->author?></mark></p>
            <?php
                $date=date('d', $article->date);
                $array=[' January ', ' February ',' March ', ' April ',' May ',' June ',' July ',' August ',' September ',' October ',' November ',' December '];
                $date.=$array[date('n', $article->date)-1];
                $date.=date('Y H:i', $article->date);

            ?>
            <p> <u><?= $date?></u></p>
            <p><?=$article->intro?><br>
                <?=$article->article?><br>

            </p>
        </div>

        <form action="/news.php?id=<?= $_GET['id']?>" method="POST">
              <label for="username">User name</label>
            <?php
              if(isset($_COOKIE['login'])):?>
              <input type="text" name="username" id="username" value="<?= $_COOKIE['login']?>" class="form-control">

            <?php
              else:?>
              <input type="text" name="username" id="username"  class="form-control">
              <?php endif; ?>
              <label for="mess">Comment</label>
              <input type="textarea" name="mess" id="mess" class="form-control">

              <br>
              <button type="submit" id="mess_send" class="btn btn-success ">Add comment</button>

            </form>
            <br>
            <h4>Comments:</h4><br>

          <?php
              if($_POST['username']!='' && $_POST['mess']!=''){
              $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
              $mess = trim(filter_var($_POST['mess'], FILTER_SANITIZE_STRING));

              $sql = 'INSERT INTO comments (name, mess, article_id) VALUE(?, ?, ?)';
              $query=$pdo->prepare($sql);
              $query->execute([$username, $mess, $_GET['id']]);
              }

              $sql = 'SELECT * FROM `comments` WHERE `article_id`= :id';
              $query=$pdo -> prepare($sql);
              $query -> execute(['id'=>$_GET['id']]);
              $comments=$query->fetchAll(PDO::FETCH_OBJ);

              foreach($comments as $comment){
                echo "<div class='alert alert-info mb-20'>
                <h4> $comment->name </h4>
                <p>$comment->mess</p>
                </div>";
              }
        ?>


      </div>

      <?php require 'blocks/aside.php'; ?>
    </div>
  </main>

  <?php require 'blocks/footer.php'; ?>
</body>
</html>
