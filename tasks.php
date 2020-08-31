<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
    $website_title = 'TASKS';
    require 'blocks/head.php';
    ?>
  
</head>

<body>
<?php
require 'blocks/header.php'
?>
    
    <!-- TASK 1-->
<br>
    <h2 class="ml-3 mt-5">Second degree equations</h2>
    <div class="col-lg-6">
    <p>If not allergic to High School math: try to write a piece of code that solves second degree equations. You pass the a, b, c parameters of: ax2 + bx + c, and the solve function will compute delta = b2 - 4a*c. Test the sign of delta, and if it's equal to zero, 
    then display (in the console, or better, in the page) the roots of the equation</p>
    </div>
    <form class="ml-5" id="varform">
    <div>
    a <input class="mt-2" name="a" placeholder="enter a"><br>
    b <input class="mt-2" name="b"placeholder="enter b"><br>
    c <input class="mt-2" name="c"placeholder="enter c"><br>
    </div>
    <button  type="button" class="btn btn-primary mt-2">Solution</button>
    </form>

    <div class="ml-5" id="solution">
    </div>
    <hr><hr>

    <!-- TASK 2-->
    <div class="task2 col-lg-6">
    <h2>Guess a number</h2>
    <p>Try to write a small program that asks you to guess a number. It will choose randomly a number, and will ask you to enter a value in an input field. Then it will display "too small" or "too big", until you find the number.</p>

    <input  class="num info ml-5" placeholder="enter your number">
    <button  type="button" name="button" class="btn btn-primary mt-2">Enter</button>
    <div class="ml-5" id="answer">
    </div>
    </div>
    <hr><hr>
    <!-- TASK 3-->
    <div class="task3 col-lg-6">
    <h2>Quese</h2>
    <p>Try to make a quiz using the DOM and buttons, checkboxes, etc</p>

    <div class="q1">
        <h4>Which actor played in Titanic?</h4>
        <div class="d-block my-3">
                <div class="custom-control custom-radio block">
                    <input id="credit" name="actor" type="radio" class="custom-control-input" checked="" required="">
                    <label class="custom-control-label" for="credit">Leonardo Di Caprio</label>
                </div>
                <div class="custom-control custom-radio block">
                    <input id="debit" name="actor" type="radio" class="custom-control-input" required="">
                    <label class="custom-control-label" for="debit">Christian Bale</label>
                </div>
                <div class="custom-control custom-radio block">
                    <input id="paypal" name="actor" type="radio" class="custom-control-input" required="">
                    <label class="custom-control-label" for="paypal">Nicolas Cage</label>
                </div>
        </div>
    </div>  

    <!--<div class="q2">
    <h4>Which actor played in Friends?</h4>

    <div class="d-block my-3">
            <div class="custom-control custom-radio test">
                <input id="credit" name="actor" type="radio" class="custom-control-input" checked="" required="">
                <label class="custom-control-label" for="credit">Leonardo Di Caprio</label>
            </div>
            <div class="custom-control custom-radio">
                <input id="debit" name="actor" type="radio" class="custom-control-input" required="">
                <label class="custom-control-label" for="debit">Christian Bale</label>
            </div>
            <div class="custom-control custom-radio">
                <input id="paypal" name="actor" type="radio" class="custom-control-input" required="">
                <label class="custom-control-label" for="paypal">Nicolas Cage</label>
            </div>
    </div>-->
    <div class="container">
        <div class="row col-12">
          <div class="float-left">
                  <button class="btn btn-info" onclick="renderQuestion(false)">Previous</button>
          </div>
          <div class="float-right">
              <button class="btn btn-info ml-5" id="check">Check</button>
              <button class="btn btn-info" onclick="renderQuestion(true)">Next</button>
          </div>
        </div>  
    </div>
    
    <button    class="mt-3 btn btn-link" data-toggle="collapse" data-target="#hide"> JS Collapse </button>
    <div class="collapse in" id="hide"> Some hiden text
    </div>

    <div class="" id="collapse-group">
        <div class="card card-info">
            <div class="card-heading">
                <a data-toggle="collapse" data-parent="#collapse-group" href="#el1">Первый</a>
            </div>
            <div id="el1" class="collapse in">
                <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
            </div>
        </div>

        <div class="card card-danger">
            <div class="card-heading">
                <a data-toggle="collapse" data-parent="#collapse-group" href="#el2">Второй</a>
            </div>
            <div id="el2" class="collapse in">
                <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
            </div>
        </div>
    </div>

    </div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Вспывающее окно</button>
