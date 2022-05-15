<?php
$t="";
include 'conn.php';
$query="select * from events";
$result=mysqli_query($conn,$query);
$t="<table border=1>
	<tr>
		<td>S.N</td>
		<td>Name</td>
		<td>Address</td>
		<td>Phone</td>
		<td>Email</td>
		<td>Gender</td>
		<td>Event</td>
		<td>cost</td>
		</tr>";
	while($row=mysqli_fetch_assoc($result))
	{
		$t=$t."<tr>
			<td>$row[Sn]</td>
			<td>$row[Name]</td>
			<td>$row[Address]</td>
			<td>$row[Phone]</td>
			<td>$row[Email]</td>
			<td>$row[Gender]</td>
			<td>$row[Event]</td>
			<td>$row[Cost]</td>
			</tr>";
	}
	$t.="</table>";
?>
<html>
<head>
<title>Events record</title>
</head>
<body>
	<?php include 'menu.php' ?>
<form action="show_all.php" method="get">
<h1>Record of Events</h1>
<?php echo $t; ?>
</form>
</body>
</html>