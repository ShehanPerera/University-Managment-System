<?php require_once('connection.php') ;?>     
<!DOCTYPE html>
<html lang="en">
<head>



<!--shehan password ===========================================================================================================-->
<link href='pass.css' rel='stylesheet' type='text/css'>
<script src="pass.js"></script><!-- jQuery Library-->

<script src="passwordscheck.js"></script><!-- Include Your jQUery file here-->

<!--==================================================================================shehan============================
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
<script type="text/javascript">
		function checkUserfun()
		{
			
			var name=document.getElementById( "UserName" ).value;
			
					
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
			var name=document.getElementById( "nic" ).value;
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
			var name=document.getElementById( "email1" ).value;
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
						<h1 class="animated fadeInLeft">
							<body onload = "startTime()">
								<div id = "txt"></div>
									</body>
										</h1>
										<h3 class="animated fadeInLeft" ><font color='white'><?php echo date("j/m/Y")?></font></h3>
									</li>
										</ul>
										 <ul class="nav">
											<li class="">
												<a href="index.php">
													<i class="ti-panel"></i>
													<p>Home</p>
												</a>
											</li>
											<li>
												<a href="CreateNew.php">
													<i class="ti-user"></i>
													<p>Create New Profile</p>
												</a>
											</li>
											<li class="active">
												<a href="editpage.php">
													<i class="ti-file"></i>
													<p>My Profile</p>
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
						<!-- user dropdown starts -->
						
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
               		 <a href="index.php"><i class="glyphicon glyphicon-home"> Home</i></a>
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

                    
                
<!--gayan--!>

<?php
 $hostelid=""; $hostelname="";
 //shehan=================================================================================================================================================
 $user_id=$_REQUEST['user_id'];
 
 //=-=====================================================================================================================================================
 include('../Hostel/HMS/lib/STD_Con.php');
 $sql = "SELECT * FROM hostel_detail INNER JOIN hostel_staff ON hostel_detail.id = hostel_staff.hostel_id   WHERE hostel_staff.warden_id='".$user_id."' OR hostel_staff.subwarden_id='".$user_id."' ";
  $result = $conn->query($sql);
  foreach ($result as $hname  )
  {
	$hostelid=$hname["hostel_id"];  
	$hostelname=$hname["name"];
  }
					    
 include("connection.php");
 $test="select * from user where user_id='".$user_id."'";
 $query=mysql_query($test);
$query_row=mysql_fetch_assoc($query);

?>
					
<!--gayan--!>					
					
					
					

       
               
               
                    <!--ID  Name NIC email username password phone-->
                    <!--Panel content-->
                    <form method="post" enctype="multipart/from-data" action="edit.php"  data-toggle="validator">


 <!--   Shehan ===============================================================================================================================================
					<div class="row">
                            <div class="form-group">
                                <label for="InputID">ID</label>
                               </div>
                        </div>
==================================================================================================================================================================						
-->
						 <div class="row"> <!--Title Checkbox (working)-->
                        		
								<label hidden> <input type="text"  hidden class="form-control" id="id" placeholder="Enter Your ID" name="id" value="<?php echo $query_row['user_id']?>"></label>
                            
									<?php $title = $query_row['title'];
									$Mr = "";
									$Mrs = "";
									$Miss = "";
									$Dr = "";
									$Prof = "";
									
									if($title == "Mr")
									{
										$Mr = "checked";
									}
									if($title == "Mrs")
									{
										$Mrs = "checked";
									}
									if($title == "Miss")
									{
										$Miss = "checked";
									}
									if($title == "Dr")
									{
										$Dr = "checked";
									}
									if($title == "Prof")
									{
										$Prof = "checked";
									}
									echo '<div class="form-group">
										<label for="InputName">Tittle</label><br>
										<label><input type="radio" name="title" id="optionsRadios1"  value="Mr" '.$Mr.'> Mr. </label>
										<label><input type="radio" name="title" id="optionsRadios2" value="Miss" '.$Miss.'> Miss. </label>
										<label><input type="radio" name="title" id="optionsRadios3" value="Mrs" '.$Mrs.'> Mrs. </label>
										<label><input type="radio" name="title" id="optionsRadios4" value="Dr" '.$Dr.'> Dr. </label>
										<label><input type="radio" name="title" id="optionsRadios5" value="Prof" '.$Prof.'>  Prof. </label><br>
									</div>';
								?>
								</div>  
							
					   <div class="row">
                        		
                            	<div class="form-group">
                                	<label for="InputName">First Name</label>
                                	<input type="text" class="form-control" required id="InputName" placeholder="Enter Your Name" name="first_name" value="<?php echo $query_row['first_name']?>">
                            	</div>
                        	
                        </div>   	
                        <div class="row">			
                            	<div class="form-group">
                                	<label for="InputName">Last Name</label>
                                	<input type="text" class="form-control" required id="InputName" placeholder="Enter Your Name" name="last_name" value="<?php echo $query_row['last_name']?>">
                            	</div>
                        	
                        </div>
                        

                        <div class="row">
                            <div class="form-group">
                                <label for="InputNIC">NIC</label>
								<div id="msgNIC"></div>
                                <input type="text" class="form-control" required pattern="[0-9V]{10,13}" title="use 9 numbers with V 0r 13 numbers" id="nic" onkeyup="checkNICfun()" placeholder="Enter Your NIC" name="nic" value="<?php echo $query_row['nic']?>">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label for="InputEmail1">Email address</label>
								 <div id="msgEMAIL"></div>
                                <input type="email" class="form-control" title="use @/. signs" id="email1" onkeyup="checkEmailfun()" placeholder="Email" name="email1" value="<?php echo $query_row['email']?>">
                            </div>
                        </div>
						<div class="row">
                            <div class="form-group">
                                <label for="Input">Phone Number </label>
                                <input type="text" pattern="[0-9]{10}" title="10 numbers only"    value="<?php echo $query_row['contact']?>"  class="form-control" id="phone"  placeholder="Phone No." name="phone">
                            </div>
						</div>
						
						<div class="row">
                            <div class="form-group">
							  <label for="Input">Address</label>
                                <input type="text"  class="form-control" id="address" value="<?php echo $query_row['address']?>" placeholder="Address" name="address">
                            </div>
                        </div>
						
						
                        <div class="row">
                            <div class="form-group">
                                <label for="InputUsername">Username</label>
								<div id="msg"></div>
                                <input type="text" class="form-control" id="UserName"
                                    required   placeholder="Enter A Username" name="user_name" onkeyup="checkUserfun()" value="<?php echo $query_row['username']?>">
                            </div>
                        </div>
						 <div class="row">
                            
                                <div class="form-group">
                                    <label for="password">Password</label>
									<div class="input-group input-group-lg ">
                                    <input type="password" requiredpattern=".{8,}" title="Try contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control" id="password" placeholder="Password" name="password"/>
									<span class="input-group-addon"><i><button type="button"  id="show_password1" class="glyphicon glyphicon-eye-open" name ="show_password" ></button></i></span><span id="result" style="font-weight:bold;font-size:larger;}"></span>
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

							   </div>
                            
                       	 </div>

                        
                             <div class="row">
                            <div class="form-group">
                                <label for="cpos1">Current Positions</label><br>
                               <label for="cpos"><?php echo $query_row['position'];
							  $mainadmin='false';$hadmin='false';$padmin='false';$madmin='false';$radmin='false';$warden='false';$subwarden='false';$doctor='false';$receptionist='false';$pharmacist='false';$technician='false';$head='false';$student='false';
							$str=$query_row['position'];
							$pos= substr_count(($str), ',');
					
					$array=array();
					for( $i=0;$i<=$pos;$i++)
					{
					$position1 = array_shift((explode(",",$str ,2)));
					$array[$i]=$position1;
					$str=substr($str,(strpos($str, ','))+1);;
					
					}
if($pos>0)
{
	if(in_array("radmin",$array))
	{
	$radmin='checked';	
	}
	if(in_array("head",$array))
	{
	$head='checked';	
	}
	if(in_array("student",$array))
	{
	$student='checked';	
	}
	if(in_array("hadmin",$array))
	{
	$hadmin='checked';	
	}
	if(in_array("warden",$array))
	{
	$warden='checked';	
	}
	if(in_array("subwarden",$array))
	{
	$subwarden='checked';	
	}
	if(in_array("padmin",$array))
	{
	$padmin='checked';	
	}
	if(in_array("doctor",$array))
	{
	$doctor='checked';	
	}
	
	if(in_array("receptionist",$array))
	{
	$receptionist='checked';	
	}
	if(in_array("pharmacist",$array))
	{
	$pharmacist='checked';	
	}
	if(in_array("technician",$array))
	{
	$technician='checked';	
	}
	if(in_array("madmin",$array))
	{
		$madmin='checked';	
	}
	if(in_array("mainadmin",$array))
	{
	$mainadmin='checked';	
	}
	
}	
else
{
	
	if(($query_row['position'])=='hadmin'){$hadmin='checked';}
	if(($query_row['position'])=='warden'){$warden='checked';}
	if(($query_row['position'])=='subwarden'){$subwarden='checked';}
	if(($query_row['position'])=='padmin'){$padmin='checked';}
	if(($query_row['position'])=='madmin'){$madmin='checked';}
	if(($query_row['position'])=='doctor'){$doctor='checked';}
	if(($query_row['position'])=='receptionist'){$receptionist='checked';}
	if(($query_row['position'])=='pharmacist'){$pharmacist='checked';}
	if(($query_row['position'])=='technician'){$technician='checked';}
	if(($query_row['position'])=='radmin'){$radmin='checked';}
	if(($query_row['position'])=='head'){$head='checked';}
	if(($query_row['position'])=='student'){$student='checked';}
	if(($query_row['position'])=='mainadmin'){$mainadmin='checked';}
	
	
	//else if(($query_row['position']))
}?></label>
							   
                            </div>
                        </div>
						
						<div class="row">
                            <div class="form-group">
                                <label for="cpos1">Account Status: </label>
                               <label for="cpos"><?php  
							   if($query_row['accept']=='true')
								   {
									   echo 'Accepted';
									   
								   }
								   else
								   {
									   echo 'Pending';
								   }?></label>
                            </div>
                        </div>
						
                        
                       
                       	 	<div class="row">
                       	 	<div class="form-group">
                       	 			<label for="InputPosition">Positions</label><br>
<!--Shehan ====================================================================================================================================================================-->								
								
								<script>
									function admins(checked)
									{
										if(checked==true)
										{
											$("#Warden").fadeOut();
											$("#student").fadeOut();
											$("#button").fadeIn();
											$("#Sub_Warden").fadeOut();
										}
										else
										{
											$("#Sub_Warden").fadeIn();
											$("#Warden").fadeIn();
											$("#student").fadeIn();
											$("#button").fadeOut();
										}
									}
									function showhostel1(checked)
									{
										if(checked==true)
										{
											$("#Hostelchecked2").fadeIn();
										$("#ha").fadeOut();
											$("#Sub_Warden").fadeOut();
											$("#student").fadeOut();
											$("#button").fadeIn();
											$("#warhos").fadeIn();
										}
										else
										{
											$("#ha").fadeIn();
											$("#Hostelchecked2").fadeOut();
											$("#Sub_Warden").fadeIn();
											$("#student").fadeIn();
											$("#button").fadeOut();
											$("#warhos").fadeOut();
										}
									}
									
									function showhostel2(checked)
									{
										if(checked==true)
										{
											$("#Hostelchecked3").fadeIn();
										$("#ha").fadeIn();
											$("#Warden").fadeOut();
											$("#student").fadeOut();
											$("#button").fadeIn();
											$("#subhos").fadeIn();
										}
										else
										{
											$("#Hostelchecked3").fadeOut();
											$("#ha").fadeIn();
											$("#Warden").fadeIn();
											$("#student").fadeIn();
											$("#button").fadeOut();
											$("#subhos").fadeOut();
										}
									}
									function ShowHOD(checked)
									{
										if(checked==true)
										{
											$("#HODchecked").fadeIn();
											$("#HODchecked2").fadeOut();
											$("#pa").fadeOut();
											$("#do").fadeOut();
											$("#tec").fadeOut();
											$("#recp").fadeOut();
											$("#student").fadeOut();
											$("#ph").fadeOut();
											$("#button").fadeIn();
										}
										else
										{
											$("#HODchecked").fadeOut();
											$("#HODchecked2").fadeOut();
											$("#pa").fadeIn();
											$("#do").fadeIn();
											$("#tec").fadeIn();
											$("#recp").fadeIn();
											$("#student").fadeIn();
											$("#ph").fadeIn();
											$("#button").fadeOut();
										}
									}
									function ShowStudent(checked)
									{
										if(checked==true)
										{
											$("#studentchecked").fadeIn();
											$("#admin").fadeOut();
											$("#Warden").fadeOut();
											$("#Sub_Warden").fadeOut();
											$("#pa").fadeOut();
											$("#do").fadeOut();
											$("#tec").fadeOut();
											$("#recp").fadeOut();
											$("#hod").fadeOut();
											$("#ph").fadeOut();
											$("#ha").fadeOut();
											$("#ma").fadeOut();
											$("#sra").fadeOut();
											$("#button").fadeIn();
											
										}
										else
										{
											$("#studentchecked").fadeOut();
											$("#studentchecked2").fadeOut();
											$("#admin").fadeIn();
											$("#Warden").fadeIn();
											$("#Sub_Warden").fadeIn();
											$("#pa").fadeIn();
											$("#ha").fadeIn();
											$("#ma").fadeIn();
											$("#sra").fadeIn();
											$("#do").fadeIn();
											$("#tec").fadeIn();
											$("#recp").fadeIn();
											$("#hod").fadeIn();
											$("#ph").fadeIn();
											$("#button").fadeOut();
										}
									}
									function med(checked)
									{
										if(checked==true)
										{
											$("#student").fadeOut();
											$("#button").fadeIn();
											
										}
										else
										{
											$("#student").fadeIn();
											$("#button").fadeOut();
										}
									}
									</script>
								<?php
								 
    							echo '<p id="admin"><label><input type="checkbox" '.$mainadmin.' name="position[]" onclick="admins(this.checked)" value="mainadmin">Admin</label></p>';
								echo '<p id="ha"><label><input type="checkbox"  '.$hadmin.' name="position[]" onclick="admins(this.checked)" value="hadmin">Hostel_Admin</label><br>
									<p id="pa"><label><input type="checkbox"  '.$padmin.' name="position[]" onclick="admins(this.checked)" value="padmin">PhyUnit_Admin</label><br>
									<p id="ma"><label><input type="checkbox"  '.$madmin.' name="position[]" onclick="admins(this.checked)" value="madmin">MedicalCenter_Admin</label><br>
									<p id="sra"><label><input type="checkbox"  '.$radmin.' name="position[]" onclick="admins(this.checked)" value="radmin">Student&Result_Admin</label><br>
									<p id="Warden"><label><input type="checkbox" '.$warden.'  id="Warden" onclick="showhostel1(this.checked)"name="position[]" value="warden">Warden</label></p>
									';
									if($warden=='checked')
									{
									echo '
									Hostelid:<label>'.$hostelname.'<input type="text" hidden  name="hostelid1" value="'.$hostelid.'"></label><br>
									';
									
									}
									echo '<p id="Sub_Warden"><label><input type="checkbox" '.$subwarden.'  onclick="showhostel2(this.checked)" name="position[]" value="subwarden">Sub_Warden</label></p>
									';
									if($subwarden=='checked')
									{
									echo '
									Hostelid:<label>'.$hostelname.'<input type="text" hidden  name="hostelid2" value="'.$hostelid.'"></label><br>
									';
									
									}
									
									{
									
										?>
									<p>
									 <?php
								       include('../Hostel/HMS/lib/STD_Con.php');
								      ?>	
							<p id="subhos" style="display:none">									  
								         <select name="hostelid1" class="form-control"  style="width:100%">
										  <option selected disabled hidden>Select Hostel</option>
										    <?php
								          $sql = "SELECT * FROM hostel_detail INNER JOIN hostel_staff ON hostel_detail.id = hostel_staff.hostel_id   WHERE hostel_staff.subwarden_id='no'";

								        
										    
										    $result = $conn->query($sql);

										    foreach ($result as $hname  )
										    {
										    ?>
											     <option value="<?php echo $hname["hostel_id"] ; ?>"><?php echo $hname["name"] ?></option>
									        <?php $_SESSION['$hosid']=$hname["id"]; ?>
										  <?php
										    }
										    ?>
								          
								         

										</select>

								    <br>
								    <br>
									</p>
									<p id="warhos" style="display:none">									  
								         <select name="hostelid1" class="form-control"  style="width:100%">
										  <option selected disabled hidden>Select Hostel</option>
										    <?php
								          $sql = "SELECT * FROM hostel_detail INNER JOIN hostel_staff ON hostel_detail.id = hostel_staff.hostel_id   WHERE hostel_staff.warden_id='no'";

								        
										    
										    $result = $conn->query($sql);

										    foreach ($result as $hname  )
										    {
										    ?>
											     <option value="<?php echo $hname["hostel_id"] ; ?>"><?php echo $hname["name"] ?></option>
									        <?php $_SESSION['$hosid']=$hname["id"]; ?>
										  <?php
										    }
										    ?>
								          
								         

										</select>

								    <br>
								    <br>
									</p>
									<?php
									}
									
									
									
									
									
									
									echo'
									<p id="do"><label><input type="checkbox" '.$doctor.'  name="position[]" onclick="med(this.checked)" value="doctor">Doctor</label><br>
									<p id="ph"><label><input type="checkbox"  '.$pharmacist.' name="position[]" onclick="med(this.checked)" value="pharmacist">Pharmacist</label><br>
									<p id="tec"><label><input type="checkbox" '.$technician.'  name="position[]" onclick="med(this.checked)" value="technician">Technician</label><br>
									<p id="recp"><label><input type="checkbox" '.$receptionist.' name="position[]" onclick="med(this.checked)" value="receptionist">Receptionist</label><br>
									<p id="hod"><label><input type="checkbox" '.$head.' onchange="ShowHOD(this.checked)" name="position[]" value="head">Head of the Department
									</label><br>
									';
									if($head=='checked')
									{
									echo'
									<p id="HODchecked2" >
									
									Department:<label>'.$query_row['department'].'</label><br>
									</p>';
									echo'<p id="HODchecked" style="display:none">
									Department:<label><input type="text" name="department1" value="'.$query_row['department'].'" placeholder="Department"></label><br>
									</p>';
									}
									else
									{
									echo'<p id="HODchecked" style="display:none">
									Department:<label><input type="text" name="department1" value="" placeholder="Department"></label><br>
									</p>';
									}
/*									echo'
									<p id="student"><label><input type="checkbox" '.$student.'  onchange="ShowStudent(this.checked)" name="position[]" value="student">Student</label><br>
									
									';
									
									if($student=='checked')
									{
									echo '
									
									<p id="studentchecked2">
									To change remove titck and tick again</br>
									Index_No:<label>'.$query_row['reg_no'].'</label><br>
									Department:<label>'.$query_row['department'].'</label><br>
									Course of Study:<label>'.$query_row['course'].'</label><br>
									Level:<label>'.$query_row['level'].'</label><br>
									Combination :<label>'.$query_row['combination'].'</label><br>
									Special:<label>'.$query_row['special'].'</label><br>
									</p>';
									echo'<p id="studentchecked" style="display:none">
									Level:<label><input type="text" name="level" value="'.$query_row['level'].'" placeholder="Level"></label><br>
									Combination :<label><input type="text" name="combination" value="'.$query_row['combination'].'" placeholder="Combination"></label><br>
									Special:<label><input type="text" name="special" value="'.$query_row['special'].'" placeholder="Special(Y/N)"></label><br>
									</p>';
									}
									
									else{
									echo'<p id="studentchecked" style="display:none">
									Index_No:<label><input type="text" name="reg_nos"  value="" placeholder="Index_No"></label><br>
									Department:<label><input type="text" name="department" value="" placeholder="Department"></label><br>
									Course of Study:<label><input type="text" name="course"  value="" placeholder="Course of Study"></label><br>
									Level:<label><input type="text" name="level" value="" placeholder="Level"></label><br>
									Combination :<label><input type="text" name="combination" value="" placeholder="Combination"></label><br>
									Special:<label><input type="text" name="special" value="" placeholder="Special(Y/N)"></label><br>
									</p>
									
									';}
*/								
								
								?>								
											
                       	 	</div>
                       	</div>
                       	<div class="row">
                       	 		<div class="form-group">
                       	 		<label for="InputImage">User Image</label>
									<div align="center"><?php
									echo '<img height="300px" width="200px" src="data:image;base64,'.$query_row['image'].'" id="pro_pic"/></td>';?>
									<input name="image" id="image" type="file" onchange="readURL(this);"  accept="image/*"/>
									 <script type="text/javascript">
										function readURL(input)
										{
										if (input.files && input.files[0])
										{
										var reader = new FileReader();

										reader.onload = function (e)
										{
											$('#pro_pic')
											.attr('src', e.target.result)
											// .width(150)
											// .height(200);
										};

										reader.readAsDataURL(input.files[0]);
										}
										}
									</script>
         							</div>
								</div>
						</div>
							<p id="button" style="display:none"><button type="submit" class="center btn btn-primary glyphicon glyphicon-repeat" value="upload"> UPDATE</button></p>

                    </form>

               
            
        </div>
  
                
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
<!-- Validation using Boostrap -->
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
