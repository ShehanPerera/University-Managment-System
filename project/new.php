<?php
// including the database connection file
include_once("Config/config.php");
 
if(isset($_POST['submit']))
{    
    $id = $_POST['regno'];
    
				$name=$test['uname'];
	 			$email=$test['email'] ;
				$job= $test['job'] ;					
				$regno=$test['regno'] ;
				$user_type=$test['user_type'] ;
				$user_name=$test['user_name'];
    
    // checking empty fields
    if(empty($uname) || empty($email) || empty($job)) {            
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red'>email field is empty.</font><br/>";
        }
        
        if(empty($job)) {
            echo "<font color='red'>Occupation field is empty.</font><br/>";
        }        
    } else {    
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE newmeduser SET uname='$name',email='$email',job='$job' WHERE regno=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['regno'];
 
//selecting data associated with this particular regno
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE regno=$regno");
 
while($res = mysqli_fetch_array($result))
{
    $name = $res['name'];
    $email = $res['email'];
    $job = $res['job'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>
            <tr> 
                <td>email</td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['regno'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>