
<?php
 error_reporting(0);
 include('../Hostel/HMS/lib/session.php');
	include('connection.php');

	$_SESSION['usertype']="";
		if(isset($_POST['submit']))
		{
			$username=$_POST["userName"];
			$password=$_POST["password"];
		
			$mdpass=md5($password);
			$result=mysql_query("SELECT * FROM user where username = '$username' and password = '$mdpass' and accept='true'" ) or die(mysql_error());
			
			$count=mysql_num_rows($result);
			$row=mysql_fetch_assoc($result);
				// echo $row['user_type'];
				// echo $row['username'];
				 
				 $id=$row['user_id'];
				  $accept=$row['accept'];
				$resultid=mysql_query("SELECT position FROM user where user_id = '$id'" ) or die(mysql_error());
				
				$row2=mysql_fetch_assoc($resultid);
				$r1=$row2['position'];
				
				if($count>0)
				{
					$result1=mysql_query("SELECT * FROM type where position='$r1'" ) or die(mysql_error());
					$result2=mysql_query("SELECT * FROM type where (position='$r1') && (position like '%,%') "  ) or die(mysql_error());
					$count2=mysql_num_rows($result2);
					$count1=mysql_num_rows($result1);
					$row1=mysql_fetch_array($result1);
				
				if($count2>0)
				{
					$_SESSION['Loged_User']=$row['username'];
					
					$result3=mysql_query("SELECT * FROM type where (position='$r1') && responsible like '%,%'" ) or die(mysql_error());
					$position=mysql_fetch_array($result3);
					$str=($position[1]);

					$pos= substr_count(($str), ',');
					
					$array=array();
					for( $i=0;$i<=$pos;$i++)
					{
					$position1 = array_shift((explode(",",$str ,2)));
					$array[$i]=$position1;
					$str=substr($str,(strpos($str, ','))+1);;
					
					}
					$_SESSION['$array2']=$array;
					if($accept == "true")
					{
					header("location:../UMS/index_multi.php");
					}
					else
					{
						//header("location:UMSlogin.php");
					}
				}
						
			//adding start gayan

			 if($count1 > 0 and (($row1['responsible'] == "mainadmin")||(in_array("mainadmin", $_SESSION['position1']))) and $accept == "true" )
			{
				
				session_start();
				$_SESSION['Loged_User']=$row['username'];
				$_SESSION['$array2']=array($row1['responsible']);
				header("location:admin/New_Profiles.php");
			
				
			}
			 else if($count1 > 0 and (($row1['responsible'] == "doctor")||(in_array("doctor", $_SESSION['position1']))) and $accept == "true" )
			{
				
				session_start();
				$_SESSION['Loged_User']=$row['username'];
				$_SESSION['$array2']=array($row1['responsible']);
				header("location:../project/doctor.php");
			
				
			}
			else if($count1 > 0 and(($row1['responsible'] == "technician")||(in_array("technician", $_SESSION['position1']))) and $accept == "true" )
			{
				session_start();
				$_SESSION['Loged_User']=$row['username'];
				$_SESSION['$array2']=array($row1['responsible']);
				header("location:../project/technician.php");
			} 
			 else if($count1 > 0 and (($row1['responsible'] == "madmin")||(in_array("madmin", $_SESSION['position1']))) and $accept == "true" )
			{
				session_start();
				$_SESSION['Loged_User']=$row['username'];
				$_SESSION['$array2']=array($row1['responsible']);
				header("location:../project/admin.php");
			}  
			 else if($count1 > 0 and (($row1['responsible'] == "receptionist")||(in_array("receptionist", $_SESSION['position1']))) and $accept == "true" )
			{
				session_start();
				$_SESSION['Loged_User']=$row['username'];
				$_SESSION['$array2']=array($row1['responsible']);
				header("location:../project/resep.php");
			} 
			  else if($count1 > 0 and (($row1['responsible'] == "pharmacist")||(in_array("pharmacist", $_SESSION['position1']))) and $accept == "true" )
			{
				session_start();
				$_SESSION['Loged_User']=$row['username'];
				$_SESSION['$array2']=array($row1['responsible']);
				header("location:../project/parmasist.php");
			} 
			else if($count1 > 0 and (($row1['responsible'] == "warden")||(in_array("warden", $_SESSION['position1']))) and $accept == "true" )
			{
					$_SESSION['usertype']="warden";
					 $_SESSION['id']=$id;
					
				session_start();
				$_SESSION['Loged_User']=$row['username'];

				$_SESSION['$array2']=array($row1['responsible']);
				header("location:../Hostel/HMS/main.php");
			} 
			
			else if(($count1 > 0 and (($row1['responsible'] == "hadmin")||(in_array("hadmin", $_SESSION['position1']))) and $accept == "true" ))
			{
				//session_start();
				if(in_array("hadmin", $position))
					$_SESSION['usertype']="admin";

				$_SESSION['Loged_User']=$row['username'];
				$_SESSION['$array2']=array($row1['responsible']);
				header("location:../Hostel/HMS/main.php");
				
			} 
			else if($count1 > 0 and (($row1['responsible'] == "padmin")||(in_array("padmin", $_SESSION['position1']))) and $accept == "true" )
			{
				session_start();
				$_SESSION['Loged_User']=$row['username'];
				$_SESSION['$array2']=array($row1['responsible']);
				header("location:../physical education/project/Home1.php");
			} 
			
			else if($count1 > 0 and (($row1['responsible'] == "head")||(in_array("head", $_SESSION['position1']))||($row1['responsible'] == "student")) and $accept == "true" )
			{
				session_start();
			
				$_SESSION['Loged_User']=$row['username'];
				$_SESSION['$array2']=array($row1['responsible']);
				header("location:index_R_S.php");
				
			} 
			
			else if($count1 > 0 and (($row1['responsible'] == "radmin")||(in_array("radmin", $_SESSION['position1']))) and $accept == "true" )
			{
				//session_start();
			
				$_SESSION['Loged_User']=$row['username'];
				$_SESSION['$array2']=array($row1['responsible']);
				header("location:index_R_S.php");
				
			} 

			
			//adding end gayan
			  else if($count1==0) 
			{
				
				$a="d";
			
			}
			
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
				
				
			//header("location:UMSilogin.php");
			}  
			
		}
		else
		{
			//header("location:UMSlogin.php");
		}

 include('../Hostel/HMS/lib/session.php'); // Includes Login Script

 if((isset($_SESSION['Loged_User'])) &&(($_SESSION['res']=="head")||(in_array("head",$_SESSION['position1'])))  &&($_SESSION['check']=="2"))  
		{
		header("location:../sms_ubuntu/hod/index.php");

		}
 else if((isset($_SESSION['Loged_User'])) &&(($_SESSION['res']=="radmin")||(in_array("radmin",$_SESSION['position1'])))  &&($_SESSION['check']=="2"))  
		{
		header("location:../sms_ubuntu/admin/index.php");

		}
