<?php
include_once("connect.php");
$error=''; //variable to Store error message;
if(isset($_POST['submit'])){
	
	if($_POST['username']==''|| $_POST['passwordd']==''){
		$error="User or Pass is Invalid";
		echo $error;
	}
	else
	{  
		//Define $user and $pass
		$user=$_POST['username'];
		$pass=$_POST['passwordd'];
		
		echo $pass;
		//Establishing Connection with server by passing server_name, user_id and pass as a patameter
		
		//Selecting Database
		
		
		//sql query to fetch information of registerd user and finds user match.
		//$query = mysqli_query($conn, "SELECT * FROM userpass WHERE pass='$pass' AND user='$user'");
		$query = "SELECT * FROM staff WHERE user='$user' AND pass='$pass'";
		
		//$result_set = mysqli_query($connection,$query);
		$result_set =  mysqli_query($connection,$query);
		$test=mysqli_fetch_array($result_set);
		echo $test[1];
		//if(mysql_num_rows($result_set)==1)
			 $rowcount=mysqli_num_rows($result_set);
			
		//$rows = mysqli_num_rows($result_set);
		if($rowcount==1){
			//echo "success";
			header("Location:welcome.html"); // Redirecting to other page
		//	header('Location: admin.php');
		}
		else
		{
		echo "successd";
			$error = "Username or password is Invalid";
		}
		
		
	}
	}
	?>	   