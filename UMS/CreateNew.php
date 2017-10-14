<?php include 'connection.php';?> 
<!DOCTYPE html>
<html lang="en">
<head>

<!--shehan password ===========================================================================================================-->
<link href='pass.css' rel='stylesheet' type='text/css'>
<script src="pass.js"></script><!-- jQuery Library-->

<script src="passwordscheck.js"></script><!-- Include Your jQUery file here-->

<!--shehan recaptcha==============================================================================================================-->
<script src='https://www.google.com/recaptcha/api.js'></script>


    <meta charset="utf-8">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>University Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="template" content="Muhammad Usman">
	 <meta name="authors" content="shehan Perera/Anjula/Gayan/Kirikaran/Shashikala">

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

<!--- shehan-->



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
<script type="text/javascript">
function 
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
						<h5 class="animated fadeInLeft"><?php echo date("j/m/Y")?></h5>
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
												<a href="CreateNew.php">
													<i class="ti-user"></i>
													<p>Create New Profile</p>
												</a>
											</li>
											<li >
												<a href="UMSlogin1.php">
													<i class="ti-file"></i>
													<p>Check Profile</p>
													<p>(if once create account)</p>
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

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
                <div>
        	<ul class="breadcrumb">
           		 <li>
               		 <a href="index.php" class=" glyphicon glyphicon-home"> Home </a>
            	</li>
           		 <li>
               		 <a href="CreateNew.php" class=" glyphicon glyphicon-user" > Create New Account</a>
            	</li>
        	</ul>
   		 </div>
		</div>

    <div class="row">
        <div class="box col-md-12 tour">
            <div class="">
                <div class="" data-original-title="">
                    <h2> <i class=" glyphicon glyphicon-user"><i class=" glyphicon glyphicon-pencil"> Create Account</i></i></h2>

                    
                </div>
                <div class="box-content">
                    <div class="container-fluid">

       

        <div class="col-lg-10 col-md-10 col-xs-10">
            
               
               
                    <!--ID  Name NIC email username password phone-->
                    <!--Panel content-->
                    <form method="post" action="create.php"  data-toggle="validator">

                     					
						 <div class="row"> <!--Title radio(working)-->
                        		
                            	<div class="form-group">
                                	<label for="InputName">Tittle</label><br>
									<label><input type="radio" name="title" id="optionsRadios1" value="Mr"> Mr. </label>
									<label><input type="radio" name="title" id="optionsRadios2" value="Miss"> Miss. </label>
                                	<label><input type="radio" name="title" id="optionsRadios3" value="Mrs"> Mrs. </label>
									<label><input type="radio" name="title" id="optionsRadios4" value="Dr"> Dr. </label>
									<label><input type="radio" name="title" id="optionsRadios5" value="Prof">  Prof. </label><br>
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
                                	<label for="InputName">Last Name</label>
                                	<input type="text" required class="form-control" id="InputName" placeholder="Enter Your Name" name="last_name">
                            	</div>
                        	
                        </div>
                        
						<div class="row">
                            <div class="form-group">
                                <label for="InputNIC">NIC</label>
								<div id="msgNIC"></div>
                                <input type="text" required pattern="[0-9V]{10,13}" title="use 9 numbers with V or 13 numbers" class="form-control" id="nic" placeholder="Enter Your NIC" name="nic" onkeyup="checkNICfun()">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label for="InputEmail1">Email address</label>
								 <div id="msgEMAIL"></div>
                                <input type="email" required class="form-control" title="use @/. signs" onkeyup="checkEmailfun()" placeholder="Email" id="email1" name="email1">
                            </div>
                        </div>
						
						 <div class="row">
                            <div class="form-group">
                                <label for="Input">Phone Number</label>
                                <input type="text" pattern="[0-9]{10}" maxlength="10" title="10 numbers only" class="form-control" id="phone"  placeholder="Phone No." name="phone">
                            </div>
                        </div>
						
						<div class="row">
                            <div class="form-group">
							  <label for="Input">Address</label>
                                <input type="text" class="form-control" id="address"  placeholder="Address" name="address">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label for="InputUsername">UserName</label>
								<div id="msg"></div>
                                <input type="text" required class="form-control" id="UserName" placeholder="Enter A Username (Reg_No for student)" name="user_name" onkeyup="checkUserfun()">
                            </div>
                        </div>

                        <div class="row">
                            
                                 <div class="form-group">
								 
                                    <label for="InputPassword">Password</label>
									 <div class="input-group input-group-lg ">
                                    <input type="password" pattern=".{8,}" title="Try contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  class="form-control" id="password" required placeholder="Password" name="password"/>
									
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
                       	 			<label for="InputPosition">Positions</label>
									<script>
									function admins(checked)
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
									function adminh(checked)
									{
										if(checked==true)
										{
											
											
											$("#button").fadeIn();
											$("#Warden").fadeOut();
											$("#Sub_Warden").fadeOut();
											
										}
										else
										{
											
											
											$("#button").fadeOut();
											$("#Warden").fadeIn();
											$("#Sub_Warden").fadeIn();
										}
									}
									function adminm(checked)
									{
										if(checked==true)
										{
											
											
											$("#button").fadeIn();
											$("#pa").fadeOut();
											$("#do").fadeOut();
											$("#tec").fadeOut();
											$("#recp").fadeOut();
											
										}
										else
										{
											
											
											$("#button").fadeOut();
											$("#pa").fadeIn();
											$("#do").fadeIn();
											$("#tec").fadeIn();
											$("#recp").fadeIn();
										}
									}
									function showhostel1(checked)
									{
										if(checked==true)
										{
											$("#Hostelchecked1").fadeIn();
											$("#ha").fadeOut();
											$("#Sub_Warden").fadeOut();
											$("#student").fadeOut();
											$("#button").fadeIn();
										}
										else
										{
											$("#Hostelchecked1").fadeOut();
											$("#ha").fadeIn();
											$("#Sub_Warden").fadeIn();
											$("#student").fadeIn();
											$("#button").fadeOut();
										}
									}
									
									function showhostel2(checked)
									{
										if(checked==true)
										{
											$("#Hostelchecked2").fadeIn();
											$("#ha").fadeOut();
											$("#Warden").fadeOut();
											$("#student").fadeOut();
											$("#button").fadeIn();
										}
										else
										{
											$("#Hostelchecked2").fadeOut();
											$("#ha").fadeIn();
											$("#Warden").fadeIn();
											$("#student").fadeIn();
											$("#button").fadeOut();
										}
									}
									function ShowHOD(checked)
									{
										if(checked==true)
										{
											$("#HODchecked").fadeIn();
											$("#pa").fadeOut();
											$("#pa1").fadeOut();
											$("#do").fadeOut();
											$("#tec").fadeOut();
											$("#recp").fadeOut();
											$("#student").fadeOut();
											$("#ph").fadeOut();
											$("#button").fadeIn();
											$("#sra1").fadeOut();
											$("#sra").fadeOut();
										}
										else
										{
											$("#HODchecked").fadeOut();
											$("#pa").fadeIn();
											$("#pa1").fadeIn();
											$("#do").fadeIn();
											$("#tec").fadeIn();
											$("#recp").fadeIn();
											$("#student").fadeIn();
											$("#ph").fadeIn();
											$("#button").fadeOut();
											$("#sra").fadeIn();
											$("#sra1").fadeIn();
										}
									}
									function ShowStudent(checked)
									{
										if(checked==true)
										{
											$("#studentchecked").fadeIn();
											$("#admin").fadeOut();
											$("#admin1").fadeOut();
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
											$("#pa1").fadeOut();
											$("#ha1").fadeOut();
											$("#ma1").fadeOut();
											$("#sra1").fadeOut();
											$("#button").fadeIn();
											
										}
										else
										{
											$("#studentchecked").fadeOut();
											$("#admin").fadeIn();
											$("#admin1").fadeIn();
											$("#Warden").fadeIn();
											$("#Sub_Warden").fadeIn();
											$("#pa").fadeIn();
											$("#ha").fadeIn();
											$("#ma").fadeIn();
											$("#sra").fadeIn();
											$("#pa1").fadeIn();
											$("#ha1").fadeIn();
											$("#ma1").fadeIn();
											$("#sra1").fadeIn();
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
											$("#ma").fadeOut();
											$("#ma1").fadeOut();
										}
										else
										{
											$("#student").fadeIn();
											$("#button").fadeOut();
											$("#ma").fadeIn();
											$("#ma1").fadeIn();
										}
									}
									</script>
								
    							<p id="admin"><label><input type="checkbox"  name="position[]" onclick="admins(this.checked)" value="mainadmin">Admin</label>
								 
										<p id="admin1"><font color='blue'>[ Manage all Accounts and Resposnsibles.]</font></p>
									</p>
									
									<p id="ha"><label><input type="checkbox"   name="position[]" onclick="adminh(this.checked)" value="hadmin">Hostel_Admin</label><br><p id="ha1"><font color='blue'>[Admin for hostel managment, Manage Accounts, Hostels.]</font></p></p>
									<p id="pa"><label><input type="checkbox"   name="position[]" onclick="admins(this.checked)" value="padmin">PhyUnit_Admin</label><br></p><p id="pa1"><font color='blue'>[Admin for Physical Eduction Unit.]</font></p>
									<p id="ma"><label><input type="checkbox"   name="position[]" onclick="adminm(this.checked)" value="madmin">MedicalCenter_Admin</label></p><p id="ma1"><font color='blue'>[Admin for medical center System.]</font></p>
									<p id="sra"><label><input type="checkbox"   name="position[]" onclick="admins(this.checked)" value="radmin">Student  & Result_Admin </label><br><p id="sra1"><font color='blue'>[Admin for Student and Result Management System]</font></p></p>
									
									<p id="Warden"><label><input type="checkbox" id="Warden" onclick="showhostel1(this.checked)"name="position[]" value="warden">Warden</label></p>
									<p id="Hostelchecked1" style="display:none">
									 <?php
								       include('../Hostel/HMS/lib/STD_Con.php');
								      ?>						  
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
									<p id="Sub_Warden"><label><input type="checkbox"  onclick="showhostel2(this.checked)" name="position[]" value="subwarden">Sub_Warden</label></p>
									<p id="Hostelchecked2" style="display:none">
									
									 <?php
								       include('../Hostel/HMS/lib/STD_Con.php');
								      ?>						  
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
									
									<p id="do"><label><input type="checkbox"   name="position[]" onclick="med(this.checked)" value="doctor">Doctor</label><br>
									<p id="ph"><label><input type="checkbox"   name="position[]" onclick="med(this.checked)" value="pharmacist">Pharmacist</label><br>
									<p id="tec"><label><input type="checkbox"   name="position[]" onclick="med(this.checked)" value="technician">Technician</label><br>
									<p id="recp"><label><input type="checkbox"  name="position[]" onclick="med(this.checked)" value="receptionist">Receptionist</label><br>
									<p id="hod"><label><input type="checkbox"  onchange="ShowHOD(this.checked)" name="position[]" value="head">Head of the Department</label><br>
									<p id="HODchecked" style="display:none">
									Department:<label><input type="text" name="department1" placeholder="Department"></label><br>
									</p>
