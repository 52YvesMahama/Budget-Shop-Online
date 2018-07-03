<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'budgetshoponline');

	// REGISTER USER
	if (isset($_POST['Payment'])) {
		// receive all input values from the form
		$MpesaReceipt = mysqli_real_escape_string($db, $_POST['MpesaReceipt']);
	//	$amount = mysqli_real_escape_string($db, $_POST['amount']);
	//	$TimeStamp = NOW();
		$Sender = mysqli_real_escape_string($db, $_POST['Sender']);
	//	$MobileNumber = mysqli_real_escape_string($db, $_POST['MobileNumber']);
	//	$Status = mysqli_real_escape_string($db, $_POST['Status']);

		// form validation: ensure that the form is correctly filled
		if (empty($MpesaReceipt)) { array_push($errors, "MpesaReceipt is required"); }
	//	if (empty($amount)) { array_push($errors, "amount is required"); }
	//	if (empty($TimeStamp)) { array_push($errors, "TimeStamp is required"); }
		if (empty($Sender)) { array_push($errors, "Sender is required"); }
	//	if (empty($MobileNumber)) { array_push($errors, "MobileNumber is required"); }

		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
		//	$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO mpesatable (MpesaReceipt, Sender) 
					  VALUES('$MpesaReceipt', '$Sender')";
			mysqli_query($db, $query);

			$_SESSION['MpesaReceipt'] = $MpesaReceipt;
			$_SESSION['success'] = "You are now logged in";
			header('location: success.html');
		}

		// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$MpesaReceipt = mysqli_real_escape_string($db, $_POST['MpesaReceipt']);
		$Sender = mysqli_real_escape_string($db, $_POST['Sender']);

		if (empty($MpesaReceipt)) {
			array_push($errors, "MpesaReceipt is required");
		}
		if (empty($Sender)) {
			array_push($errors, "Sender is required");
		}

		if (count($errors) == 0) {
		//	$password = md5($password);
			$query = "SELECT * FROM mpesatable WHERE MpesaReceipt='$MpesaReceipt' AND Sender='$Sender'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['MpesaReceipt'] = $MpesaReceipt;
				$_SESSION['success'] = "You are now logged in";
				header('location: success.html');
			}else {
				array_push($errors, "Wrong MpesaReceipt/Sender combination");
			}
		}
	}

?>