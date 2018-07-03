<?php
include_once("connect.php");
$error=''; //variable to Store error message;
if(isset($_POST['submit'])){
	
	/*if(($_POST['firstname']=='')|| ($_POST['lastname']=='')||($_POST['phonenumber']=='')||($_POST['password']==''))
	{
		$error="User or Pass is Invalid";
		echo $error;
	}	
	else
	{  */
		//Define $user and $pass
		$fname=$_POST['firstname'];
		$lname=$_POST['lastname'];
		$phone=$_POST['phonenumber'];
		$pass=$_POST['password'];
		
		echo $pass;
		//Establishing Connection with server by passing server_name, user_id and pass as a patameter
		
		//Selecting Database
		
		
		//sql query to fetch information of registerd user and finds user match.
		//$query = mysqli_query($conn, "SELECT * FROM userpass WHERE pass='$pass' AND user='$user'");
		
		//$query = "SELECT * FROM registration WHERE firstname='$user' AND lastname='$lastname' AND phonenumber='$phonenumber' AND password='$password'";
		
		$query = "INSERT INTO registrationold(firstname, lastname, phonenumber, password)VALUES('$fname', '$lname','$phone','$pass')";
		
		//$result_set = mysqli_query($connection,$query);
		$result_set =  mysqli_query($connection,$query);
		
		//$test=mysqli_fetch_array($result_set);
		//echo $test[1];
		//if(mysql_num_rows($result_set)==1)
			 $rowcount=mysqli_num_rows($result_set);
			
		//$rows = mysqli_num_rows($result_set);
		//if($rowcount==1){
			//echo "success";
			//header("Location:ProductDetails.html"); // Redirecting to other page
		//}
		//else
		//{
		echo "successd";
		//	$error = "Username or password is Invalid";
		//}
		
		
	}
	/*}*/
	?>	   