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
  
<body> 
    <a href="viewstaff.php">Add New Data</a><br/><br/> 
  
    <table width='80%' border=0> 
        <tr bgcolor='#CCCCCC'> 
			<td>id</td> 
            <td>user</td> 
            <td>pass</td> 
        </tr> 
        <?php  
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array  
        while($res = mysqli_fetch_array($result)) {          
            echo "<tr>"; 
            echo "<td>".$res['id']."</td>"; 
            echo "<td>".$res['user']."</td>"; 
            echo "<td>".$res['pass']."</td>";     
 echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";         
        } 
        ?> 
    </table> 
</body> 
</html>