<?php
include ('conn.php'); //connect the connection page

 include("../Hostel/HMS/lib/session.php");
 // if the session not yet started 
  //session_start();
  $utype1=$_SESSION['usertype3'];
 $utype2=$_SESSION['usertype1'];
 $utype3=$_SESSION['usertype2'];
       if((!isset($_SESSION['Loged_User']))||($_SESSION['res']!="doctor")&& (!in_array("doctor",$_SESSION['position1'])))
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo "$utype3." ;echo " $utype1" ;echo " $utype2"; ?> <b class="caret"></b></a>
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
<ul>
	
		
	</ul>
                            </div>
                        </div>
                </li>
				
				
				<li class="span11">
                        <div class="thumbnail">
                            <img src="ico/student-small.png" alt="arrangements" align="center"/>
                            <div class="caption" >
                                <h5 align="center">Recetionist</h5>
                            </div>
                        </div>
                </li>



            </ul>
			
        </div>
    
        </div>
	<br>
	<br>
	<br>
	<br>
	<center>
<form  action="prescriptionnew.php" method="post"><big><big>PRESCRIPTION :<br>
  <br>
  </big></big>
  <table width:="50%">
  <center>  <tbody>
		<tr>
        <td>Doctor Name : <br>
        </td>
        <td><input name="doctorname" type="text"><br>
        </td>
      </tr>
      <tr>
        <td>Patient ID : <br>
        </td>
        <td><input name="stregno" type="text"><br>
        </td>
      </tr>
	        <tr>
        <td>Date : <br>
        </td>
        <td><input name="date" type="date"><br>
        </td>
      </tr>
	  
	  
      <tr>
        <td>Symptoms : <br>
        </td>
        <td><textarea cols="30" rows="3" name="symptoms"></textarea><br>
        </td>
      </tr>
      <tr>
        
      </tr>
      <tr>
        <td>Disease :<br>
        </td>
        <td><textarea cols="30" rows="3" name="disease"></textarea><br>
        </td>
      </tr>
	        <tr>
        <td>Drug Name-Drug Value : <br>
        </td>
        <td><textarea cols="30" rows="10" name="drugname_drugvalue"></textarea><br>
        </td>
      </tr>
      <tr>
   
      </tr>
    </tbody></center>
  </table>
  <br>
  <br>
  <input name="submit" value="submit" type="submit">&nbsp; &nbsp; <input name="reset" value="RESET" type="reset"> <big><big><br>
  </big></big></form>
</center>
        <!--/span-->

        
		</div>
		
            <!-- InstanceEndEditable --></div>

        <!--/span-->
    
    <!--/row-->
	<div> 
		  <div id="push"></div>
    </div>
	


<div id="footer">
      <div class="container">
        <p align="center" class="muted credit"><strong>&copy; 2017  Health Center University of Jaffna</strong></br> <a class="link" href="index.php" target="_blank" rel="nofollow">Health Center</a> University of Jaffna</p>
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



