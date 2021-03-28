<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
	<?php
$user = array("sajjad"=>"1234");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST["uname"];
	$pass = $_POST["pass"];
	 foreach ($user as $u => $p) {
            if ($u == $uname && $p == $pass) {
				setcookie("uname",$uname,time()+150);
                header("Location: welcomepage.php");
            }
        }
}
?>
</head>

<body>


<fieldset>
			<legend><h1>Login</h1></legend>
    <form action="" method="post">
        <table>
            <tr>
                <td><span>Username:</span> </td>
                <td><input type="text" value="" placeholder="Username" name="uname"> </td>
            </tr>
            
            <tr>
                <td><span>Password:</span></td>
                <td><input type="password" placeholder="Password" name="pass"></td>

            </tr>
           
            <tr>
                <td colspan="2" align="right"><input type="submit" value="Login" name="login">
            </tr>

        </table>


    </form>
</fieldset>
</body>

</html>