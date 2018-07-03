<?php 
// including the database connection file 
include_once("connect.php"); 
  
if(isset($_POST['update'])) 
{     
    $Prod_ID = $_POST['Prod_ID']; 
    $Prod_Name=$_POST['Prod_Name']; 
    $Prod_Price=$_POST['Prod_Price']; 
    $Cat_ID=$_POST['Cat_ID'];     
    $Quantity=$_POST['Quantity']; 
     
    // checking empty fields 
	  //  if(empty($name) || empty($age) || empty($email)) {             

    if(empty($prod_ID) || empty($Prod_Name) || empty($Prod_Price) || empty($Cat_ID) || empty($Quantity)) {             
        if(empty($prod_ID)) { 
            echo "<font color='red'>prod_ID field is empty.</font><br/>"; 
        } 
         
        if(empty($Prod_Name)) { 
            echo "<font color='red'>Prod_Name field is empty.</font><br/>"; 
        } 
         
        if(empty($Prod_Price)) { 
            echo "<font color='red'>Prod_Price field is empty.</font><br/>"; 
        }         
        if(empty($Cat_ID)) { 
            echo "<font color='red'>Cat_ID field is empty.</font><br/>"; 
        } 
         
        if(empty($Quantity)) { 
            echo "<font color='red'>Quantity field is empty.</font><br/>"; 
        }         
    } else {     
        //updating the table 
        $result = mysqli_query($connection, "UPDATE yves SET prod_ID='$prod_ID',Prod_Name='$Prod_Name',Prod_Price='$Prod_Price',Cat_ID='$Cat_ID',Quantity='$Quantity' WHERE id=$id"); 
         
        //redirectig to the display page. In our case, it is index.php 
        header("Location: index1.php"); 
    } 
} 
?> 
<?php 
//getting id from url 

$id = $_GET['Prod_ID']; 
  
//selecting data associated with this particular id 
$result = mysqli_query($connection, "SELECT * FROM yves WHERE prod_ID=$id"); 
  
while($res = mysqli_fetch_array($result)) 
{ //$Prod_ID = $res['prod_ID']; 
    $Prod_Name = $res['Prod_Name']; 
    $Prod_Price = $res['Prod_Price']; 
    $Cat_ID = $res['Cat_ID']; 
    $Quantity = $res['Quantity']; 
} 
?> 
<html> 
<head>     
    <title>Edit Data</title> 
 <link rel="stylesheet" href="styles.css" > 
</head> 
  
<body> 
    <a href="index1.php">Viewing Products</a> 
    <br/><br/> 
     
    <form name="form1" method="post" action="edit.php"> 
        <table border="0"> 
            <tr>  
                <td>Prod_ID</td> 
                <td><input type="text" name="Prod_ID" value="<?php echo 
$id;?>"></td> 
            </tr> 
            <tr>  
                <td>Prod_Name</td> 
                <td><input type="text" name="Prod_Name" value="<?php echo $Prod_Name;?>"></td> 
            </tr> 
            <tr>  
                <td>Prod_Price</td> 
             <td><input type="text" name="Prod_Price" value="<?php echo $Prod_Price;?>"></td> 
                <td>Cat_ID</td> 
            <td><input type="text" name="Cat_ID" value="<?php echo $Cat_ID;?>"></td> 
				</tr> 
            <tr>  
                <td>Quantity</td> 
             <td><input type="text" name="Quantity" value="<?php echo $Quantity;?>"></td> 
            </tr> 
            <tr> 
                <td><input type="hidden" name="id" value=<?php echo 
$_GET['Prod_ID'];?>></td> 
                <td><input type="submit" name="update" value="Update"></td> 
            </tr> 
        </table> 
    </form> 
</body> 
</html>