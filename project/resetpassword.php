 <!DOCTYPE html>
<html lang="en">
<head>
<?php
	include("conn.php");
	header('location:../UMS/user/editpage.php');
	?>

	
          				
			<?php
			$id=$_SESSION['user_name'];
			$result = mysql_query("SELECT * FROM newmeduser WHERE user_name=$id");

			$row = mysql_fetch_array($result);
			  $user_name =$row['user_name'];
		?>

		</div>
			<div class="container">
				<form  method = "POST" id= "setting">
				<div class="form-group">
					<label>User_Name</label>
					<input type="text" disabled class="form-control" name = "user_name" id="user_name" value="<?php echo $user_name; ?>"/>
					</div>
				<button onclick="enable()" class="btn btn-info">Change</button>
				<br/><br/>
				<span id="myForm"></span>
				<button class="btn btn-info" onclick="reset()">reset password</button>
				<script>
function reset(){
	var r = document.createElement('span');
	var x = document.createElement("INPUT");
	x.setAttribute("type", "password");
	x.setAttribute("placeholder", "Enter Current Password");
	x.setAttribute("name", "cpass");
	var y = document.createElement("INPUT");
	y.setAttribute("type", "password");
	y.setAttribute("placeholder", "Enter Password");
	y.setAttribute("name", "pass");
	var z = document.createElement("INPUT");
	z.setAttribute("type", "password");
	z.setAttribute("placeholder", "Re-Enter Password");
	z.setAttribute("name", "rpass");
	r.appendChild(x);
	r.appendChild(y);
	r.appendChild(z);
	document.getElementById("myForm").appendChild(r);
}
</script>		
<script>
function enable() {
	document.getElementById("emailad").removeAttribute('disabled'); 
	}	
	</script>
				
                 </form>
				 </div>
				
		
									
					
							
</body>
</html>
