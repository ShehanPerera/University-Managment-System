<?php
error_reporting(0);
 include 'connection.php';?> 
<!DOCTYPE html>
<html lang="en">
<head>

<script src='rec.js'></script>

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
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

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
	  <!--validator shashi-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>



    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
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

    <!-- The fav icon -->
    <link rel="shortcut icon" href="logo.png">

</head>

<body>


	<!-- left menu starts -->
        <div class="wrapper">
        <div class="sidebar" data-background-color="black" data-active-color="warning">

            <div class="sidebar-wrapper">
				<div class="logo">
                    <a href="index.php" class="simple-text">
						<img src="logo.png" alt = "Logo" style="width:80px;height:80px;">
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
						<center>
						<h1 class="animated fadeInLeft">
							<body onload = "startTime()">
								<div id = "txt"></div>
							</body>
						</h1>
						</center>
						<center>
						<h3 class="animated fadeInLeft" ><font color='white'><?php echo date("j/m/Y")?></font></h3>
						</center>
                    </li>
				</ul>
                <ul class="nav">
											<li >
												<a href="index.php">
													<i class="ti-panel"></i>
													<p>Home</p>
												</a>
											</li>
											<li class="active">
												<a href="#">
													<i class="ti-user"></i>
													<p>Create New Profile</p>
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
						
						<!-- user dropdown ends -->
						<div class="pull-left">
							<h4>University Management System</h4>
						</div>
					<!-- topbar ends -->
				</div>
			</nav>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
                <div>
        	<ul class="breadcrumb">
           		 <li>
               		 <a href="index.php" class=" glyphicon glyphicon-home"> Home </a>
            	</li>
           		 <li>
               		 <a href="#" class=" glyphicon glyphicon-user" > Forget Password</a>
            	</li>
        	</ul>
   		 </div>
		</div>

    <div class="row">
        <div class="box col-md-12 tour">
            <div class="">
                <div class="" data-original-title="">
                    <h2> <i class=" glyphicon glyphicon-user"><i class=" glyphicon glyphicon-pencil"> Forget Password</i></i></h2>

                    
                </div>
                <div class="box-content">
                    <div class="container-fluid">

       

        <div class="col-lg-10 col-md-10 col-xs-10">
            
               
               
                    <!--ID  Name NIC email username password phone-->
                    <!--Panel content-->
                    <form method="post" action="" data-toggle="validator">

                     					
						  <div class="row">
                            <div class="form-group">
                                <label for="InputUsername">Username</label>
								<div id="msg"></div>
                                <input type="text" required class="form-control" id="UserName" placeholder="Enter A Username (Reg_No for student)" name="user_name" onkeyup="checkUserfun()">
                            </div>
                        </div>

                        <div class="row">
                        		
                            	<div class="form-group">
                                	<label for="InputName">First Name</label>
                                	<input type="text" required class="form-control" id="InputName" placeholder="Enter Your Name" name="first_name">
                            	</div>
                        	
                        </div>   	
                       
                        
						<div class="row">
                            <div class="form-group">
                                <label for="InputNIC">NIC</label>
								
                                <input type="text" required class="form-control" id="nic" placeholder="Enter Your NIC" name="nic" onkeyup="checkNICfun()">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label for="InputEmail1">Email address</label>
								
                                <input type="email"  required class="form-control" title="use @/. signs" onkeyup="checkEmailfun()" placeholder="Email" id="email1" name="email1">
                            </div>
                        </div>
						
						
						
						

                       

                           	   	<button type="text" name="update" id="update" value="update"  class="center btn btn-primary glyphicon glyphicon-edit">Submit</button></p>
						
                    </form>
               
            
        </div>

 <?php
$count=0;$count1=0;
 include('connection.php');
 $fname='a';$user1='u';$nic='n';$emails='e';
 if(!empty($_POST['user_name']))
 {
 $fname=$_POST['first_name'];
 $user1=$_POST['user_name'];
 $nic=$_POST['nic'];
 $emails=$_POST['email1'];
 }
 $frname='s';
 $resultid=mysql_query("SELECT * FROM user where username = '$user1'" ) or die(mysql_error());
 $count=mysql_num_rows($resultid);
				$row2=mysql_fetch_assoc($resultid);
				$frname=$row2['first_name'];
				$nic1=$row2['nic'];
				$email=$row2['email'];
				
				if($frname==$fname && $nic==$nic1 && $email==$emails)
				{
					echo "<script type='text/javascript'>alert('New Password is forget@123');window.location = \"UMSlogin.php\"</script>";
					$new='forget@123';
					$pass=md5($new);
					$sql = "UPDATE user SET password='$pass' WHERE username = '$user1'";
					mysql_query($sql);
	
					$count=0;
				}
				else if($count!=0)
				{
					echo "<script type='text/javascript'>alert('Please try again');</script>";
					
					
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
<!--/fluid-row-->

    <!-- Ad, you can remove it -->
   
    <!-- Ad ends -->

    <hr>

   
    <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
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
				
            </div>
        </footer>
	</div>
	<!--/.fluid-container-->

<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<script src = "js\validator.js"></script>
<script src = "js\validator.min.js"></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->

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
</div>
</div>

</body>
</html>