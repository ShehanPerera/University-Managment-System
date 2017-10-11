<?php
include('../../Hostel/HMS/lib/session.php');
if((!isset($_SESSION['Loged_User']))||(($_SESSION['res']!="student")&&(!in_array("student",$_SESSION['position1']))) )
{
	 header('location:../../UMS/UMSlogin.php');
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
  
   <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Notification</title>
        <meta name="description" content="Metis: Bootstrap Responsive Admin Theme">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap-responsive.min.css"/>
        <link type="text/css" rel="stylesheet" href="../assets/Font-awesome/css/font-awesome.min.css"/>
        <link type="text/css" rel="stylesheet" href="../assets/css/style.css"/>
        <link type="text/css" rel="stylesheet" href="../assets/css/prettify.css"/>
        <link type="text/css" rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/flick/jquery-ui.css"/>
        <link type="text/css" rel="stylesheet" href="../assets/css/jquery.tagsinput.css"/>
        <link type="text/css" rel="stylesheet" href="../assets/chosen/chosen/chosen.css"/>
        
        <link type="text/css" rel="stylesheet" href="../assets/uniform/themes/default/css/uniform.default.css">
        
        <link rel="stylesheet" href="../assets/css/colorpicker.css" />
        <link rel="stylesheet" href="../assets/css/timepicker.css" />
        <link rel="stylesheet" href="../assets/css/datepicker.css" />
        <link rel="stylesheet" href="../assets/css/daterangepicker.css" />
        <link rel="stylesheet" href="../assets/css/bootstrap-toggle-buttons.css" />
        
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
                                    Dashboard </a> 
                                    <a class="pagepath" href="note.php">
                                    <font color="#FFFFFF"> | </font>
                                    Notification</a>
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
            <div id="content" class="">
                <!-- .outer -->
                <div class="container-fluid outer">
                    <div class="row-fluid">
                        <!-- .inner -->
                        <div class="span12 inner">                           
							<!--BEGIN INPUT TEXT FIELDS-->
                            <div class="row-fluid">
                                <div class="span12">
                                    <div class="box dark">
                                        <header>
                                            <div class="icons"><i class="icon-edit"></i></div>
                                            <h5>Notification </h5>
                                            <!-- .toolbar -->
                                            <div class="toolbar">
                                                <ul class="nav">    
                                                    <li>
                                                        <a class="accordion-toggle minimize-box" data-toggle="collapse" href="#div-2">
                                                            <i class="icon-chevron-up"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.toolbar -->
                                        </header>
                                        <div id="div-2" class="accordion-body collapse in body">
                                    <div class="row-fluid">
                                        <div class="span12">
                                            <div class="box">
                                                
                                                <div class="body clearfix">												
													<?php
													include('../connect.php');
													$result = mysql_query("SELECT * FROM notification WHERE position='student'");
															while($row = mysql_fetch_array($result))
																{
																	echo '<blockquote><p>* '.$row['message'].'</p></blockquote>';
																	
																}
													?>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--END TEXT INPUT FIELD--> 
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

        <div class="clearfix"></div>



        <!-- #helpModal -->
        <div id="helpModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel"
             aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="helpModalLabel"><i class="icon-external-link"></i> Help</h3>
            </div>
            <div class="modal-body">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                    ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                    anim id est laborum.
                </p>
            </div>
            <div class="modal-footer">

                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>
        <!-- /#helpModal -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="../assets/js/vendor/jquery-migrate-1.2.1.min.js"></script>

        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script>window.jQuery.ui || document.write('<script src="../assets/js/vendor/jquery-ui-1.10.0.custom.min.js"><\/script>')</script>


        <script src="../assets/js/vendor/bootstrap.min.js"></script>

        <script type="text/javascript" src="../assets/js/lib/bootstrap-progressbar.min.js"></script>
        <script type="text/javascript" src="../assets/js/lib/jquery.mousewheel.js"></script>
        
        <script type="text/javascript" src="../assets/js/lib/prettify.js"></script>
        <script type="text/javascript" src="../assets/js/lib/jquery.sparkline.min.js"></script>
        <script type="text/javascript" src="../assets/js/lib/jquery.dualListBox-1.3.min.js"></script>
        <script type="text/javascript" src="../assets/js/lib/bootstrap-inputmask.js"></script>
        <script type="text/javascript" src="../assets/js/lib/jquery.autosize-min.js"></script>
        <script type="text/javascript" src="../assets/js/lib/jquery.inputlimiter.1.3.1.min.js"></script>
        <script type="text/javascript" src="../assets/js/lib/jquery.tagsinput.min.js"></script>
        
        <script type="text/javascript" src="../assets/chosen/chosen/chosen.jquery.min.js"></script>
        
        <script type="text/javascript" src="../assets/uniform/jquery.uniform.min.js"></script>
        
        <script type="text/javascript" src="../assets/js/lib/jquery.validVal-4.3.2.js"></script>
        <script type="text/javascript" src="../assets/js/lib/date.js"></script>
        <script type="text/javascript" src="../assets/js/lib/daterangepicker.js"></script>
        <script type="text/javascript" src="../assets/js/lib/bootstrap-colorpicker.js"></script>
        <script type="text/javascript" src="../assets/js/lib/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="../assets/js/lib/bootstrap-timepicker.js"></script>
        <script type="text/javascript" src="../assets/js/lib/jquery.toggle.buttons.js"></script>
        <script type="text/javascript" src="../assets/js/main.js"></script>
		<script src="../assets/js/script.js"></script>
        
        <script>
            $(function() {
                formGeneral();
            });
        </script>
        
       
        
    </body>
</html>