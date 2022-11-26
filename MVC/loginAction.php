<?php
        session_start();
        require '../view/login.php';

        $username = $password = "";
        $usernameErr = $passwordErr = "";
        $isValid = true;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            if (!isset($_POST['username']) || empty($_POST['username'])) {

                $usernameErr = "User Name is required";
                $isValid = false;
            }
            else{
                $username = $_POST['username'];
            }

            if (!isset($_POST['password']) || empty($_POST['password'])) {
                $passwordErr = "Password is required";
                $isValid = false;
            }
            else{
                $password = $_POST['password'];
            }
        }
    
    header("Location: http://localhost/MVC/view/database.php");
   exit();
?>