<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
  <form method="post" action="homepage.php" novaldate>
<label for="fname" >Firstname:</label>
<br>
<input type="text" id="fname" name="ishrat">
<br>
<label for="lname" >Lastname:</label>
<br>
<input type="text" id="lname" name="jahan">
<br>
<input type="file">
<br>
<label for="address1" >Address1:</label>
<br>
<input type="text" id="address1" name="address1">
<br>
<label for="district">District:</label>
<select id="district" name="district">
  <option value="Dhaka">Dhaka</option>
  <option value="Sylhet">Dhaka</option>
  <option value="Rajshahi">Rajshahi</option>
  <option value="Comilla">Comilla</option>
</select>
<label for="postcode" >Postcode:</label>
<br>
<input type="postcode" id="postcode" name="postcode">
<br>
<label for="country" >Country:</label>
<br>
<select id="country" name="country">
  <option value="Bangladesh">Bangladesh</option>
  <option value="India">India</option>
  <option value="Nepal">Nepal</option>
  <option value="England">England</option>
</select>
<br>
<br>
<input type="submit"  name="submit" value="submit">
</form>
</body>
</html>