<?php
include('../../Hostel/HMS/lib/session.php');
if((!isset($_SESSION['Loged_User']))||(($_SESSION['res']!="student")&&(!in_array("student",$_SESSION['position1']))) )
{
	 header('location:../../UMS/UMSlogin.php');
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<?php
	require_once('../auth.php');
?>  
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Student</title>
        <meta name="description" content="Metis: Bootstrap Responsive Admin Theme">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap-responsive.min.css"/>
        <link type="text/css" rel="stylesheet" href="../assets/Font-awesome/css/font-awesome.min.css"/>
        <link type="text/css" rel="stylesheet" href="../assets/css/style.css">
        <link type="text/css" rel="stylesheet" href="../assets/css/DT_bootstrap.css"/>
        <link rel="stylesheet" href="../assets/css/responsive-tables.css">
        
        <link rel="stylesheet" href="../assets/css/theme.css">
        
        <script type="text/javascript" src="../assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <!--[if IE 7]>
        <link type="text/css" rel="stylesheet" href="../assets/Font-awesome/css/font-awesome-ie7.min.css"/>
        <![endif]-->
    </head>
    <body>
        <!-- #wrap -->
        <div id="wrap">
           <!-- #navbar -->
			<?php include("navbar.php"); ?>		
			<!-- /#navbar -->
			
			<!-- ."main-bar -->
                <div class="main-bar">
                    <div class="container-fluid">
                        <div class="row-fluid">
                            <div class="span12">
                              <h4>
                                <a class="pagepath" href="../student/index.php">
                                Dashboard </a> <font color="#FFFFFF"> | </font>
                                <a class="pagepath" href="student.php">
                                Student </a> 
                               </h4>
                            </div>
                        </div>
                        <!-- /.row-fluid -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.main-bar -->
           

          <!-- #leftBar -->
			<?php include("leftBar.php"); ?>		
			<!-- /#leftBar -->

            <!-- #content -->
             <div id="content">
                <!-- .outer -->
                <div class="container-fluid outer">
                    <div class="row-fluid">
                        <!-- .inner -->
                        <div class="span12 inner">
                            <!--Begin Datatables-->
                            <div class="row-fluid">
                                <div class="span12">
                                    <div class="box">
                                        <header>
											<h5>
											 <a href="specialSelection.php"  class="btn">Special Selection</a>
											</h5>
                                        </header>
                                        <div id="collapse4" class="body">
                                            <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                                               <thead>
													<tr>
													<th  style="border-left: 1px solid #C1DAD7"> Reg No </th>
													<th>Index No</th>													
													<th>Name</th>																							
													
													
													<th>Email</th>
													
													<th>Course</th>
													<th>Level</th>			
													</tr>
												</thead>
                                                <tbody>
												<?php
													include('../connect.php');
													$result = mysql_query("SELECT * FROM student");
													while($row = mysql_fetch_array($result))
														{
															echo '<tr class="record">';															
															echo '<td><div align="left">'.$row['RegNo'].'</div></td>';
															echo '<td><div align="left">'.$row['indNo'].'</div></td>';
															echo '<td  style="border-left: 1px solid #C1DAD7">'.$row['fname'].' '.$row['lname'].'</td>';
															//echo '<td><div align="left">'.$row['gender'].'</div></td>';
															//echo '<td><div align="left">'.$row['address'].'</div></td>';				
															echo '<td><div align="left">'.$row['email'].'</div></td>';
															//echo '<td><div align="left">'.$row['phone'].'</div></td>';
															echo '<td><div align="left">'.$row['course'].'</div></td>';
															echo '<td><div align="left">'.$row['level'].'</div></td>';
															echo '</tr>';
														}
													?> 
												</tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.span12 -->
                            </div>
                              <!--End Datatables-->
                        </div>
                        <!-- /.inner -->
                    </div>
                    <!-- /.row-fluid -->
                </div>
                <!-- /.outer -->
            </div>
            <!-- /#content -->
            <!-- #push do not remove -->
            <div id="push"></div>
            <!-- /#push -->
			       <!-- #footer -->		
            <?php include("footer.php"); ?>       		
		<!-- /#footer -->
        </div>
        <!-- /#wrap -->


       <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <!--
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script>window.jQuery.ui || document.write('<script src="../assets/js/vendor/jquery-ui-1.10.0.custom.min.js"><\/script>')</script>
        -->
        <script src="../assets/js/vendor/bootstrap.min.js"></script>
        <script type="text/javascript" src="../assets/js/lib/jquery.tablesorter.min.js"></script>
        <script type="text/javascript" src="../assets/js/lib/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="../assets/js/lib/DT_bootstrap.js"></script>
        <script src="../assets/js/lib/responsive-tables.js"></script>     
        <script type="text/javascript" src="../assets/js/main.js"></script>
		<script src="js/jquery.js"></script>
		<script src="../assets/js/script.js"></script>
		<script type="text/javascript">
$(function() {
  metisTable();

$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deletestud.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>   
        
    </body>
</html>