<!DOCTYPE html>
<html>
<body>
<?php
  session_start();
  if(session_destroy())
  {
   header("Location: login.php");
  }
?>	
<form method="post" action="<?php" echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">		
<h2><a href="logout.php">Sign Out</a></h2>
</form>
</body>
</html>