<?php //include('processpayment.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
	<link rel="stylesheet" type="text/css" href="stylee.css">
</head>
<body>

	<div class="header">
		<h2>Payment Details</h2>
	</div>
	
	<form method="post" action="processpayment.php">

		<?php //include('errorss.php'); ?> 

		<div class="input-group">
			<label>Sender</label>
			<input type="text" name="Sender" >
		</div>
		<div class="input-group">
			<label>MpesaReceipt</label>
			<input type="text" name="MpesaReceipt">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="Payment">submit</button>
		</div>
		
		<!--
		<p>
			Not yet a member? <a href="#">Sign up</a>
		</p>
		-->
	</form>


</body>
</html>