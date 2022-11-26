<?php
require "../view/vote_count.php";
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
header("Location: http://localhost/MVC/view/database.php");
?>







