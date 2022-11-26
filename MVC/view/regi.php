<!DOCTYPE html>
<html>
   
   <head>
      
   </head>
   
   <body> 
      
      <h2>registration page</h2>
      
      <form method = "POST" action = "regiAction.php"novalidate>
      	<fieldset>
      	<legend>Registration</legend>	
         <table>
            <tr>
               <td>Name:</td>
               <td><input type = "text" name = "name">
                  <span class = "error">* <?php echo $nameErr;?></span>
               </td>
            </tr>
            
            <tr>
               <td>E-mail: </td>
               <td><input type = "text" name = "email">
                  <span class = "error">* <?php echo $emailErr;?></span>
               </td>
            </tr>
            
            <tr>
               <td>password:</td>
               <td> <input type = "int" name = "password">
                  <span class = "error"><?php echo $password;?></span>
               </td>
            </tr>
            <tr>
               <td>confirmpassword:</td>
               <td> <input type = "int" name = "confirmpassword">
                  <span class = "error"><?php echo $confirmpassword;?></span>
               </td>
            </tr>
            
            
            <tr>
               <td>Gender:</td>
               <td>
                  <input type = "radio" name = "gender" value = "female">Female
                  <input type = "radio" name = "gender" value = "male">Male
                  <span class = "error">* <?php echo $genderErr;?></span>
               </td>
            </tr>
            
          <tr>
               <td>post:</td>
               <td>
               <select name="post" id="post" value="post">
                <option>admin</option>
                <option>voting_agent</option> 
                <option>poling_agent</option>
                <option>second_officer</option>
                <option>clerk</option>
            </select>
                <span class = "error"><?php echo $post;?></span>
           
               </td>
            </tr>
            
            <tr>
               <td>Agree</td>
               <td><input type = "checkbox" name = "checked" value = "1"></td>
               <?php if(!isset($_POST['checked'])){ ?>
               <span class = "error">* <?php echo "You must agree to terms";?></span>
               <?php } ?> 
            </tr>
            
            <tr>
               <td>
                  <p class="center"><input value="Registration" type="submit" class="center" /></p>
               </td>
            </tr>
            
         </table>
      </form>
  </fieldset>
      
      
   </body>
</html>


