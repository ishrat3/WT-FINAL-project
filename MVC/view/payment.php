<!DOCTYPE html>
<html>
<head>
	<title> payment Page</title>
</head>
<body>
<form action="/action_payment.php" method = "POST">	
<fieldset>
<legend>Payment</legend>	
<label for="post">choose a post for payment:</label>
<select  name="post" id="post">
<option
value ="admin">admin</option>
<option
value ="voting_agent">voting_agent</option>
<option
value ="second_officer">seond_officer</option>
<option
value ="poling_agent">poling_agent</option>
<option
value ="clerk">clerk</option>
</select>
<br><br>
<input type="button" value="pay">
</fieldset>
</form>
<?php
if($_SERVER['REQUEST_METHOD']==="POST"){
echo"salary of admin is".$salaries['admin']."<br />";
echo"salary of Voting_agent is".$salaries['voting_agent']."<br />";
echo"salary of second_officer is".$salaries['second_officer']."<br />";
echo"salary of poling_officer is".$salaries['poling_officer']."<br />";
echo"salary of clerk is".$salaries['clerk']."<br />";
$salaries = array("admin" =>20000,"voting_agent"=>10000,"second_officer"=>15000,"poling_officer","$admin"=>9500,"clerk"=>5000);
if($array==20000){
}else{
	return "$salaries";
}
if($array==10000){
	echo "$Voting_agent";
}else{
	return "$salaries";
}
if($array==15000){
	echo "$second_officer";
}else{
	return "$salaries";
}
if($array==9500){
	echo "$poling_officer";
}else{
	return "$salaries";
}
if($array==5000){
	echo "$clerk";
}else{
	return "$salaries";
}
$file = fopen("fileio.json"," w");
fwrite($file, salaries);
var_dump(fread($file, filesize("fileio.json")));
$fileio = fread($file, filesize("fileio.json"));
$fileio = json_decode($fileio);
var_dump($fileio);
echo("<hr><hr>");
echo $salaries->admin." ".$salaries->voting_agent." ".$salaries->second_officer." ".$salaries->poling_officer." ".$salaries->clerk;

}
?>
</body>
</html>



