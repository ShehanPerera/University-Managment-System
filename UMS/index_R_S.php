<!DOCTYPE html>
<?php
include('../Hostel/HMS/lib/session.php');

 if((!isset($_SESSION['Loged_User']))||($_SESSION['res']!="head")&&($_SESSION['res']!="student")&&($_SESSION['res']!="radmin")&&(!in_array("radmin",$_SESSION['position1']))&&(!in_array("head",$_SESSION['position1']))&&(!in_array("student",$_SESSION['position1'])))
         {
         header('location:UMSlogin.php');
        }

 $utype1=$_SESSION['usertype3'];
 $utype2=$_SESSION['usertype1'];
 $utype3=$_SESSION['usertype2'];
?>
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


    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

    <!-- The fav icon -->
    <link rel="shortcut icon" href="logo.png">

</head>

<body>


	<!-- left menu starts -->
        <div class="wrapper">
        <div class="sidebar" data-background-color="black" data-active-color="warning">

            <div class="sidebar-wrapper">
				<div class="logo">
                <a href="index_R_S.php" class="simple-text">
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
						<h1 class="animated fadeInLeft">
							<body onload = "startTime()">
								<div id = "txt"></div>
							</body>
						</h1>
						<h5 class="animated fadeInLeft"><?php echo date("j/m/Y")?></h5>
                    </li>
				</ul>
                <ul class="nav">
                    <li class="active">
                        <a href="index_R_S.php">
                            <i class="ti-panel"></i>
                            <p>Home</p>
                        </a>
                    </li>
                     <li><a href="../Hostel/HMS/lib/logout.php">
												
													<i class="glyphicon glyphicon-off"></i>
													<p>LogOut</p>
												</a>
											</li>
											 <li class="">
												<a href="help.pdf">
													<i class="glyphicon glyphicon-question-sign"></i>
													<p>Help</p>
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
								<div class="pull-left">
							<h4>University Management System</h4>
						</div>

								<!-- user dropdown starts -->
								<div class="btn-group pull-right">
									<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									
										<span class="hidden-sm hidden-xs"><a><?php echo '<img height="30px" width="25px" src="data:image;base64,'.$_SESSION['image'].'" id="pro_pic"/></td>'; ?></a></span>
										<span class="hidden-sm hidden-xs"><?php echo "$utype3." ;echo " $utype1" ;echo " $utype2"; ?></span>
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li><a href="user/editpage.php"><i class="glyphicon glyphicon-file"> Profile</i></a></li>
										<li class="divider"></li>
										<li><a href="../Hostel/HMS/lib/logout.php"><i class="glyphicon glyphicon-off"> Logout</i></a></li>
									</ul>
								</div>
								<!-- user dropdown ends -->

								
						<!-- topbar ends -->
				</div>
			</nav>
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index_R_S.php" class=" glyphicon glyphicon-home"> Home </a>
					</li>
					
				</ul>
			</div>
			<div class="main-panel">
            
					<!-- content starts -->
					

					<h3><br><br>
				<form  method="POST">
				<a href="1.php"><img src="icons/result.png" style="width:70px;height:50px;"> EXAMINATION MANAGEMENT SYSTEM</a><br>
				</form>
				<form  method="POST">
				<a href="2.php"><img src="icons/sms.png" style="width:70px;height:50px;"> STUDENT MANAGEMENT SYSTEM</a><br>
					</form>					
				<a href="admins.php"><img src="icons/account.png" style="width:70px;height:50px;"> USER ACCOUNT MANAGEMENT </a><br>
					</h3>
					
				<!--/.fluid-container-->
        </div>
		
		<!--/span-->
		

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
				
            </div>
        </footer>
		</div>

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
			</div>
		</div>
</body>
</html>
<style>
