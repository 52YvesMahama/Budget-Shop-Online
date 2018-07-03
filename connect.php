<?php 
$databaseHost = 'localhost'; 
$databaseName = 'yves'; 
$Username = 'root'; 
$Password = ''; 
  
$connection = mysqli_connect($databaseHost, $Username, $Password);  
if (!$connection){ 
    die("Database Connection Failed" . mysqli_error($connection)); 
} 
else 
//echo "Database connection successful<br/>";
$select_db = mysqli_select_db($connection, $databaseName); 
if (!$select_db){ 
    die("Database Selection Failed" . mysqli_error($connection)); 
}