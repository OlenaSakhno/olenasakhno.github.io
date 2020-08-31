<!DOCTYPE html>
<html lang="ru">
<head>
  <?php
    $website_title = 'Contacts';
    require 'blocks/head.php';
  ?>
</head>
<body class="body_color">
  <?php require 'blocks/header.php'; ?>

  <main class="container mt-5">
    <div class="row">
      <div class="col-md-8 mb-3 mt-5  ">
        <h2 >Contacts</h2><br>

          <form action="" method="post">
              <label for="username">User name</label>
              <input type="text" name="username" id="username" class="form-control">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" class="form-control">
              <label for="email">Message</label>
              <textarea name="mess" id="mess" class="form-control" ></textarea>
              <div class="alert alert-danger mt-2" id="errorBlock"></div>
              <button type="button" id="mess_send" class="btn btn-info mt-3">Send email</button>
            </form>
      </div>
      <?php require 'blocks/aside.php'; ?>
    </div>
  </main>

  <?php require 'blocks/footer.php'; ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script>
    $('#mess_send').click(function () {
      var name = $('#username').val();
      var email = $('#email').val();
      var mess = $('#mess').val();


      $.ajax({
        url: 'ajax/mail.php',
        type: 'POST',
        cache: false,
        data: {'username' : name, 'email' : email, 'mess' : mess},
        dataType: 'html',
        success: function(data) {
          if(data == 'Done') {
            $('#mess_send').text('Sent');
            $('#errorBlock').hide();
            $("#username").val("");
            $("#email").val("");
            $("#mess").val("");

          } else {
            $('#errorBlock').show();
            $('#errorBlock').text(data);
          }
        }
      });
    });


    $('#exit_btn').click(function () {
      $.ajax({
        url: 'ajax/exit.php',
        type: 'POST',
        cache: false,
        data: {},
        dataType: 'html',
        success: function(data) {
          document.location.reload(true);
        }
      });
    });

  </script>
</body>
</html>
