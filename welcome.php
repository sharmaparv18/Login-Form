<?php
session_start();
if(isset($_SESSION['email'])){
echo 'welcome to our website'.$_SESSION['email'];
echo "<br>Click  <a href='logout.php'>here to logout</a>";
}
else{
    header('location:index.php');
}
?>
