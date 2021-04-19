<!DOCTYPE html>
<html>
<head>
    <title>Add Students</title>
<?php
$name="";
$err_name="";
$id="";
$err_id="";
$dob="";
$err_dob="";
$cgpa="";
$err_cgpa="";
$credit="";
$err_credit="";
$did="";
$err_did="";
$err="";
$haserror=false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$server="localhost";
	$user="root";
	$password="";
	$db="lab_2";
	$conn=mysqli_connect($server,$user,$password,$db);
    if (empty($_POST["name"])) {
        $err_name = "*Name is Required";
		$haserror=true;
    } else {
        $name = htmlspecialchars($_POST["name"]);
    }
	if (empty($_POST["id"])) {
        $err_id = "*ID is Required";
		$haserror=true;
    }
	else if(!is_numeric($_POST["id"]))
         {
            $err_id="Invalid id";
		$haserror=true;
         }
	else {
        $id = htmlspecialchars($_POST["id"]);
    }
	 if (empty($_POST["dob"])) {
        $err_dob = "*DOB is Required";
		$haserror=true;
       
    } else {
        $dob = htmlspecialchars($_POST["dob"]);
    }
	if (empty($_POST["cgpa"])) {
        $err_cgpa = "*CGPA is Required";
		$haserror=true;
       
    } else {
        $cgpa = htmlspecialchars($_POST["cgpa"]);
    }
	if (empty($_POST["credit"])) {
        $err_credit = "*Credit is Required";
        $haserror=true;
    }
	else if(!is_numeric($_POST["credit"]))
         {
            $err_id="Invalid credit";
		$haserror=true;
         }
	else {
        $credit = htmlspecialchars($_POST["credit"]);
    }
	if (empty($_POST["did"])) {
        $err_did = "*Dept. ID is Required";
		$haserror=true;
       
    }
	else if(!is_numeric($_POST["did"]))
         {
            $err_id="Invalid Dept.id Number";
		$haserror=true;
         } else {
        $did = htmlspecialchars($_POST["did"]);
    }
	if($haserror==false)
	{
		$query = "insert into student values ('$name','$id','$dob','$cgpa','$credit','$did')";
		if(mysqli_query($conn,$query))
		{
			echo" Value Inserted";
		}
		else
		{
			echo "Value Not Inserted";
		}
	}
	else
	{
		$err="Please FillUp All";
	}
}
?>

</head>

<body>
	<fieldset align="center">
			<legend><h1>Add Student Information</h1></legend>
<form action="" method="post">
<table align="center">
<tr>
<td><Span>Name</Span></td>
<td>: <input type="text" placeholder="Name" name="name"><br> <span style="color: red;"><?php echo $err_name;?> </span></td>
</tr>
<tr>
<td><span>ID</span> </td>
<td>:<input type="text" placeholder="ID" name="id"><br><span style="color: red;"><?php echo $err_id; ?></span> </td>
</tr>
<tr>
<td><span>DOB</span></td>
<td>: <input type="text" placeholder="Date of Birth" name="dob"><br><span style="color: red;"><?php echo $err_dob;?></span></td>
</tr>
<td><span>Credit</span> </td>
<td>:<input type="text" placeholder="Credit" name="credit"><br><span style="color: red;"><?php echo $err_credit; ?></span> </td>
</tr>
<td><span>CGPA</span> </td>
<td>:<input type="floatval" placeholder="CGPA" name="cgpa"><br><span style="color: red;"><?php echo $err_cgpa; ?></span> </td>
</tr>
<td><span>Dept. ID</span> </td>
<td>:<input type="text" placeholder="Dept. ID" name="did"><br><span style="color: red;"><?php echo $err_did; ?></span> </td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="Add"><br><span style="color: red;"><?php echo $err; ?></span> </td>
</tr>

</table>
</form>
</fieldset>
</body>
</html>
