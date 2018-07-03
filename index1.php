<?php 
//including the database connection file 
include_once("connect.php"); 
	
 
//fetching data in descending order (lastest entry first) 
$ReadSql = "SELECT * FROM YVES ORDER BY prod_ID DESC"; 
$result = mysqli_query($connection, $ReadSql);  
?> 
  
<html> 
<head>     
    <title>ProductDetails</title> 
</head> 
  
<body style="background-color:#d9d9d9;">
     <h2><a href="ProductDetails.html">Add New Data</a><br/><br/>  </h2>
  
    <table width='80%' border=0> 
        <tr bgcolor='#CCCCCC'> 
			<td>prod_ID</td> 
			<td>Prod_Name</td> 
            <td>Prod_Price</td> 
            <td>Cat_ID</td> 
            <td>Quantity</td> 
        </tr> 
        <?php  
        while($res = mysqli_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array        while($res = mysqli_fetch_array($result)) {          
            echo "<tr>"; 
            echo "<td>".$res['Prod_ID']."</td>"; 
            echo "<td>".$res['Prod_Name']."</td>"; 
            echo "<td>".$res['Prod_Price']."</td>";     
            echo "<td>".$res['Cat_ID']."</td>";     
            echo "<td>".$res['Quantity']."</td>";     
// echo "<td><a href=\"edit.php?Prod_ID=$res[Prod_ID]\">Edit</a> | <a href=\"delete.php?Prod_ID=$res[Prod_ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";         
echo "<td><a href=\"edit.php?Prod_ID=$res[Prod_ID]\">Edit</a> | <a href=\"delete.php?Prod_ID=$res[Prod_ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";   
  } 
        ?> 
    </table> 
	<p>
	     
	     <!--<h3>Click here to <a href="pdfcreater.php">Print a PDF File </a></h3>
		 -->
	     <h3>Click here to <a href="Results.php">Print a PDF File </a></h3>

</body> 
</html>