<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
<?php
$uname = "";
$err_uname = "";
$pass = "";
$err_pass = "";
$hasError = false;
$err_message = "";
$admin = array("admin" => "1234");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["uname"])) {
        $err_uname = "Username Required";
        $hasError = true;
    } else {
        $uname = htmlspecialchars($_POST["uname"]);
    }
    if (empty($_POST["pass"])) {
        $err_pass = "Password Required";
        $hassError = true;
    } else {
        $pass = htmlspecialchars($_POST["pass"]);
    }
    if (!$hasError) {
        $found = false;
        foreach ($admin as $u => $p) {
            if ($u == $uname && $p == $pass) {

                header("Location: dashboard.php");
            }
        }
        $err_message = "Invalid username or password";
    }
}
?>

</head>

<body>


<fieldset>
			<legend align="center"><h1>Login</h1></legend>
    <form action="" method="post">
        <table align="center">
            <tr>
                <td><span>Username:</span> </td>
                <td><input type="text" value="" placeholder="Username" name="uname"><br><span style="color: red;"><?php echo $err_uname; ?></span> </td>
            </tr>
            
            <tr>
                <td><span>Password:</span></td>
                <td><input type="password" placeholder="Password" name="pass"><br><span style="color: red;"><?php echo $err_pass; ?></span></td>

            </tr>
           
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Login" name="login">
            </tr>
			<tr>
                    <td></td>
                    <td colspan="2" align="center"><span style="color: red;"><?php echo $err_message; ?></span></td>
                </tr>

        </table>


    </form>
</fieldset>
</body>

</html>