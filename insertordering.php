<html> 
<head> 
    <title>Ordering_Prod</title></head> 
  
<body> 
<?php 
//including the database connection file 
include_once("connect.php"); 
  
if(isset($_POST['Submit'])) {     
        $Ordername = mysqli_real_escape_string($connection,$_POST['Ordername']); 
	$OrderPlace = mysqli_real_escape_string($connection,$_POST['OrderPlace']);
	$Quantity = mysqli_real_escape_string($connection,$_POST['Quantity']); 


         
    // checking empty fields 
    if(empty($Ordername) || empty($OrderPlace) || empty($Quantity) ){                 
        if(empty($Ordername)) { 
            echo "<font color='red'>ProdID field is empty.</font><br/>"; 
        } 
         
        if(empty($OrderPlace)) { 
            echo "<font color='red'>ordername field is empty.</font><br/>"; 
        } 
		if(empty($Quantity)) { 
            echo "<font color='red'>orderdate field is empty.</font><br/>"; 
        } 
 
            echo "<font color='red'>quantity field is empty.</font><br/>"; 
        } 
        //link to the previous page 
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>"; 
    } else {  
        // if all the fields are filled (not empty)              
        //insert data to database 
  $CreateSql = "INSERT INTO yves(Ordername,OrderPlace,Quantity) VALUES('$Ordername','$OrderPlace','$Quantity')"; 
        $res = mysqli_query($connection, $CreateSql); 
   
  //display success/failure message 
   if($res){ 
    echo "<font color='green'>you have been successfully ordered."; 
    }else{ 
    echo "you have failed ordered, please try again later."; 
    } 
                       echo "<br/><a href='index1.php'>View Result</a>"; 
					       } 

?>       
</body>
</html> 