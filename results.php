<!DOCTYPE html>

<html>
<head>

<title>Results</title>
</head>
<body>

<table width="600" border="1" cellpadding="1" cellpadding="1">
<tr>

<th>Prod_ID</th>
<th>Prod_Name</th>
<th>Prod_Price</th>
<th>Cat_ID</th>
<th>Quantity</th>

</tr>
	<link rel="stylesheet" type="text/css" href="stylelogoutt.css">


</body>
</html>
<?php

// make connection
$con=mysqli_connect('localhost','root', '');

// select db
mysqli_select_db($con,'yves');

$sql="SELECT * FROM yves";

$records=mysqli_query($con,$sql);

while ($row=mysqli_fetch_assoc($records)){

	echo "<tr>";
	
	echo "<td>".$row['Prod_ID']."</td>";
	echo "<td>".$row['Prod_Name']."</td>";
	echo "<td>".$row['Prod_Price']."</td>";
	echo "<td>".$row['Cat_ID']."</td>";
	echo "<td>".$row['Quantity']."</td>";
	
	echo "</tr>";
}	// end while

?></table>


<h3>To Go Back Click <a href="index1.php">Here</a> </h3>

