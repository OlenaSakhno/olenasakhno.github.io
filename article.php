<?php
if(!isset($_COOKIE['login'])){
    header('location:/reg.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <?php
    $website_title = 'Add Article';
    require 'blocks/head.php';
  ?>
</head>
<body>
  <?php require 'blocks/header.php'; ?>

  <main class="container mt-5">
    <div class="row">
      <div class="col-md-8 mb-3 mt-5  ">
        <h2 >Add your article</h2>

          <form action="" method="post">
              <label for="title">Title</label>
              <input type="text" name="title" id="title" class="form-control">
              <label for="Intro">Intro</label>
              <textarea name="intro" id="intro" class="form-control"></textarea>
              <label for="Article">Article</label>
              <textarea name="article" id="article" class="form-control"></textarea>

              <div class="alert alert-danger mt-2" id="errorBlock"></div>

              <button type="button" id="add_article" class="btn btn-success mt-3">Add an article</button>
            </form>
      </div>
      <?php require 'blocks/aside.php'; ?>
    </div>
  </main>

  <?php require 'blocks/footer.php'; ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script>
    $('#add_article').click(function () {
      var title = $('#title').val();
      var intro = $('#intro').val();
      var article = $('#article').val();


        $.ajax({
          url: 'ajax/article.php',
          type: 'POST',
          cache: false,
          data: {'title' : title, 'intro' : intro, 'article' : article},
          dataType: 'html',
          success: function(data) {
            if(data == 'Done') {
              $('#add_article').text('Added');
              $('#errorBlock').hide();
            }
            else {
              $('#errorBlock').show();
              $('#errorBlock').text(data);
            }
          }
        });
    });
  </script>
</body>
</html>
