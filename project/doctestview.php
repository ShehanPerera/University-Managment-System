

<?php
include ('conn.php'); //connect the connection page

 // if the session not yet started 
 include("../Hostel/HMS/lib/session.php");
 // if the session not yet started 
  //session_start();
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
<?php
if(isset($_POST['Search']))
{
	$regnotosearch=$_POST['regnotosearch'];
	$quary="select * from test where stregno LIKE '%".$regnotosearch."%' ";
	$searchresult=filtertable1($quary);
}
else
{
	$quary="select * from test";
	$searchresult=filtertable1($quary);
}
function filtertable1($quary)
{
	include('conn.php');
	$filterresult=mysqli_query($conn,$quary);
	return $filterresult;
	
}
?>

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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
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
                            <img src="ico/doctor_small.jpg" alt="arrangements" align="center"/>
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
		<br>
		<center><h2>Search By Registation Number</h2></center>
<center><form action="docpatientview.php" method="post"></center>
<center><input type="text" name="regnotosearch" placeholder="search for prescription detail"><br></center>
<br>
<center><input type="submit" name="search" value="filter_a_detail"><br><br></center>
<center>
<table BORDER=1>
<tr>
<th>test_type</th>
<th>stregno</th>
<th>treatmentid</th>
<th>test_result</th>
<th>date</th>
</center>
</tr>
<?php while($row=mysqli_fetch_array($searchresult)): ?>

<tr>
<td> <?php echo $row['test_type']; ?> </td>
<td> <?php echo $row['stregno']; ?> </td>
<td> <?php echo $row['treatmentid']; ?> </td>
<td> <?php echo $row['test_result']; ?> </td>
<td> <?php echo $row['date']; ?> </td>
</tr>
<?php endwhile; ?>
</table>
</form>
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



