<div id="myModal" class="modal fade" tabindex="-1">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Заголовок окна</h4>
        <button class="close" data-dismiss="modal">х</button>
      </div>
      <div class="modal-body">Некий текст уведомления
      </div>
      <div class="modal-footer">
        <button class="btn btn-danger" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>



<br> <br><br><br>

<div class="container"> 
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">  <a class="nav-link active" href="#firstTab" data-toggle="tab">First tab</a></li>
        <li class="nav-item">  <a class="nav-link" href="#secondTab" data-toggle="tab">Second tab</a>  </li>
        <li class="nav-item">  <a class="nav-link" href="#thirdTab" data-toggle="tab">Third tab</a>  </li>
        <li class="nav-item">  <a class="nav-link" href="#forthTab" data-toggle="tab">Forth tab</a>  </li>
        <li class="nav-item">  <a class="nav-link disabled" href="#" tabindex="-1" xaria-disabled="true">Disabled</a>  </li>
    </ul>

    <div class="tab-content">
        <div role="tabpanel" class=" active tab-pane fade" id="firstTab">Вкладка первая</div>
        <div role="tabpanel" class="tab-pane fade" id="secondTab">Вкладка вторая</div>
        <div role="tabpanel" class="tab-pane fade in" id="thirdTab">Вкладка третья</div>
        <div role="tabpanel" class="tab-pane fade" id="forthTab">Вкладка четвертая</div>
    </div>
</div>

<br> <br><br><br>

<br><br>
<div class="container">
  <a href="#" data-toggle="tooltip" title="Что-то не сработало?">Наведите курсор</a>
  <br>
  <button data-toggle="tooltip" title="Кнопка" data-placement="right" class="btn btn-success">Наведите курсор</button>
  <br><br>
  <a href="#" data-toggle="tooltip" data-placement="left" title="Что-то не сработало?">Наведите курсор</a>
  <br><br>
  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Что-то не сработало?">Наведите курсор</a>
</div>

<br><hr><br><hr><br>
<button>Test of HTML entities &#x203B;</button>
<a href="#">Test of F <i class="fas fa-pepper-hot"></i> NTAWSOME </a>


<div class="container-1">
  <div class="box-1">
    <h3>Box-1</h3>
      <p><h5>Some CSS styles were used</h5>
        .container-1{<br>
          display: flex;<br>
          }<br>
          .box-1{<br>
          flex:2;<br>
          order: 2;<br>
          background-color: rosybrown;<br>
          } <br><hr><hr>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, voluptatibus incidunt explicabo optio sequi earum! Quo quidem expedita natus deserunt sequi veritatis voluptatum quae ratione numquam, facere quam earum incidunt.

      </p>
  </div>
  <div class="box-2">
    <h3>Box-2</h3>
    <p>.container-1{<br>
      display: flex;<br>
      align-items: flex-end;<br>
      }<br><hr><hr>
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore neque deserunt delectus porro velit minus. Praesentium soluta fuga maxime modi consectetur vero neque. Eligendi laudantium incidunt, odio natus dignissimos cumque?</p>
  </div>
  <div class="box-3">
    <h3>Box-3</h3>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore neque deserunt delectus porro velit minus. Praesentium soluta fuga maxime modi consectetur vero neque. Eligendi laudantium incidunt, odio natus dignissimos cumque?</p>
  </div>
</div>
  
