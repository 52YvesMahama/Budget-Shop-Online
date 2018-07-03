<?php
include_once("connect.php");
$error=''; //variable to Store error message;
if(isset($_POST['submit'])){
	
		//Define $user and $pass
		$fname=$_POST['firstname'];
		$lname=$_POST['lastname'];
		$phone=$_POST['phonenumber'];
		$pass =$_POST['password'];
		//$pass=$_POST['password'];
		echo $fname;
		echo $lname;
		echo $phone;
		echo $pass;
		
		$query = "INSERT INTO registrationold(firstname, lastname, phonenumber, password)VALUES('$fname', '$lname','$phone','$pass')";
		
		$result_set =  mysqli_query($connection,$query);
		if ($result_set)
		{
		echo "success";
		}
		else
		{
		echo "Failed";
		}			
	}
	?>	   