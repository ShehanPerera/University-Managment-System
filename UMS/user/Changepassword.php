 <?php
error_reporting(0);
 include('../../Hostel/HMS/lib/session.php'); 
 if((!isset($_SESSION['Loged_User']))) {
	 header('location:../../UMS/UMSlogin.php');
}
else
{
	$id=$_SESSION['id'];
	
}

//New Changepassword by shehan ===========================================================================================================
 ?>  
<!DOCTYPE html>
<html lang="en">
<head>

<!--shehan password ===========================================================================================================-->
<link href='../pass.css' rel='stylesheet' type='text/css'>
<script src="../pass.js"></script><!-- jQuery Library-->

<script src="../passwordscheck.js"></script><!-- Include Your jQUery file here-->



    <meta charset="utf-8">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../logo.png">
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
	
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
	
	  <link id="bs-css" href="../css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="../css/charisma-app.css" rel="stylesheet">
    <link href='../bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='../bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='../bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='../bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='../bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='../bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='../css/jquery.noty.css' rel='stylesheet'>
    <link href='../css/noty_theme_default.css' rel='stylesheet'>
    <link href='../css/elfinder.min.css' rel='stylesheet'>
    <link href='../css/elfinder.theme.css' rel='stylesheet'>
    <link href='../css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='../css/uploadify.css' rel='stylesheet'>
    <link href='../css/animate.min.css' rel='stylesheet'>
	 <!--validator shashi-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>

    <!-- jQuery -->
    <script src="../bower_components/jquery/jquery.min.js"></script>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

    <!-- The fav icon -->
    <link rel="shortcut icon" href="../logo.png">
	<script type="text/javascript">
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#pro_pic')
                        .attr('src', e.target.result)
                        // .width(150)
                        // .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
  </script>

</head>

<body>
<script type="text/javascript">
		function checkUserfun()
		{
			
			var name=document.getElementById( "InputUsername" ).value;
			
					
			$.ajax(
			 
			 {
					type:"POST",
					url:"checkuserext.php",
					data:{user_name:name},
					success:function(data){
						
						
						//  $("#update").prop('disabled', true);
						// 

						if(data==1)
						{
							$('#update').attr('disabled', 'disabled');
							$("#msg").html('<h5><i><span style="color:red;text-align:left;">Username already exist!</span>');
						}
						else if(data==0)
						{
							$("#msg").html('<h5><i><b><span style="color:green;text-align:left;">Username Available</h5> </span>');
							$('#update').removeAttr('disabled');
						}



					}
					
				})

		}

		function checkNICfun()
		{
			var name=document.getElementById( "InputNIC" ).value;
			$.ajax({
					type:"POST",
					url:"checkemailext.php",
					data:{nic:name},
					success:function(data){
						//$("#msgNIC").html(data);
						if(data==6)
						{
							
							$('#update').attr('disabled', 'disabled');
							$("#msgNIC").html('<h5><i><span style="color:red;text-align:left;">NIC already exist!</span>');
						}
						else if((data==7 || data!=4))
						{
							
							$("#msgNIC").html('<h5><i><b><span style="color:green;text-align:left;">NIC Available</h5> </span>');
							$('#update').removeAttr('disabled');
						}
					}
				})

		}
		function checkEmailfun()
		{
			var name=document.getElementById( "InputEmail1" ).value;
			$.ajax({
					type:"POST",
					url:"checkemailext.php",
					data:{email1:name},
					success:function(data1){
						//$("#msgEMAIL").html(data);
						if(data1==4)
						{
							
							$('#update').attr('disabled', 'disabled');
							$("#msgEMAIL").html('<h5><i><span style="color:red;text-align:left;">Email already exist!</span>');
						}
						else if(data1==5 || data1!=6)
						{
							
							$("#msgEMAIL").html('<h5><i><b><span style="color:green;text-align:left;">Email Available</h5> </span>');
							$('#update').removeAttr('disabled');
						}
					}
				})

		}




