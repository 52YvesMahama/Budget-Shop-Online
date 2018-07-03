<?php 
//including the database connection file 
include_once("connect.php"); 
	
 
//fetching data in descending order (lastest entry first) 
$ReadSql = "SELECT * FROM YVES ORDER BY prod_ID DESC"; 
$result = mysqli_query($connection, $ReadSql);  
?> 
  
<html> 
<head>     
    <title>Homepage</title> 
</head> 
  
<body> 
    <a href="registration.html">New Registar</a><br/><br/> 
  
    <table width='80%' border=0> 
        <tr bgcolor='#CCCCCC'> 
			<td>firstname</td> 
			<td>lastname</td> 
            <td>phonenumber</td> 
            <td>password</td> 
        </tr> 
        <?php  
        while($res = mysqli_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array        while($res = mysqli_fetch_array($result)) {          
            echo "<tr>"; 
            echo "<td>".$res['fastname']."</td>"; 
            echo "<td>".$res['lastname']."</td>"; 
            echo "<td>".$res['phonenumber']."</td>";     
            echo "<td>".$res['password']."</td>";     
// echo "<td><a href=\"edit.php?firstname=$res[firstname]\">Edit</a> | <a href=\"delete.php?firstname=$res[firstname]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";         
echo "<td><a href=\"edit.php?firstname=$res[firstname]\">Edit</a> | <a href=\"delete.php?firstname=$res[firstname]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";   
  } 
        ?> 
    </table> 
</body> 
</html>