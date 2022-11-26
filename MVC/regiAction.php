<?php
      session_start();
      require "../view/regi.php";
         $nameErr = $emailErr = $genderErr  = $passwordErr = $confirmpasswordErr =  $postErr ="";
         $name = $email = $gender = $password = $confirmpassword = $post = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
               $nameErr = "Name is required";
            }else {
               $name = test_input($_POST["name"]);
            }
            
            if (empty($_POST["email"])) {
               $emailErr = "Email is required";
            }else {
               $email = test_input($_POST["email"]);
               
            
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format"; 
               }
            }
            
            if (empty($_POST["password"])) {
               $password = "";
            }else {
               $password = test_input($_POST["password"]);
            }
            
            if (empty($_POST["confirmpassword"])) {
               $confirmpassword = "";
            }else {
               $confirmpasswordErr = test_input($_POST["confirmpassword"]);
            }
            
            if (empty($_POST["gender"])) {
               $genderErr = "Gender is required";
            }else {
               $gender = test_input($_POST["gender"]);
            }
            
            if (empty($_POST["post"])) {
               $postErr = "You must select 1 or more";
            }else {
               $post = $_POST["post"];	
            }
         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
		
   
         echo "<h2>Your given values are as :</h2>";
         echo ("<p>Your name is $name</p>");
         echo ("<p> your email address is $email</p>");
         echo ("<p>Your password is $password</p>");
         echo ("<p>your confirmpassword is $confirmpassword</p>");
         echo ("<p>your gender is $gender</p>");
         echo ("<p>your post is $post</p>");
         header("Location: http://localhost/MVC/view/database.php");
         ?>
         


