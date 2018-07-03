<html> 
<head> 
    <title>Add Data</title></head>   
<body> 
<?php 
//including the database connection file 
include_once("connect.php");   
if(isset($_POST['Submit'])) {     
   // $name = mysqli_real_escape_string($connection, $_POST['name']); 
   // $age = mysqli_real_escape_string($connection, $_POST['age']); 
   // $email = mysqli_real_escape_string($connection, $_POST['email']);  

	$number = $_POST['number']; 
    $firstname = $_POST['firstname']; 
    $lastname =  $_POST['lastname']; 	       
    $phonenumber = $_POST['phonenumber']; 
    $password =  $_POST['password']; 	       
		   
		   
		   
		   
    // checking empty fields 
    if(empty($firstname) || empty($lastname) || empty($phonenumber) || empty($password) ) {                 
        if(empty($firstname)) { 
            echo "<font color='red'>firstname field is empty.</font><br/>"; 
        } 
         
        if(empty($lastname)) { 
            echo "<font color='red'>lastname field is empty.</font><br/>"; 
        } 
         
        if(empty($phonenumber)) { 
            echo "<font color='red'>phonenumber field is empty.</font><br/>"; 
        } 
        if(empty($password)) { 
            echo "<font color='red'>password field is empty.</font><br/>"; 
        } 
         
        //link to the previous page 
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>"; 
    } 
	else {  
        // if all the fields are filled (not empty)              
        //insert data to database 
  $CreateSql = "INSERT INTO reg(firstname,lastname,phonenumber,password) VALUES('$firstname','$lastname','$phonenumber','$password')";
   $res = mysqli_query($connection, $CreateSql); 
   echo "Query Executed<br/>";
   //display success/failure message 
   if($res){ 
    echo "<font color='green'>Data added successfully."; 
    }else{ 
    echo "Data not inserted, please try again later."; 
    } 
                       echo "<br/><a href='home.php'>View Result</a>"; 
					   
   
      } 
}
?>       