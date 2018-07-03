<?php 
// including the database connection file 
include_once("connect.php"); 
  
if(isset($_POST['update'])) 
{     
    //$id = $_POST['id']; 
     
    $id=$_POST['id']; 
    $user=$_POST['user']; 
    $pass=$_POST['pass'];     
     //edit
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
    } else {     
        //updating the table 
        $result = mysqli_query($connection, "UPDATE userss SET id='$id',user='$user',pass='$pass' WHERE id=$id"); 
         
        //redirectig to the display page. In our case, it is index.php 
        header("Location: viewstaff.php"); 
    } 
} 
?> 
<?php 
//getting id from url 
$id = $_GET['id']; 
  
//selecting data associated with this particular id 
$result = mysqli_query($connection, "SELECT * FROM staff WHERE id=$id"); 
  
while($res = mysqli_fetch_array($result)) 
{ $id = $res['id']; 
    $user = $res['user']; 
    $pass = $res['pass']; 
} 
?> 
<html> 
<head>     
    <title>Edit Data</title> 
 <link rel="stylesheet" href="styles.css" > 
</head> 
  
<body> 
    <a href="viewstaff.php">viewstaff</a> 
    <br/><br/> 
     
    <form name="form1" method="post" action="editddd.php"> 
        <table border="0"> 
            <tr>  
                <td>id</td> 
                <td><input type="text" name="id" value="<?php echo 
$id;?>"></td> 
            </tr> 
            <tr>  
                <td>user</td> 
                <td><input type="text" name="user" value="<?php echo $user;?>"></td> 
            </tr> 
            <tr>  
                <td>pass</td> 
             <td><input type="text" name="pass" value="<?php echo $pass;?>"></td> 
            </tr> 
            <tr> 
                <td><input type="hidden" name="id" value=<?php echo 
$_GET['id'];?>></td> 
                <td><input type="submit" name="update" value="Update"></td> 
            </tr> 
        </table> 
    </form> 
</body> 
</html>