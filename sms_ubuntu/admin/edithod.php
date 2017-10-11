
<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<?php
				include('../connect.php');
				$id=$_GET['id'];
				$result = mysql_query("SELECT * FROM hod where id='$id'");
				while($row = mysql_fetch_array($result))
					{
						$fname=$row['fname'];
						$lname=$row['lname'];
						$department=$row['department'];
						$email=$row['email'];
						$RegNo=$row['RegNo'];
						$password=$row['password'];
					}
				?>
<form name="myForm" action="edithodexec.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">
<input name="id" type="hidden" class="ed" id="brnu" value="<?php echo $id?>" />
fname <br />
<input name="fname" type="text" class="ed" id="brnu" value="<?php echo $fname?>" />
<br>
lname <br />
<input name="lname" type="text" class="ed" id="brnu" value="<?php echo $lname?>" />
<br>
department <br />
<input name="department" type="text" class="ed" id="brnu" value="<?php echo $department?>" />
<br>
email <br />
<input name="email" type="text" class="ed" id="brnu" value="<?php echo $email?>" />
<br>
RegNo <br />
<input name="RegNo" type="text" class="ed" id="brnu" value="<?php echo $RegNo?>" />
<br>
password <br />
<input name="password" type="text" class="ed" id="brnu" value="<?php echo $password?>" />
<br>
<input type="submit" name="Submit" value="save" id="button1" />
</form>
