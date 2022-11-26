<!DOCTYPE HTML>
<html>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$mango="102";
$bat="103"; 
$ball="104"; 
if ($count ==102) {
    echo "mango:can1";
}else{
	echo "invalid";
}
if ($count == 103) {
    echo "bat:can2";
}else{
	echo "invalid";
}
if ($count == 104) {
    echo "ball:can3";
}else{
	echo "invalid";
}
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<fieldset>	
<label for="can1">can1:</label><br><input type="button"  value="count">
<br>
<label for="can2">can2:</label><br><input type="button"  value="count">
<br>
<label for="can3">can3:</label><br><input type="button"  value="count">
</fieldset>
</form>
</body>
</html>







