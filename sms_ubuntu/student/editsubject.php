
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
				$result = mysql_query("SELECT * FROM subject where id='$id'");
				while($row = mysql_fetch_array($result))
					{
						$code=$row['code'];
						$title=$row['title'];
						$level=$row['level'];
						$credit=$row['credit'];
						$lecHrs=$row['lecHrs'];
						$prHrs=$row['prHrs'];
						$lecturer=$row['lecturer'];
						$semi=$row['semi'];
					}
				?>
<form name="myForm" action="editsubexec.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">
<input name="id" type="hidden" class="ed" id="brnu" value="<?php echo $id?>" />
code <br />
<input name="code" type="text" class="ed" id="brnu" value="<?php echo $code?>" />
<br>
title <br />
<input name="title" type="text" class="ed" id="brnu" value="<?php echo $title?>" />
<br>
level <br />
<input name="level" type="text" class="ed" id="brnu" value="<?php echo $level?>" />
<br>
credit <br />
<input name="credit" type="text" class="ed" id="brnu" value="<?php echo $credit?>" />
<br>
lecHrs <br />
<input name="lecHrs" type="text" class="ed" id="brnu" value="<?php echo $lecHrs?>" />
<br>
prHrs <br />
<input name="prHrs" type="text" class="ed" id="brnu" value="<?php echo $prHrs?>" />
<br>
lecturer <br />
<input name="lecturer" type="text" class="ed" id="brnu" value="<?php echo $lecturer?>" />
<br>
semi <br />
<input name="semi" type="text" class="ed" id="brnu" value="<?php echo $semi?>" />
<br>
<input type="submit" name="Submit" value="save" id="button1" />
</form>
