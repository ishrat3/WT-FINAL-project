<?php
session_start()
include "../view/changpass.php"
if(isValid($_POST['changpassword'])){
echo "password succesfully changed ";
}else
echo "retype password";
header("Location: http://localhost/MVC/view/home.php");
?>
