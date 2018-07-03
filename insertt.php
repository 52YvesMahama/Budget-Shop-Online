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

	$id = $_POST['id']; 
    $user = $_POST['user']; 
    $pass =  $_POST['pass']; 	
	
	
	//$Role = $_POST['Role']; 
    //$Phone_number = $_POST['Phone_number']; 
    //$Adrress =  $_POST['Adrress'];
	
		   
		   
		   
		   
    // checking empty fields 
    if(empty($id) || empty($user) || empty($pass)) {                 
        if(empty($id)) { 
            echo "<font color='red'>id field is empty.</font><br/>"; 
        } 
         
        if(empty($user)) { 
            echo "<font color='red'>user field is empty.</font><br/>"; 
        } 
         
        if(empty($pass)) { 
            echo "<font color='red'>pass field is empty.</font><br/>"; 
        } 
 
         
        //link to the previous page 
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>"; 
    } 
	else {  
        // if all the fields are filled (not empty)              
        //insert data to database 
  $CreateSql = "INSERT INTO staff(id,user,pass) VALUES('$id','$user','$pass')";
   $res = mysqli_query($connection, $CreateSql); 
   echo "Query Executed<br/>";
   //display success/failure message 
   if($res){ 
    echo "<font color='green'>Data added successfully."; 
    }else{ 
    echo "Data not inserted, please try again later."; 
    } 
                       echo "<br/><a href='viewstaff.php'>View Result</a>"; 
					   
   
      } 
}
?>       