else if((isset($_SESSION['Loged_User'])) &&(($_SESSION['res']=="student")||(in_array("student",$_SESSION['position1'])))  &&($_SESSION['check']=="2"))  
		{
		header("location:../sms_ubuntu/student/index.php");

		}
 else if((isset($_SESSION['Loged_User'])) &&(($_SESSION['res']=="head")||(in_array("head",$_SESSION['position1']))) &&($_SESSION['User']=="1") )
		{
		header("location:../Resulteee_management_system/Instructor/index.php");

		} 
 else if((isset($_SESSION['Loged_User'])) &&(($_SESSION['res']=="radmin")||(in_array("radmin",$_SESSION['position1']))) &&($_SESSION['User']=="1") )
		{
		header("location:../Resulteee_management_system/admin/index.php");

		} 


/* else if((isset($_SESSION['Loged_User'])) &&(($_SESSION['type1']=="admin")||($_SESSION['type1']=="subwarden") ||($_SESSION['type1']=="warden")||($_SESSION['type1']=="hadmin")))
{
 header("location:../Hostel/HMS/main.php");

}  */
/*  else if(!isset($_SESSION['Loged_User']))
{
	//echo $_SESSION['Loged_User'];
	//echo $_SESSION['type1'];
	//header("location:UMSlogin.php");
}     */ 
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
           <form class="form-horizontal" method="post">
			
				
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" class="form-control" required name="userName" id="userName" placeholder="Username">
						<span class="input-group-addon"><i><button type="reset"  id="remove1" class="glyphicon glyphicon-remove" name ="remove1" onclick="ClearFields();" style="width=10px;height=10px"></button></i></span>
                    </div>
								<!--<script>
								function ClearFields(){

								document.getElementById("userName").value = "";
			   
								}
								</script> -->
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

                    <div class="input-group input-group-lg ">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red "></i></span>
                      <input type="password"  id="password" required name="password"  class=" form-control " placeholder="Password"  >
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
				<?php 
				if(($co3==0)&&($a=="c"))
				{
				?>
					<script type="text/javascript">
 
					function timedMsg3()
					{
					var t=setTimeout("document.getElementById('myMsg2').style.display='none';",2000);
					}
					 
					</script>
					 

					<h4 id="myMsg2" color=red><font color="red" style="bold">Your are Not Activate</font></h4>
					  
					<script language="JavaScript" type="text/javascript">timedMsg3()</script>
				<?php
											
				}
									
				?>	
				
				<?php 
				if($a=="d")
				{
				?>
					<script type="text/javascript">
 
					function timedMsg4()
					{
					var t=setTimeout("document.getElementById('myMsg2').style.display='none';",3000);
					
					}
					 
					</script>
					 

					<h4 id="myMsg2" color=red><font color="red" style="bold"><p>You are Not Allowed<br><br>Please contact Administrator</p></font></h4>
					  
					<script language="JavaScript" type="text/javascript">timedMsg4()</script>
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
										
				
								<script>
$(document).ready(function()
{	
	$("#err").hide();
	$("#save1").click(function()
	{		
	$.ajax({
	type: "POST",
	url: "check.php",
	data: dataString,
	cache: false,
	success: function(result){
	$("#err").show(300);
	$('#err').html(result);
	$("#err").hide().slideDown();
	setTimeout(function(){
				  	$("#err").hide();        
			  }, 3000);
	
	}
	});
	return false;
			
	});
	
});
				   </script>
                    <div class="clearfix"></div>
             
                    <div class="clearfix"></div>
					
						
                    <p class="center col-md-5">
                        <button type="submit" value="Login" name="submit" id="save1" class="btn btn-primary" >Login</button>
						
                    </p>
					
					<p class="center col-md-5">
                        <a href="index.php"><font color=black>HOME</font></a>
                    </p>
					<p class="center col-md-5">
                        <a href="CreateNew.php"><font color=black>Create New User</font></a>
                    </p>
					<p class="center col-md-5">
                        <a href="ForgetPassword.php"><font color=black>Forget Password</font></a>
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

<!-- multiple file upload plugin -->

<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>



</body>
</html>

<style>
body
{

	background-color:black;
}

</style>

