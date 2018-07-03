<?php 
//including the database connection file 
include("connect.php"); 
//getting id of the data from url 
$id = $_GET['Prod_ID']; 
  
 $DelSql= "DELETE FROM yves WHERE id=$id"; 
//deleting the row from table 
$result = mysqli_query($connection, $DelSql); 
  
//redirecting to the display page (index.php in our case) 
if($result){ 
header("Location:index1.php"); 
} 
else 
{ 
echo "Failed to delete"; 
} 
?>