<!DOCTYPE html>
<html lang="ru">
<head>
  <?php
    $website_title = 'OSakhno/Home';
    require 'blocks/head.php';
  ?>
</head>
<body class="body_color">
  <figure>
  <div class="fixed-wrap" id="fixed">
  <?php require 'blocks/header.php'; ?>

<main class="container mt-5">
  <div class="row">
    <div class="col-md-8 mb-3 mt-5 ">


      <h1 >Welcome</h1>
      <p id="Wel">This is my first web site which was created for my learning. I used my knowledges of HTML, CSS, Bootstrap, JavaScript, PHP, MySQL, Ajax and JQuery.</p>


      <hr><hr>
  <!--    <h2 class="nav justify-content-center text-info" >Slider</h2>-->

      <div class="carousel slide carousel-fade" data-ride="carousel" id="slider">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/slide-1.jpg" class="d-block w-100" >
            <div class="carousel-caption d-none d-md-block"> <!--Caption-->
              <span>Image by <a href="https://pixabay.com/users/danfador-55851/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=190055">Dan Fador</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=190055">Pixabay</a></span><!--Caption-->
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/slide-2.jpg" class="d-block w-100" >
            <div class="carousel-caption d-none d-md-block"> <!--Caption-->
              <span>Image by <a href="https://pixabay.com/users/JillWellington-334088/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=591576">Jill Wellington</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=591576">Pixabay</a></span>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/slide-3.jpg" class="d-block w-100" >
            <div class="carousel-caption d-none d-md-block"> <!--Caption-->
              <span>Image by <a href="https://pixabay.com/users/12019-12019/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1751455">David Mark</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1751455">Pixabay</a></span>
            </div>
          </div>
        </div>
      <!--With controls-->
        <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        <ol class="carousel-indicators">
          <li data-target="#slider" data-slide-to="0" class="active"></li>
          <li data-target="#slider" data-slide-to="1"></li>
          <li data-target="#slider" data-slide-to="2"></li>
        </ol>
      </div>
    </div>






     <?php require 'blocks/aside.php'; ?>



    </div>
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-12 mb-3 mt-5 ">
        <a href="https://goo.gl/maps/aAeBiSVzDeE5ZUyX8" target="_blank" > <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2355.2275838100095!2d-1.6088297841436021!3d53.82102698008115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487958d7b0eefe97%3A0x147215aec6732053!2sKirkstall%20Abbey!5e0!3m2!1sen!2suk!4v1598364120736!5m2!1sen!2suk" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe><span>map</span></div></a>

      </div>
   </div>
  </main>

  <?php require 'blocks/footer.php'; ?>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>


</div>

</figure>




Background Image by <a href="https://pixabay.com/users/Pexels-2286921/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1852945">Pexels</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1852945">Pixabay</a>
<script type="text/javascript">  $('#exit_btn').click(function () {
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
