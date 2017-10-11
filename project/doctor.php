<?php
include ('conn.php'); //connect the connection page

  include("../Hostel/HMS/lib/session.php");
 // if the session not yet started 
  //session_start();
   $utype1=$_SESSION['usertype3'];
 $utype2=$_SESSION['usertype1'];
 $utype3=$_SESSION['usertype2'];
       if((!isset($_SESSION['Loged_User']))||(($_SESSION['res']!="doctor")&& (!in_array("doctor",$_SESSION['position1']))))
        {
          header('location:../UMS/UMSlogin.php');
        }
?>
<!DOCTYPE html>

<html lang="en"><!-- InstanceBegin template="/Templates/admin.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta charset="utf-8">
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>Health Center</title>
    <!-- InstanceEndEditable -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <style type="text/css">
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }

        .sidebar-nav {
            padding: 9px 0;
        }
    </style>
	<style type="text/css">
 /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
      }
      #footer {
        background-color: #f5f5f5;
      }

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }



      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      #footer .container {
        width: auto;
        max-width: 680px;
      }
      .container .credit {
        margin: 10px 0;
      }
</style>
    <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>
</head>

<body>

<div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
			<?php
			
			echo'<a class="brand" href="../UMS/index_multi.php">UMS</a>';
			
			?>
            <a class="brand" href="commentpage.php">Health Center</a>
