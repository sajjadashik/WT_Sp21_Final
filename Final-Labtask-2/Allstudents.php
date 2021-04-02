<!DOCTYPE html>
<html>
<head>
    <title>All Students</title>
<?php
require_once "Database.php";
$query = "select * from student";
$result = get($query);
?>
</head>

<body>
	<fieldset align="center">
			<legend><h1>Student Information</h1></legend>
			<table align="center" border="4">
				<tr>
					<th>Name</th>
					<th>ID</th>
					<th>DOB</th>
					<th>Credit</th>
					<th>CGPA</th>
					<th>Dept_id</th>
					<th colspan="2"></th>
					
				</tr>
			<?php
				foreach ($result as $row) {
					echo "<tr>";
					echo "<td>" . $row["Name"] . "</td>";
					echo "<td>" . $row["Id"] . "</td>";
					echo "<td>" . $row["DOB"] . "</td>";
					echo "<td>" . $row["Credit"] . "</td>";
					echo "<td>" . $row["CGPA"] . "</td>";
					echo "<td>" . $row["Dept_ID"] . "</td>";
					echo "<td>"."<b>"."Edit"."</b>"."</td>";
					echo "<td>"."<b>"."Delete"."</b>"."</td>";
				}
			?>
			</table>
	</fieldset>
</body>
</html>