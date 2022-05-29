<?php
session_start();


$myemail="sanjay@gmail.com";
$mypass="sanjayjoshi";
if(isset($_REQUEST['submit'])){
                $email= $_POST['email'];
               $password=$_POST['password'];
                 if(($email !=$myemail)|| ($password != $mypass)){
                   header('location:index.php?error1=Wrong email or password');
               }
              else if(strlen($password)<8){
                   header('location:index.php?error=Too short password');
               }
              
               else{
                                        if(isset($_POST['remember'])){
                                                  setcookie('email', $_POST['email'], time()+60*60*7);
                                                     setcookie('password', $_POST['password'], time()+60*60*7);
                                           }
                     session_start();
                     $_SESSION['email']=$email;
                     header('location:welcome.php');
               }

               
}

