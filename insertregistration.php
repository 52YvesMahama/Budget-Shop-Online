<html> 
<head> 
    <title>registration Data</title></head> 
  
<body> 
<?php 
//including the database connection file 
include_once("connect.php"); 
  
if(isset($_POST['Submit'])) {     
    $firstname = mysqli_real_escape_string($connection, $_POST['firstname']); 
    $lastname = mysqli_real_escape_string($connection,$_POST['lastname']); 
    $phonenumber = mysqli_real_escape_string($connection,$_POST['phonenumber']);
	$password = mysqli_real_escape_string($connection,$_POST['password']);
         
    // checking empty fields 
    if(empty($firstname) || empty($lastname) || empty($phonenumber) || empty ($password ) ){                 
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
            echo "<font color='red'>passwords field is empty.</font><br/>"; 
        }	       
       
        //link to the previous page 
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>"; 
    } else {  
        // if all the fields are filled (not empty)              
        //insert data to database 
  $CreateSql = "INSERT INTO yves(firstname,lastname,phonenumber,password) VALUES('$firstname','$lastname','$phonenumber','$password')"; 
        $res = mysqli_query($connection, $CreateSql); 
   
  //display success/failure message 
   if($res){ 
    echo "<font color='green'> you have been successfully registered."; 
    }else{ 
    echo "Data not inserted, please try again later."; 
    } 
                       echo "<br/><a href='index1.php'>View Result</a>"; 
					       } 
} 
?>       
</body>
</html> 