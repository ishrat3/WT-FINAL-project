<?php
session_start();
include"../MVC/checking.php";
 
  if($_SERVER["REQUEST_METHOD"] == "POST"){
     $_SESSION['login_user']=$voter_nid;
 
     header("Location: homepage.php");
    }
    else 
    {
    $error="Your voter_nid is invalid";
    }
    header("Location: http://localhost/MVC/view/database.php")	

?>