</script>
	<!-- left menu starts -->
    <div class="wrapper">
        <div class="sidebar" data-background-color="black" data-active-color="warning">

            <div class="sidebar-wrapper">
				<div class="logo">
                    <a href="../index_multi.php" class="simple-text">
						<img src="../logo.png" alt = "Logo" style="width:80px;height:80px;">
						<h2>UMS</h2>
					</a>
                </div>
				<ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <li class="time">
						<script>
							function startTime()
							{
								var today = new Date();
								var h = today.getHours();
								var m = today.getMinutes();
								var s = today.getSeconds();
								m = checkTime(m);
								s = checkTime(s);
								document.getElementById('txt').innerHTML = h + ":" + m + ":" + s;
								var t = setTimeout(startTime, 500);
							}
							function checkTime(i)
							{
								if(i<10) {i = "0" + i};
								return i;
							}
						</script>
						<h1 class="animated fadeInLeft">
							<body onload = "startTime()">
								<div id = "txt"></div>
									</body>
										</h1>
										<h5 class="animated fadeInLeft"><?php echo date("j/m/Y")?></h5>
									</li>
										</ul>
										 <ul class="nav">
											<li class="">
												<a href="../index_multi.php">
													<i class="ti-panel"></i>
													<p>Home</p>
												</a>
											</li>
											<li>
											<li class="">
												<a href="editpage.php">
													<i class="ti-user"></i>
													<p>My Profile</p>
												</a>
												</li>
												<li class="active">
												<a href="Changepassword.php">
													<i class="ti-lock"></i>
													<p>Change Password</p>
												</a>
												</li>
												
											</li>
											<li>
												<a href="../../Hostel/HMS/lib/logout.php">
													<i class="ti-text"></i>
													<p>LogOut</p>
												</a>
											</li>
											<li>
												<a href="http://www.jfn.ac.lk/">
													<i class="ti-view-list-alt"></i>
													<p>UOJ</p>
												</a>
											</li>
											
										
										</ul>
										</div>
			</div>
<!--gayan--!>
<?php
 

 $utype1=$_SESSION['usertype3'];
 $utype2=$_SESSION['usertype1'];
 $utype3=$_SESSION['usertype2'];
 $hostelid="";$hostelname="";
 
  
  
if(isset($_SESSION['Loged_User']))
{
	$id=$_SESSION['id'];
	
include('../../Hostel/HMS/lib/STD_Con.php');
 $sql = "SELECT * FROM hostel_detail INNER JOIN hostel_staff ON hostel_detail.id = hostel_staff.hostel_id   WHERE hostel_staff.warden_id='".$id."' OR hostel_staff.subwarden_id='".$id."' ";
  $result = $conn->query($sql);
  foreach ($result as $hname  )
  {
	$hostelid=$hname["hostel_id"];  
	$hostelname=$hname["name"];
  }
  
 include("../connection.php");
 
 $query=mysql_query("select * from user where user_id='$id'");
$query_row=mysql_fetch_assoc($query);
}

?>
<!--gayan-->	
		<!--/span-->
		<!-- left menu ends -->
			<div class="main-panel">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- topbar starts -->
						<button type="button" class="navbar-toggle pull-left animated flip">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- user dropdown starts -->
						<div class="btn-group pull-right">
							<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
								<?php echo '<img height="30px" width="25px" src="data:image;base64,'.$_SESSION['image'].'" id="pro_pic"/></td>'; ?><span class="hidden-sm hidden-xs"> <?php echo "$utype3." ;echo " $utype1" ;echo " $utype2"; ?></span>
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<li><a href="../user/editpage.php"><i class="glyphicon glyphicon-file"> Profile</i></a></li>
								<li class="divider"></li>
								<li><a href="../../Hostel/HMS/lib/logout.php"><i class="glyphicon glyphicon-off"> Logout</i></a></li>
							</ul>
						</div>
						<!-- user dropdown ends -->
						<div class="pull-left">
							<h4>University Management System</h4>
						</div>
						<!-- topbar ends -->
					</div>
				</nav>
        <!--/span-->
        <!-- left menu ends -->

        <!--<noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>-->

<div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
                <div>
        	<ul class="breadcrumb">
           		 <li>
               		 <a href="../index_multi.php" class="glyphicon glyphicon-home"> Home</a>
            	</li>
           		 <li>
               		 <a href="editpage.php"><i class="glyphicon glyphicon-user"> Edit Account</i></a>
            	</li>
        	</ul>
   		 </div>

    <div class="row">
        <div class="box col-md-12 ">
            <div class="">
                <div class="" data-original-title="">
                    <h2><i class="glyphicon glyphicon-user"><i class ="glyphicon glyphicon-edit">  Edit Account</i></i></h2>

                    
                </div>
                <div class="box-content">
                    <div class="container-fluid">

       

        <div class="col-lg-10 col-md-10 col-xs-10">

                    
                
			
					
					
					

       
               
               
                    <!--ID  Name NIC email username password phone-->
                    <!--Panel content-->
                    <form method="post" enctype="multipart/from-data" action="#" data-toggle="validator">


 <!--   Shehan ===============================================================================================================================================
					<div class="row">
                            <div class="form-group">
                                <label for="InputID">ID</label>
                                <input type="text" class="form-control" id="InputID" placeholder="Enter Your ID" name="id" value="<?php echo $query_row['user_id']?>">
                            </div>
                        </div>
