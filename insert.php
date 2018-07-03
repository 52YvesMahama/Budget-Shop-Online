<html> 
<head> 
    <title>Add Data</title></head> 
  
<body> 
<?php 
//including the database connection file 
include_once("connect.php"); 

  
if(!isset($_POST['Submit'])) {  
	   
    //$Prod_ID = mysqli_real_escape_string($_POST['Prod_ID']); 
    // $Prod_Name = mysqli_real_escape_string($_POST['Prod_Name']); 
    //$Prod_Price = mysqli_real_escape_string($_POST['Prod_Price']);
	//$Cat_ID = mysqli_real_escape_string($_POST['Cat_ID']);
	//$Quantity = mysqli_real_escape_string($_POST['Quantity']); 

	$Prod_ID = $_POST['Prod_ID']; 
    $Prod_Name = $_POST['Prod_Name']; 
    $Prod_Price = $_POST['Prod_Price'];
	$Cat_ID = $_POST['Cat_ID'];
	$Quantity = $_POST['Quantity']; 
	
    // checking empty fields 
    if(empty($Prod_ID) || empty($Prod_Name) || empty($Prod_Price) || empty ($Cat_ID ) || empty ($Quantity) ){                 
        if(empty($Prod_ID)) { 
            echo "<font color='red'>Prod_ID field is empty.</font><br/>"; 
        } 
         
        if(empty($Prod_Name)) { 
            echo "<font color='red'>Prod_Name field is empty.</font><br/>"; 
        } 
		if(empty($Prod_Price)) { 
            echo "<font color='red'>Prod_price field is empty.</font><br/>"; 
        } 
		if(empty($Cat_ID)) { 
            echo "<font color='red'>Cat_ID field is empty.</font><br/>"; 
        } 		
	       
        if(empty($Quantity)) { 
            echo "<font color='red'>Quantity field is empty.</font><br/>"; 
        } 
        //link to the previous page 
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>"; 
    } else {  
        // if all the fields are filled (not empty)              
        //insert data to database 
		//echo $Prod_ID;
		echo "Testing";
		$result = mysqli_query($connection,"INSERT INTO yves(Prod_ID,Prod_Name,Prod_Price,Cat_ID,Quantity) VALUES('$Prod_ID','$Prod_Name','$Prod_Price','$Cat_ID','$Quantity')");
		if (!$result) {
			die('Invalid query: ' . mysqli_error());
		}
  //$CreateSql = "INSERT INTO yves(Prod_ID,Prod_Name,Prod_Price,Cat_ID,Quantity) VALUES('$Prod_ID ','$Prod_Name','$Prod_Price','$Cat_ID','$Quantity')"; 
       
		
		//$res = mysqli_query($connection, $CreateSql); 
   
  //display success/failure message 
  // if($res){ 
    //echo "<font color='green'>Data added successfully."; 
    //}else{ 
   // echo "Data not inserted, please try again later."; 
    //} 
                       echo "<br/><a href='index1.php'>View Result</a>"; 
					       } 
} 
?>       
</body>
</html> 