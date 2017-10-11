<?php
  error_reporting(0);
   include('../newUserCount.php');
  include('../../Hostel/HMS/lib/session.php');
if((!isset($_SESSION['Loged_User']))||(($_SESSION['res']!="mainadmin")&&(!in_array("mainadmin",$_SESSION['position1']))) )
{
	 header('location:../../UMS/UMSlogin.php');
} 
 $utype1=$_SESSION['usertype3'];
 $utype2=$_SESSION['usertype1'];
 $utype3=$_SESSION['usertype2'];
{
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
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
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <link href="../assets/css/animate.min.css" rel="stylesheet"/>

    <link href="../assets/css/paper-dashboard.css" rel="stylesheet"/>

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="../assets/css/themify-icons.css" rel="stylesheet">

    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

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

  	<link id="bs-css" href="../css/bootstrap-cerulean.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="../bower_components/jquery/jquery.min.js"></script>
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
				 <li>
            <?php

 if(($_SESSION['res']=="mainadmin")||(in_array("mainadmin",$_SESSION['position1'])))
 {
		echo'<li >
					<a href="../index_multi.php">
						<i class="ti-panel"></i>
						<p>Home</p>
					</a>
				</li>';
	}
	if(($_SESSION['res']=="hadmin")||(in_array("hadmin",$_SESSION['position1'])))
	{
		echo'<li >
					<a href="../../Hostel/HMS/main.php">
						<i class="ti-panel"></i>
						<p>Home</p>
					</a>
				</li>';
	}
	if(($_SESSION['res']=="madmin")||(in_array("madmin",$_SESSION['position1'])))
	{
		echo'<li >
					<a href="../../project/admin.php">
						<i class="ti-panel"></i>
						<p>Home</p>
					</a>
				</li>';
	}
	if(($_SESSION['res']=="radmin")||(in_array("radmin",$_SESSION['position1'])))
	{
		echo'<li >
					<a href="../index_R_S.php">
						<i class="ti-panel"></i>
						<p>Home</p>
					</a>
				</li>';

	}
	if(($_SESSION['res']=="padmin")||(in_array("padmin",$_SESSION['position1'])))
	{
		echo'<li >
					<a href="../../physical education/project/Home.php">
						<i class="ti-panel"></i>
						<p>Home</p>
					</a>
				</li>';

	}

	?>
	</li>
											
											<li>
												<a href="New_Profiles.php">
													<i class="ti-file"></i>
													<p>New Accounts &nbsp&nbsp<?php echo "$newUser_Badge"; ?></p>
												</a>
											</li>
											<li >
												<a href="View_Profiles.php">
													<i class="ti-zoom-in"></i>
													<p>View Accounts</p>
												</a>
											</li>
										<!--	<li>
												<a href="edit_user.php">
													<i class="ti-user"></i>
													<p>Edit Users</p>
												</a>
											</li>-->
											<li>
												<a href="CreateAccounts.php">
													<i class="ti-pencil"></i>
													<p>Create New Account</p>
												</a>
											</li>
											<li class="active">
												<a href="Responsibles.php">
													<i class="glyphicon glyphicon-cog"></i>
													<p>Manage Responsibles </p>
												</a>
											</li>
											
											<li>
												<a href="../user/editpage.php">
													<i class="ti-user"></i>
													<p>My Profile</p>
												</a>
											</li>
											<li>
												<a href="../../Hostel/HMS/lib/logout.php">
													<i class="glyphicon glyphicon-off"></i>
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
        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
                <div>
					<ul class="breadcrumb">
						<li>
							<a href="../index_multi.php" class=" glyphicon glyphicon-home"><span>Home</span></a>
						</li>
						<li>
							<a href="#" class=" glyphicon glyphicon-user">Responsibles Management</a>
						</li>
					</ul>
				</div>

			<div class="row">
				<div class="header" data-original-title="">
					<h2><i class=" glyphicon glyphicon-user">Responsibles Management</i></h2>
				</div>
			</div>
						   
			
			<?php //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++   Tables
				include('../connection.php');

				$query ="SELECT * FROM type";
				$result1=mysql_query($query);
				$i =0;
				$count=0;

			?>
		</div>
<form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
    <div class="box">
   
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
	
	
    <thead>
    <tr >
       
	<th width="1" hidden>position</th>
		<th width hidden="1">position</th>
        <th width="1">Responsibles</th>
		 <th width="1" hidden>Responsibles</th>
		<th width="5">Action </th>
     
    </tr>
    </thead>
    <tbody>
  <?php
		
		 
  while($query_row =mysql_fetch_array($result1))
   {
                    
					echo "<tr bgcolor=\"D3D3D3\" >";
					echo '<td hidden><input hidden size="1" type="text" value ="'.$query_row['position'].'"  name ="position1'.$i.'"/></td>';
					echo '<td width="1" >'.$query_row['position'].'<input hidden size="1" type="text" value ="'.$query_row['position'].'"  name ="position'.$i.'"/></td>';
					echo '<td width="1" hidden>'.$query_row['responsible'].'<input type="text" hidden class="center"  value="'.$query_row['responsible'].'" name ="responsible'.$i.'"/></td>';
					echo '<td width="1" hidden>'.$query_row['responsible'].'<input hidden  width="1" size="1" type="text" value ="'.$query_row['responsible'].'"  name ="email'.$i.'"/></td>';
					
					 
			echo  '<input type="checkbox" checked hidden name="check-all'.$i.'" />';
			echo '<td>';		  
			//echo '<button type="submit"  width="1" class=" center btn btn-info glyphicon glyphicon-repeat" value ="Save" name ="save'.$i.'"> Update </button>';
			echo '<button type="submit"  data-toggle="tooltip" class=" btn btn-danger glyphicon  glyphicon-trash" value ="Delete" name="deletebtn'.$i.'"> Delete </button></td>';/*delete confirm*/
		
	    if(isset($_POST['save'.$i.'']))
	    {
			if(isset($_POST['check-all'.$i.'']))
	    	{
	    	
			   $responsible='';
            
			$position =$_POST['position'.$i.''];
              
				 
				 $responsible=$_POST['responsible'.$i.''];
				 
				
								

                $query ="UPDATE type SET  responsible='$responsible' WHERE position ='$position'";
	   
	             $result =mysql_query($query);
	             if(!$result)
	             {
	             
	             	echo "<script type='text/javascript'>alert('Upadte is faild');\"Responsibles.php\"</script>";
	             }
	             else
	             {
					echo "<script>alert('Upadte Responsible');window.location = \"Responsibles.php\"</script>";
					
	             }
			}
			else
	    	{
	    	
			echo "<script type='text/javascript'>alert('Select the check box');window.location = \"Responsibles.php\"</script>";
	    		
	    	}
	    	
	    }
	  if(isset($_POST['deletebtn'.$i.'']))
		{
			if(isset($_POST['check-all'.$i.'']))
	    	{
				
                $position =$_POST['responsible'.$i.''];
				
						
						
						echo"	<script type='text/javascript'>
							
							{
								a=confirm('Are You Sure To Remove This Record ?')
								 if(a)
								 {
									window.location.href='delete_pos.php?user_id=".$position."';
								 }
							}
							</script>";
			}
			else
	    	{
	    		
	    		echo "<script type='text/javascript'>alert('Select the check box');window.location =\"Responsibless.php\"</script>";
	    	}
	    
			
		}
	  
$i++;		

echo "</tr>";

 
}
    
?>   
       
  <script>
									function check(checked)
									{
										if(checked==true)
										{
											
											
											$("#button").fadeIn();
										}
										else
										{
											
											
											$("#button").fadeOut();
										}
									}
</script>									
    </tbody>
    </table>
	 <table class="table table-striped table-bordered bootstrap-datatable ">
	 <thead>
    <tr >
       
		
		
        <th width="1">Responsibles</th>
		<th width="5">Action </th>
     
    </tr>
    </thead>
    <tbody>
	<?php
	echo "<tr>";
   
    

    echo "<td>";
    echo '<label><input type="checkbox"   name="position[]" onclick="check(this.checked)"  value="mainadmin">Admin</label><br>';
	echo '<label><input type="checkbox"   name="position[]" onclick="check(this.checked)" value="hadmin">Hostel_Admin</label><br>';
	echo '<label><input type="checkbox"   name="position[]" onclick="check(this.checked)" value="padmin">PhyUnit_Admin</label><br>';
	echo '<label><input type="checkbox"   name="position[]" onclick="check(this.checked)" value="madmin">MedicalCenter_Admin</label><br>';
	echo '<label><input type="checkbox"   name="position[]" onclick="check(this.checked)"  value="radmin">Student&Result_Admin</label><br>';
	echo'<label><input type="checkbox"  name="position[]" onclick="check(this.checked)" value="warden">Warden</label><br>';
	echo'<label><input type="checkbox"   name="position[]" onclick="check(this.checked)" value="subwarden">Sub_Warden</label><br>';
	echo'<label><input type="checkbox"   name="position[]" onclick="check(this.checked)" value="doctor">Doctor</label><br>';
	echo'<label><input type="checkbox"   name="position[]" onclick="check(this.checked)" value="pharmacist">Pharmacist</label><br>';
	echo'<label><input type="checkbox"   name="position[]" onclick="check(this.checked)" value="technician">Technician</label><br>';
	echo'<label><input type="checkbox"  name="position[]" onclick="check(this.checked)" value="receptionist">Receptionist</label><br>';
	echo'<label><input type="checkbox"  name="position[]" onclick="check(this.checked)" value="head">HOD</label><br>';
	echo'<label><input type="checkbox"  name="position[]" onclick="check(this.checked)" value="student">Student</label><br>';
									
								
    echo "</td>";

    
    echo "<td>";


   echo '	<p id="button" style="display:none"><button type="submit"  width="1" class=" center btn btn-primary glyphicon glyphicon-plus" value ="Add" name ="addbtn"> Add </button></p>';
			
    if(isset($_POST['addbtn']))
    {
        if(!empty($_POST['position']))
		{
		$position=implode(',',$_POST['position']);
		}
       

        
        {

        	$query ="INSERT INTO type (position,responsible) VALUES ('$position','$position')";
	   
	        $result =mysql_query($query);
	         if(!$result)
	             {
	          
	             	echo "<script type='text/javascript'>alert('Insert is faild')</script>";
	             	
	             }
	             else
	             {

	             	
	             	echo "<script type='text/javascript'>alert('Insert successfully');window.location = \"Responsibles.php\"</script>";
	             	
	             	
	             }

        }
        
       

    }
   
    echo "</td>";



   echo "</tr>";
       
	?>
	
	</tbody>
	
	</table>
</div>
</form>

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

<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

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
<script src="../js/charisma.js"></script>
</div>
</body>
</html>

<?php
 }
   /* else
   {
      $path="../index.php";
   }  */
  ?> 
