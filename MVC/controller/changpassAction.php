<!DOCTYPE html>
<html>
<head>
	<title>change password</title>
</head>
<body>
<form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" novalidate>
<fieldset>	
<label for="email" >email:</label>
<br>
<input type="email" id="email" name="ishrat@gmail.com">
<br>
<label for="currentpassword" >currentpassword:</label>
<br>
<input type="password" id="currentpassword" name="ishrat">
<br>
<label for="newpassword" >Newpassword:</label>
<br>
<input type="password" id="newpassword" name="ishrat102">
<br>
<label for="reTypepassword" >reTypepassword:</label>
<br>
<input type="password" id="reTypepassword" name="ishrat102">
<br>
<p class="center"><input value="changpass" type="submit" class="center" /></p>
</fieldset>
</form>
<?php
if(isValid($_POST['changpassword'])){
echo "password succesfully changed ";
}else
echo "retype password";
?>
</body>
</html>