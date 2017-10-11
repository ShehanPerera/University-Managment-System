<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Profile</title>
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
        						<a class="pagepath" href="../hod/index.php">
                				Dashboard </a> <font color="#FFFFFF"> | </font>
       							<a class="pagepath" href="Profile.php">
                				Profile </a> 
               					</h4>
                            </div>
                        </div>
                        <!-- /.row-fluid -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.main-bar -->
            </header>

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
                            <div class="row-fluid">
                                <!-- .span12 -->
                                <div class="span12">
                                    <div class="box">
                                        <header>                                      
                                            <div class="span12 inner"><h4></h4></div>											
                                        </header>
                                        <div id="actionTable" class="body collapse in">
                                            <table class="table table-bordered table-condensed table-hover table-striped">
                                               
                                        
                                                <tbody>
										
			<?php
											include('../connect.php');
											$id=$_SESSION['SESS_HEAD_ID'];
											$result = mysql_query("SELECT * FROM hod WHERE id='$id'");
											while($row = mysql_fetch_array($result))
												
													echo ' <tr>
																<td rowspan="11" width="30%" align="center"><div align="center">Photo</div></td>
																
															  </tr>
															  <tr>
																<td>Full Name:</td><td>'.$row['fname'].' '.$row['lname'].'</td>
															  </tr>
															  <tr>
																<td>User ID:</td><td><div align="left">'.$row['RegNo'].'</div></td>
															  </tr>															  
															  <tr>
																<td>Gender</td><td><div align="left">'.$row['gender'].'</div></td>
															  </tr>															 
															  <tr>
															    <td>email</td><td><div align="left">'.$row['email'].'</div></td>
															  </tr>
															  <tr>
																<td>phone No</td><td><div align="left">'.$row['phone'].'</div></td>
															  </tr>';
															  ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.span12 -->
                            </div>
                            <!-- /.row-fluid -->

                           
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
   url: "deletecourse.php",
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