<!DOCTYPE html>
<html>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<fieldset>	
<legend>Checking</legend>	
<label for="voter_nid">voter_nid:</label>
<br>
<input type="int" id="voter_nid" name="voter_nid">
<br>
<label for="voter_wordno">voter_wordno:</label>
<br>
<input type="int" id="voter_wordno" name="voter_wordno">
<br>
<label for="voter_age">voter_age:</label>
<br>
<input type="int" id="voter_age" name="voter_age">
<br>
<p class="center"><input value="Checking" type="submit" class="center" /></p>
</form>
</fieldset>
<?php
session_start();
 
  if($_SERVER["REQUEST_METHOD"] == "POST"){
     $_SESSION['login_user']=$voter_nid;
 
     header("Location: verified.html");
    }
    else 
    {
    $error="Your voter_nid is invalid";
    }	

?>
</body>
</html>
