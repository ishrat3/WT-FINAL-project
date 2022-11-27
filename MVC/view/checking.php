<!DOCTYPE html>
<html>
<p id="demo"></p>
<script src="js/checking.js"></script>
<body>
<form method="post" action="/controller/checkingAction.php"novalidate onsubmit="return is valid(this)">
<fieldset>	
<legend>Checking</legend>	
<br>
<input type="int" id="voter_nid" name="voter_nid">
<br>
Age: <input type="int" name="age">
<?php echo isset($_SESSION['age_msg']) ? $_SESSION['age_msg'] : ""; ?>
<br>
<p class="center"><input value="Checking" type="submit" class="center" /></p>
</form>
</fieldset>
</body>
</html>