==================================================================================================================================================================						
-->
                    <div class="row"> <!--Title Checkbox (working)-->
                        		
								<label hidden> <input type="text"  hidden class="form-control" id="id" placeholder="Enter Your ID" name="id" value="<?php echo $query_row['user_id']?>"></label>
                            
								 <div class="row">
                        		
                            	<div class="form-group">
								<label for="InputName"><font size="6">Name:</font></label>
								<font size="6">
                                	
                                	<?php echo $query_row['title']." ".$query_row['first_name']."  ".$query_row['last_name'];
									?>
									</font>
                            	</div>
                        	
                        </div>   	

						 <div class="row">
                            
                                <div class="form-group">
                                    <label for="InputPassword">Password</label>
									<div class="input-group input-group-lg ">
                                    <input  required pattern=".{8,}" title="Try contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" type="password" class="form-control" id="password" placeholder="Password" name="password" />
									
									<span class="input-group-addon"><i><button type="button"  id="show_password1" class="glyphicon glyphicon-eye-open" name ="show_password" ></button></i></span>
									 <span id="result" style="font-weight:bold;font-size:larger;}"></span>
									   </div>
									   </div>
                         </div>  
						
						 
					
						
								 
								
								
							
						
										<script>
										$(document).ready(function ()
										{
											$('#show_password1').on('click',function(){
											var passwordFiled=$('#password');
											var passwordFiledType=passwordFiled.attr('type');
											if(passwordFiledType=='password')
											{
												passwordFiled.attr('type','text');
												
												
											}
											else
											{
												passwordFiled.attr('type','password');
												
											}
											});
										});


										</script>
                             
							<div class="row">  
                                <div class="form-group">
                                    <label for="InputPasswordConfirm">Confirm Password</label>
									<div class="input-group input-group-lg ">
                                    <input type="password" class="form-control" id="confirm_password" 
                                    required placeholder="Re Type Password" name="confirm_password"
                                    data-match="#password" data-match-error="Whoops, these don't match"
                                    >
									<span class="input-group-addon"><i><button type="button"  id="show_password2" class="glyphicon glyphicon-eye-open" name ="show_password" ></button></i></span>
								</div>
								</div>
                            
                       	 </div>
								<script>
									$(document).ready(function ()
									{
										$('#show_password2').on('click',function(){
										var passwordFiled=$('#confirm_password');
										var passwordFiledType=passwordFiled.attr('type');
										if(passwordFiledType=='password')
										{
											passwordFiled.attr('type','text');
											
										}
										else
										{
											passwordFiled.attr('type','password');
											
										}
										});
									});


									</script>
			   
									<button type="submit" id="update" name="update" class="center btn btn-primary glyphicon glyphicon-repeat" value="upload"> UPDATE</button>
								

                    </form>


               
            
        </div>
		
		<?php
		if($_POST['update'])
			
			{
$count=0;$count1=0;
 include('../connection.php');

 
 $user1=$_POST['id'];
 
 $pass=$_POST['password'];
 $resultid=mysql_query("SELECT * FROM user where username = '$user1'" ) or die(mysql_error());
 $count=mysql_num_rows($resultid);
				$row2=mysql_fetch_assoc($resultid);
				
				
				
				
					
					$pass=md5($pass);
					$sql = "UPDATE user SET password='$pass' WHERE user_id = '$user1'";
	if(!mysql_query($sql))
	{
		echo "Account Not Saved";

		
	}
	else{
		
	
				echo "<script type='text/javascript'>alert('Pssword Changed');
		window.location.href='editpage.php'
		</script>";
	}
			}
 
?> 
  
                
<!--End of form-->

                </div>
            </div>
        </div>
        <!--/span-->
    </div><!--/row-->

    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <!-- Ad, you can remove it -->
   
    <!-- Ad ends -->

    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="www.csc.jfn.ac.lk">
                                Department of Computer Science
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                About Us
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
					&copy; <script>document.write(new Date().getFullYear())</script>, made<i class="fa fa-heart heart"></i> by <a href="#">Department of CSC</a>
				</div>
				<div class="pull-right">
					<br>
					<a href="#" class="icon-container"> <span class="ti-search"></a>
				</div>
				
            </div>
    </footer>

</div>
<!--/.fluid-container-->

<!-- external javascript -->

<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!--validator shashi-->
<script src = "js\validator.js"></script>
<script src = "js\validator.min.js"></script>

<!-- library for cookie management -->
<script src="../js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='../bower_components/moment/min/moment.min.js'></script>
<script src='../bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='../js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="../bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="../bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="../js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="../bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="../bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="../js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="../js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="../js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="../js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="../js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>
</div>
</div>
</body>
</html>
<?php 

?>
