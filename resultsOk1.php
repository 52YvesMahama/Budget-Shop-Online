<?php

// make connection
mysqli_connect('localhost','root', '');

// select db
mysqli_select_db('yves');

$sql="SELECT * FROM yves";

$records=mysqli_query($sql);

?>


<!DOCTYPE html>

<html>
<head>

<title>Yv</title>
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
<?php

while ($yves=mysqli_fetch_assoc(records)){

	echo "<tr>";
	
	echo "<td>".$prod_ID['prod_ID']."</td>";
	echo "<td>".$prod_Name['prod_Name']."</td>";
	echo "<td>".$prod_Price['prod_Price']."</td>";
	echo "<td>".$Cat_ID['Cat_ID']."</td>";
	echo "<td>".$Quantity['Quantity']."</td>";
	
	echo "</tr>";
}	// end while
?>
	<link rel="stylesheet" type="text/css" href="stylelogout.css">

</table>
</body>
</html>