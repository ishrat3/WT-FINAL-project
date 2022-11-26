<!doctype html>  
<html>  
<head>  
<title>Votting agent</title>  
    <style>   
        body{   
    background-color: azure ;  
    color: palevioletred;   
    font-size: 100%  
      
        }  
            h1 {  
    color: indigo;   
    font-size: 100%;  
}  
         h2 {  
    color: indigo;   
    font-size: 100%;  
}</style>  
</head>  
<body>  
     
    <center><h1>HOME PAGE</h1></center>  
   <p><a href="regi.php">Regi</a> | <a href="login.php">Login</a> | <a href="Payment.php">payment</a> | <a href="checking.php">checking</a> |<a href="vote_count.php">Vote_Count</a> | <a href="changpass.php">changpass</a> | <a href="logout.php">logout</a> | <a href="portfolio.php">portfolio</a> |<a href="profile.php">profile</a></p>
<form action="" method="POST" novalidate> 
 
    <legend>  
    <fieldset>  
          
Username: <input type="text" name="user"><br />  
Password: <input type="password" name="pass"><br />   
<input type="submit" value="Register" name="submit" />  

              
        </fieldset>  
        </legend>
        <footer>
    <p>Copyright &copy; 2014 PHP Development</p>
    <p><a href="ishrat.sj1999@gmail.com">Contact</a></p>
</footer>
</form>  

</body>  
</html>  
<?php
if($_SERVER['REQUEST_METHOD'] ==="POST"){
    if (empty($_POST['user'])){
        echo"user is empty";
    }
    else{
        echo$_POST['user'];
    }

}

