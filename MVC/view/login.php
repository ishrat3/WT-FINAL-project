<!DOCTYPE html>
<html>
<head>
    <title>Agent Login</title>
</head>
<body>
    <form method="post" action="../controller/loginAction.php" novalidate>
    <h2>Agent Login</h2>
        
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" value="<?php 
                    if(isset($_COOKIE["username"]))
                    {
                        echo $_COOKIE["username"];
                    }

                ?>"></td>
            </tr>

            <tr>
                <td>Password:</td>
                <td><input type="password" name="pass" value="<?php 
                    if(isset($_COOKIE["pass"]))
                    {
                        echo $_COOKIE["pass"];
                    }

                ?>"></td>
                <td><input type="checkbox" name="remember">Remember Me</td>
            </tr>
        </table>
        <br>
        <td><input type="submit" name="Submit" value="Login">
                    <a href="../MVC/view/homepage.php"><input type="button" value="Back To Home"></a>
                </td>
    </form>
    Don't have an account? <a href="./homepage.php">Sign Up</a>
</body>
</html>