<!------ remove student						<p id="student"><label><input type="checkbox"   onchange="ShowStudent(this.checked)" name="position[]" value="student">Student</label><br>
									<p id="studentchecked" style="display:none">
									Index_No:<label><input type="text" name="reg_nos" placeholder="Index_No"></label><br>
									Department:<label><input type="text" name="department" placeholder="Department"></label><br>
									Course of Study:<label><input type="text" name="course" placeholder="Course of Study"></label><br>
									Level:<label><input type="text" name="level" placeholder="Level"></label><br>
									Combination :<label><input type="text" name="combination" placeholder="Combination"></label><br>
									Special:<label><input type="text" name="special1" placeholder="Special"></label><br>

									</p>
                       	 	</div>
                       	</div>
-------->						 
						<div class="row">
                       	 		<div class="form-group">
                       	 		<label for="InputImage">User Image</label>
									<div align="center">
									<img id="pro_pic" src="image/profile-default.jpg" alt="your image" class="" height="300px" width="200px"> <br />
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
									 <script type="text/javascript"> 
 function enableBtn()
 {
   $("#button").fadeIn();
}
   </script>
         							</div>
								</div>
						</div>
						<div class="g-recaptcha" data-sitekey="6LfeDDEUAAAAAPWGDUAZGiHCMbk5mc72TjsQxMQf" data-callback="enableBtn"></div>
 
                       	   	<p id="button" style="display:none"><button type="text" name="update" id="update" value="update"  class="center btn btn-primary glyphicon glyphicon-edit">Submit</button></p>
						
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
<!--/fluid-row-->

   
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