
	<?php
	error_reporting(0);
	include('connection.php');
		if(isset($_POST['submit']))
		{
			$username=$_POST["userName"];
			$password=$_POST["password"];
			
			$mdpass=md5($password);
			$result=mysql_query("SELECT * FROM user where username = '$username' and password = '$mdpass'" ) or die(mysql_error());
			
			$count=mysql_num_rows($result);
			$row=mysql_fetch_assoc($result);
				
				 $id=$row['user_id'];
				 
				
				$resultid=mysql_query("SELECT position FROM user where user_id = '$id'" ) or die(mysql_error());
				
				$r1=$row['position'];
			
				if($count>0)
				{
					echo "<script>window.location.href='editpage.php?user_id='+".$id."</script>";
				}
				
				
			
			 else if($count==0)
			{
				
				 $re1=mysql_query("SELECT * FROM user where username = '$username' " ) or die(mysql_error());
				$re2=mysql_query("SELECT * FROM user where  password = '$mdpass' and username = '$username' " ) or die(mysql_error());
				$re3=mysql_query("SELECT * FROM user where accept='true' and password = '$mdpass' and username = '$username'" ) or die(mysql_error());
				$co1=mysql_num_rows($re1);
				$co2=mysql_num_rows($re2);
				$co3=mysql_num_rows($re3);
				
				 
				$er=$co3['position'];
				//echo $re;
				  $re11=mysql_query("SELECT * FROM type where position='$er'" ) or die(mysql_error());
				  $co11=mysql_num_rows($re11);
				 if($co1==0)
				{
				$a="a";
				}
				
				else if($co2==0)
				{
				$a="b";
				}
				else  if(($co3==0)) 
				{
				$a="c";
				} 
		
			}  
			
				
			
		}
		
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>University Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
   <meta name="template" content="Muhammad Usman">
	 <meta name="authors" content="shehan Perera/Anjula/Gayan/Kirikaran">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="logo.png">

</head>

<body>
<div class="ch-container">
    <div class="row">
        
    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>Welcome to UMS</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box">
            <div class="alert alert-info">
                Please login with your Username and Password.
            </div>
           <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" class="form-control" name="userName" placeholder="Username">
                   <span class="input-group-addon"><i><button type="reset"  id="remove1" class="glyphicon glyphicon-remove" name ="remove1" onclick="ClearFields();" style="width=10px;height=10px"></button></i></span>
                    </div>
						<?php 
				if(($co1==0)&&($a=="a"))
				{
				?>
					<script type="text/javascript">
 
					function timedMsg1()
					{
					var t=setTimeout("document.getElementById('myMsg1').style.display='none';",2000);
					}
					 
					</script>
					 

					<h4 id="myMsg1" color=red><font color="red" style="bold">Username Incorrect !!!</font></h4>
					  
					<script language="JavaScript" type="text/javascript">timedMsg1()</script>
				<?php
											
				}
									
				?>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="password"  id="password"  name="password" class="form-control" placeholder="Password">
					<span class="input-group-addon"><i><button type="button"  id="show_password1" class="glyphicon glyphicon-eye-open" name ="show_password" style="width=10px;height=10px"></button></i></span>
					</div>
						<?php 
				if(($co2==0)&&($a=="b"))
				{
				?>
					<script type="text/javascript">
 
					function timedMsg2()
					{
					var t=setTimeout("document.getElementById('myMsg2').style.display='none';",2000);
					}
					 
					</script>
					 

					<h4 id="myMsg2" color=red><font color="red" style="bold">Password Incorrect !!!</font></h4>
					  
					<script language="JavaScript" type="text/javascript">timedMsg2()</script>
				<?php
											
				}
									
				?>	

						<script>
										$(document).ready(function ()
										{
											$('#show_password1').mouseup(function(){
											var passwordFiled=$('#password');
											passwordFiled.attr('type','password');
											});	
											$('#show_password1').mousedown(function(){
											var passwordFiled=$('#password');
											passwordFiled.attr('type','text');
											});		
												
											
										});


										</script>
					
										
                   
                    <div class="clearfix"></div>
             
                    <div class="clearfix"></div>
				
                    <p class="center col-md-5">
                        <button type="submit" value="Login" name="submit" class="btn btn-primary">Login</button>
                    </p>
					
					<p class="center col-md-5">
                        <a href="index.php"><font color=black>HOME</font></a>
                    </p>
					<p class="center col-md-5">
                        <a href="CreateNew.php"><font color=black>Create New User</font></a>
                    </p>
                </fieldset>
            </form>
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>


</body>
</html>

<style>
body{
	background-color:black;
	

}
.row{
	color:blue;
}
</style>

