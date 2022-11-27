<?php
session_start();
include"../MVC/view/checking.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
$age = 0;
if ($age < 18) {
echo "voter_nid exist"
} else {
  echo "voter_nid not exist";
}
header("Location: http://localhost/MVC/view/database.php");	
?>