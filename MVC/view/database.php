<?php
$hostname='localhost';
$username='root';
$password='';
$dbname='basic';

$conn =mysqli_connect($hostname,$username,$password,$dbname);

$print = "Connection Successful";

if($conn)
{
	echo $print;

}
else
{
	echo "Connection Failed";
}
function credentials($email, $password) {
        $conn = mysqli_connect("localhost", "root", "", "first");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt, "SELECT id, email, password FROM User WHERE email = ? and password = ?");
        mysqli_stmt_bind_param($stmt, "ss", $email, $password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        return $result->num_rows === 1;
    } 
?>