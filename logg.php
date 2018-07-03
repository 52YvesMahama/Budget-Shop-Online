<?if(isset($_POST['login']))
	{
		$user =strtolower(mysql_entities_fix_string($_POST['username']));
		$password = mysql_entities_fix_string($_POST['password']);
		
		
		$query = "SELECT  * FROM users WHERE username = '{$user}'";
		$result_set = mysql_query($query);
	//	if (!$result_set) die("Database access failed: " . mysql_error());
		if(mysql_num_rows($result_set)==1)
		{
			 
			$result = mysql_fetch_array($result_set);
			$salt1 = '!@#';
			$salt2 = '123';
			$token = md5("$salt1$password$salt2");
			if ($token == $result['password']) 
				{
					// $_SESSION['type'] = $result['type'];
					$_SESSION['userid'] = $user;
					$_SESSION['usernum']= $result['id'];
					
						
			header('Location: admin.php');
			
		}
			else
					{		
						header('Location: admin.php');
					}
	}	
	}
?>