<?php
session_start();
session_destroy();
 if(isset($_COOKIE['email']) and isset($_COOKIE['password'])){
     $email=$_COOKIE['email'];
     $password=$_COOKIE['password'];
 setcookie('email', $email, time()-60*60*7);
 setcookie('password', $password, time()-60*60*7);
 }
header('location:index.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

