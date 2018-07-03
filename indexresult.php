<?php 
//including the database connection file 
include_once("connect.php"); 
	
 
//fetching data in descending order (lastest entry first) 
$ReadSql = "SELECT * FROM YVES ORDER BY ProdID DESC"; 
$result = mysqli_query($connection, $ReadSql);  
?> 
  
<html> 
<head>     
    <title>Ordered</title> 
</head> 
  
<body> 
    <a href="orderingdetails.html">Add New order</a><br/><br/> 
  
    <table width='80%' border=0> 
        <tr bgcolor='#CCCCCC'> 
			<td>ProdID</td> 
			<td>ordername</td> 
            <td>orderdate</td> 
            <td>orderplace</td> 
            <td>price</td> 
            <td>quantity</td> 
        </tr> 
        <?php  
        while($res = mysqli_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array        while($res = mysqli_fetch_array($result)) {          
            echo "<tr>"; 
            echo "<td>".$res['ProdID']."</td>"; 
            echo "<td>".$res['ordername']."</td>"; 
            echo "<td>".$res['orderdate']."</td>";     
            echo "<td>".$res['orderplace']."</td>";     
            echo "<td>".$res['price']."</td>";     
            echo "<td>".$res['quantity']."</td>";     
// echo "<td><a href=\"edit.php?Prod_ID=$res[Prod_ID]\">Edit</a> | <a href=\"delete.php?Prod_ID=$res[Prod_ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";         
echo "<td><a href=\"edit.php?Prod_ID=$res[ProdID]\">Edit</a> | <a href=\"delete.php?ProdID=$res[ProdID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";   
  } 
        ?> 
    </table> 
</body> 
</html>