<a class="active" href="doctor.php">Home</a>
            <div class="nav-collapse">
                
                <ul class="nav pull-right">
                    <li id="fat-menu" class="dropdown open">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo "$utype3." ;echo " $utype1" ;echo " $utype2"; ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
               <!-- <form class="navbar-search pull-left">
                    <input type="text" class="search-query" placeholder="Search">
                </form>-->
               
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row-fluid">
        <div class="span2">
           <div class="well sidebar-nav">

            <ul class="thumbnails">

                <li class="span11">
                        <div class="thumbnail">
                            <img src="ico/admin.png" alt="arrangements" align="center"/>
                            <div class="caption" >
							
                                <h5 align="center">Administrator</h5>
								
								</div>
                        </div>
                </li>

                <li class="span11">
                        <div class="thumbnail">
                           <?php echo '<img height="150px" width="100px" src="data:image;base64,'.$_SESSION['image'].'" id="pro_pic"/></td>'; ?>
                            <div class="caption" >
                                <h5 align="center">Doctor</h5>
																<ul>
		
		
		<li><a class="active" href="test.php">Test Require</a></li>
		<li><a class="active" href="prescription.php">Prescription</a></li>
		
	
	</ul>
                            </div>
                        </div>
                </li>

                <li class="span11">
                        <div class="thumbnail">
                            <img src="ico/pharmacist_small.jpg" alt="arrangements" align="center"/>
                            <div class="caption" >
                                <h5 align="center">Pharmacist</h5>

                            </div>
                        </div>
                </li>
				
				<li class="span11">
                        <div class="thumbnail">
                            <img src="ico/doctor_small.jpg" alt="arrangements" align="center"/>
                            <div class="caption" >
                                <h5 align="center">Thechnician</h5>

                            </div>
                        </div>
                </li>
				
				
				<li class="span11">
                        <div class="thumbnail">
                            <img src="ico/student-small.png" alt="arrangements" align="center"/>
                            <div class="caption" >
                                <h5 align="center">Recetpionist</h5>
                            </div>
                        </div>
                </li>



            </ul>
			
        </div>
    
        </div>
		
		<br><br><br><br><br><br><br><br><br><br><br><br>
		<table>
                <form action="#" method="post" class="navbar-search pull-left">
				
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="" name="regno" id="regno" required="required" class="search-query" placeholder="Search" onKeyUp="showHint(this.value)" style="width: 160px;">
				<br>
					<div class="suggestionList" id="autoSuggestionsList"></div></td>
				<br>
                 <td ><select name="selecttype" id="selecttype"  style="width:180px;">
	                         <option value="selecttype">Select type</option>
	                         <option value="userdetails">User Details</option>
							  <option value="parentdetails">Parent Details</option>	
							  <option value="medicindetails">Medicine Details</option>
							  <option value="testdetails">Test Details</option>
							    <option value="otherdetails">Other Details</option></select></td>
							  
							 <br> 
                  <!-- <td> <input type="text" name="regno" class="search-query" placeholder="Search"></td>-->
					 <td><input type="submit" id="search" name="search" value="Search" align="right"/> </td>
					 <?php
					 
					 include('conn.php');
					// include("config/config.php");
					if(isset($_POST['search']))
					{
					$regno=$_POST['regno'];
					$selecttype=$_POST['selecttype'];
					
						if($regno[0]=="A"||$regno[0]=="N") 						
						{
						if($selecttype=='userdetails')
							{
							$query="SELECT sregno,fullname,raddress,age,martialstate FROM staff_details WHERE sregno='$regno'";
							$result=mysqli_query($query)or die(mysqli_error());				
							echo "<table  width='800'  align='center' text='#080009' border='1'>
								<tr align='center'>
								<td >Regno</td>
								<td>Fullname</td>
								<td>Residancial Address</td>
								<td>Age</td>
								<td>Martialstate</td>	
								</tr>";

								while($row=mysqli_fetch_array($result))
								{
									echo "<tr>";	
									echo "<td align='center'>".$row[0]."</td>";	
									echo "<td align='center'>".$row[1]."</td>";	
									echo "<td align='center'>".$row[2]."</td>";
									echo "<td align='center'>".$row[3]."</td>";	
									echo "<td align='center'>".$row[4]."</td>";
									echo "</tr>";
								} 
								
							}
							if($selecttype=='otherdetails')
							{
							$query="SELECT designation,department FROM staff_details WHERE sregno='$regno'";
							$result=mysqli_query($query)or die(mysqli_error());	
							echo "<table  width='800'  align='center' text='#080009' border='1'>
								<tr align='center'>
								<td >Designation</td>
								<td>Department</td></tr>";
							while($row=mysqli_fetch_array($result))
								{
									echo "<tr>";	
									echo "<td align='center'>".$row[0]."</td>";	
									echo "<td align='center'>".$row[1]."</td>";	
									echo "</tr>";
								}
								
							
							}
							if($selecttype=='parentdetails')
							{
								echo "<script>alert('No details available !!');</script>";
							}
							if($selecttype=='medicindetails')
							{
							$query="SELECT date,disease,medicine FROM prescription WHERE stregno='$regno'";
							$result=mysqli_query($conn,$query)or die(mysqli_error($conn));	
							echo "<table  width='800'  align='center' text='#080009' border='1'>
								<tr align='center'>
								<td >Date</td>
								<td>Disease</td>
								<td>Medicine</td></tr>";
							while($row=mysqli_fetch_array($result))
								{
									echo "<tr>";	
									echo "<td align='center'>".$row[0]."</td>";	
									echo "<td align='center'>".$row[1]."</td>";	
									echo "<td align='center'>".$row[2]."</td>";
									echo "</tr>";
								}
								
							
							}
				if($selecttype=='testdetails')
							{
							$query="SELECT date,test_type FROM test_require WHERE stregno='$regno'";
							$result=mysqli_query($conn,$query)or die(mysqli_error($conn));	
							echo "<table  width='800'  align='center' text='#080009' border='1'>
								<tr align='center'>
								<td >Date</td>
								
								<td>test_type</td></tr>";
							while($row=mysqli_fetch_array($result))
								{
									echo "<tr>";	
									echo "<td align='center'>".$row[0]."</td>";	
									echo "<td align='center'>".$row[1]."</td>";	
									
									echo "</tr>";
								}
								
							
							}
						}
					
					else{
						if($selecttype=='userdetails')
							{
							$query="SELECT stregno,faculty,raddress,dob,illness FROM student_details WHERE stregno='$regno'";
							//$query="SELECT stregno,faculty,raddress,dob,illness FROM student_details stregno=`$regno`";
							$result=mysqli_query($conn,$query)or die(mysqli_error($conn));
							echo "<table  width='800' align='center' text='#080009' border='1'>

							<tr align='center'>
							<td >Regno</td>
							<td>Faculty</td>
							<td>Address</td>
							<td>Date Of Birth</td>
							<td>Illness</td>	
							</tr>";
							

								while($row=mysqli_fetch_array($result))
								{
									echo "<tr>";	
									echo "<td align='center'>".$row[0]."</td>";	
									echo "<td align='center'>".$row[1]."</td>";	
									echo "<td align='center'>".$row[2]."</td>";
									echo "<td align='center'>".$row[3]."</td>";
									echo "<td align='center'>".$row[4]."</td>";
									
									echo "</tr>";
								}
								
							}
						if($selecttype=='parentdetails')
							{
								$query="SELECT pname,address,tpno FROM student_details WHERE stregno='$regno'";
								//$query="SELECT pname,address,tpno FROM student_details stregno='$regno'";
								$result=mysqli_query($conn,$query)or die(mysqli_error($conn));
								echo "<table  width='800' align='center' text='#080009' border='1'>
								<tr align='center'>
								<td >ParentName</td>
								<td>Address</td>
								<td>Telephone.No</td>
								</tr>";
								while($row=mysqli_fetch_array($result))
								{
									echo "<tr>";	
									echo "<td align='center'>".$row[0]."</td>";	
									echo "<td align='center'>".$row[1]."</td>";	
									echo "<td align='center'>".$row[2]."</td>";
									echo "</tr>";
								}
								
							}
							if($selecttype=='otherdetails')
							{
								echo "<script>alert('No details available !!');</script>";
							}
						if($selecttype=='medicindetails')
							{
							$query="SELECT date,disease,drugname_drugvalue FROM prescription WHERE stregno='$regno'";
							$result=mysqli_query($conn,$query)or die(mysqli_error($conn));	
							echo "<table  width='800'  align='center' text='#080009' border='1'>
								<tr align='center'>
								<td >Date</td>
								<td>Disease</td>
								<td>Medicine</td></tr>";
							while($row=mysqli_fetch_array($result))
								{
									echo "<tr>";	
									echo "<td align='center'>".$row[0]."</td>";	
									echo "<td align='center'>".$row[1]."</td>";	
									echo "<td align='center'>".$row[2]."</td>";
									echo "</tr>";
								}
								
							
							}
							if($selecttype=='testdetails')
							{
							$query="SELECT date,test_type FROM test_require WHERE stregno='$regno'";
							$result=mysqli_query($conn,$query)or die(mysqli_error($conn));	
							echo "<table  width='800'  align='center' text='#080009' border='1'>
								<tr align='center'>
								<td >Date</td>
								
								<td>test_type</td></tr>";
							while($row=mysqli_fetch_array($result))
								{
									echo "<tr>";	
									echo "<td align='center'>".$row[0]."</td>";	
									echo "<td align='center'>".$row[1]."</td>";	
									
									echo "</tr>";
								}
								
							
							}
							
						}
						
					
					}
					?>
  
                </form>
				</table>
        
		</div>
		
            <!-- InstanceEndEditable --></div>
					

        <!--/span-->
    </div>
    <!--/row-->

	<div> 
		  <div id="push"></div>
    </div>
<div id="footer">
      <div class="container">
        <p align="center" class="muted credit"><strong>&copy; 2014  Health Center University of Jaffna</strong></br> <a class="link" href="index.php" target="_blank" rel="nofollow">Health Center</a> University of Jaffna</p>
      </div>
    </div>

</div>
<!--/.fluid-container-->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap-tab.js"></script>
<script src="js/bootstrap-dropdown.js"></script>
<script src="js/bootstrap-modal.js"></script>
<script src="js/bootstrap-typeahead.js"></script>
<!-- InstanceBeginEditable name="scripts" -->
566<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
