

<!DOCTYPE html>
<html lang="en">
<?php
    $page_title='Login';    
    require 'blocks/head.php';
?>

<?php require 'blocks/header.php' ?>

<body>

<main class="container mt-5">
    <div class="row">
      <div class="col-md-8 mb-3 mt-5 ">

        <h2>Login</h2>
        <form role="form" action="" method="post">
            <div class="form-group">
                <label for="email">Email</label>    
                <input type="email" class="form-control" placeholder="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>    
                <input type="password"class="form-control" placeholder="password">
            </div>
        
            <button type="submit" class="btn btn-outline-blue">Login</button>

        </form>
        </div>  
     <!--   <?php require 'blocks/aside.php'; ?> -->

</div>
   
   
</body>
<?php  require 'blocks/footer.php'?>
</html>