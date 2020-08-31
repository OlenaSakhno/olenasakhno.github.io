<header>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-color">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="AllArticles.php">Articles <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="contacts.php">Contacts <span class="sr-only">(current)</span></a>
        </li>

    <!--   <li class="nav-item active">
          <a class="btn btn-outline-danger btn-lg" href="tasks.php">   Tasks <span class="sr-only">(current)</span></a>
        </li>
-->

        <?php
    if(isset($_COOKIE['login'])):   ?>
        <li class="nav-item">
          <a class="nav-link" href="article.php">Add an article</a>
        </li>
    <?php endif;   ?>

      </ul>
      <form class="form-inline mt-2 mt-md-0">

        <!--<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">-->


        <?php if( isset($_COOKIE['login']) ): ?>
          <a class="btn btn-outline-info my-2 my-sm-0" href="../auth.php">Loged in <?php echo $_COOKIE['login'];?> </a>
          <button class="btn btn-info" id="exit_btn">Logout</button>
          <?php else: ?>
            <a class="btn btn-outline-info my-2 my-sm-0" href="../reg.php">Registration</a>
            <a class="btn btn-outline-info my-2 my-sm-0" href="../auth.php">Login</a>
          <?php endif; ?>
      </form>
    </div>
  </nav>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script >
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


</header>
