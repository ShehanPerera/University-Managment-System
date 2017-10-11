
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
				$result = mysql_query("SELECT * FROM course where id='$id'");
				while($row = mysql_fetch_array($result))
					{
						$coursecode=$row['coursecode'];
						$description=$row['description'];
					}
				?>
<form name="myForm" action="editcourseexec.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">
<input name="id" type="hidden" class="ed" id="brnu" value="<?php echo $id?>" />
Course code <br />
<input name="ccode" type="text" class="ed" id="brnu" value="<?php echo $coursecode?>" />
<br>
Description <br />
<input name="description" type="text" class="ed" id="brnu" value="<?php echo $description?>" />
<br>
<input type="submit" name="Submit" value="save" id="button1" />
</form>