<hr><hr>
<!--  FONTS    -->
<div id="Fonts"> 
  <h3>Подключение шрифтов</h3>
  <p>1. Google fonts<br>
    2. Select this style<br>
    3. Embed<br>
    4. Copy @import url<br>
    5. Use styles <br>
            <Caveat> font-family: 'Caveat', cursive;</Caveat><br>
            <Metal_Mania>font-family: 'Metal Mania', cursive;</Metal_Mania><br>
            <Odibee_Sans>font-family: 'Odibee Sans', cursive;<Odibee_Sans>
  </p>
</div>

<!--   SLIDER  -->

<hr><hr>
<h2 class="nav justify-content-center text-info" >Slider</h2>

<div class="carousel slide carousel-fade" data-ride="carousel" id="slider">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/beach-beautiful-bridge-carribean.jpg" class="d-block w-100" >
      <div class="carousel-caption d-none d-md-block"> <!--Caption-->
        <h5>First slide label</h5><!--Caption-->
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p><!--Caption-->
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/beautiful-wallpaper-download-14-640x360.jpg" class="d-block w-100" >
      <div class="carousel-caption d-none d-md-block"> <!--Caption-->
        <h5>Second slide label</h5><!--Caption-->
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p><!--Caption-->
      </div>  
    </div>
    <div class="carousel-item">
      <img src="img/blue-sea-sunset.jpg" class="d-block w-100" >
      <div class="carousel-caption d-none d-md-block"> <!--Caption-->
        <h5>Third slide label</h5><!--Caption-->
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p><!--Caption-->
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

<!--Адаптация под разные экраны -->
<h2 class="nav justify-content-center text-info mt-5 mb-2" >Adaptation to different screen sizes</h2>
<div class="container-fluid">
  <div class="row" jumbotron>
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-1o">
      <h3 class="nav justify-content-center text-danger">Title h3</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem beatae tenetur fugiat consectetur ducimus perferendis corporis inventore? Iste, eius iure! Voluptas aut fugit doloribus, expedita culpa aperiam veritatis architecto unde. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa, excepturi? Animi voluptas eligendi atque libero harum repellendus obcaecati itaque commodi? Aliquid consequuntur in ex quia possimus facere sapiente odio vitae.</p>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
      <a href="#"><button class="btn btn-success btn-lg" type="button">Read more</button></a>
    </div>
  </div>
</div>

<!--   fixed image-->
<h2 class="nav justify-content-center text-info mt-5 mb-2" >Fixed image</h2>
<figure>
<div class="fixed-wrap" id="fixed"></div></figure>
<!--   Collapsed section-->
<h2 class="nav justify-content-center text-info mt-5 mb-2" > Collapsed section</h2>
<div class="text-center">
  <button type="button" class="btn btn-success" id="gifsBnt" data-toggle="collapse" data-target="#gifs">Displey collapsed block</button>
</div>
<div id="gifs" class="collapse">
  <div class="container-fluid padding">
    <div class="row text-center">
      <div class="col-sm-6 col-md-3">
        <img src="/img/1.webp" alt="">
      </div>
      <div class=" col-sm-6 col-md-3">
        <img src="/img/2.webp" alt="">
      </div>
      <div class="col-sm-6 col-md-3">
        <img src="/img/3.webp" alt="">
      </div>
      <div class="col-sm-6 col-md-3">
        <img src="/img/4.webp" alt="">
      </div>
    </div>
  </div>
</div>

<?php require 'blocks/footer.php'?>

    <script src="solutions.js"></script>
    <script>
        $('a[data-toggle="pill"]').on('hidden.bs.tab', function (e) {
        console.log(e.target); // вкладка, которая стала активной
        console.log(e.relatedTarget); // предыдущая активная вкладка
        })
    </script>
<!-- подсказки tooltip.js -->
<script>
  $(document).ready (function (){
    $('[data-toggle="tooltip"]').tooltip ();
  });
</script>


</body>

</html>





