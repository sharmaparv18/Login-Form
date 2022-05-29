<?php
session_start();
if(isset($_SESSION['email'])){
    header('location:welcome.php');
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" >
     <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div class="container-fluid bg">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-12">
                    
                </div>
                <div class="col-md-4 col-sm-4 col-12">
                    <form class="form-border" method="POST" action="validate.php">
                         <img src="login.png" class=" img-responsive mx-auto d-block" style="height: 90px;width:90px">
                          
                        
                     <div class="form-group">
                    <label for="email" class="text-light">Email address</label>
                    <input type="email" class="form-control text-dark" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email"
                           value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>">
                  
                  </div>
                  <div class="form-group">
                    <label for="password" class="text-light">Password</label>
                    <input type="password" class="form-control text-dark" name="password" id="password" placeholder="Password"
                           value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
                
                  </div>
                         <?php if(isset($_GET['error'])){
                                echo " <p class='text-danger ' >".$_GET['error']."</p>";
                         }
                         ?>
                  <div class="form-check form-group">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                    <label class="form-check-label text-light" for="exampleCheck1">Remember me</label>
                  </div>
                            
                  <button type="submit" class="btn btn-custom btn-block" name="submit">Login</button>
                               <?php if(isset($_GET['error1'])){
                                echo " <p class='text-danger ' >".$_GET['error1']."</p>";
                         }
                         ?>
                  </form>
                    
                </div>
                <div class="col-md-4 col-sm-4 col-12">
                    
                </div>
            </div>
        </div>
    </body>
</html>
<?php 
                 session_start();
  if(isset($_COOKIE['email']) and isset($_COOKIE['password'])){?>
<script type="text/javascript">
    document.getElementById('email').value=<?php  $_COOKIE['email']?> ;
    document.getElementById('password').value=<?php $_COOKIE['password']?> ;
</script>
    
    
      <?php }
?>
