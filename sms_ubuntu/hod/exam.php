<?php
include('../../Hostel/HMS/lib/session.php');
if((!isset($_SESSION['Loged_User']))||(($_SESSION['res']!="head")&&(!in_array("head",$_SESSION['position1']))) )
{
	 header('location:../../UMS/UMSlogin.php');
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<?php
	require_once('../auth.php');
?>  
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Form General</title>
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
                                <a class="pagepath" href="../hod/index.php">
								Dashboard </a> 
								<a class="pagepath" href="exam.php">
								<font color="#FFFFFF"> | </font>
								Examination</a>
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
            <div id="content" class="">
                <!-- .outer -->
                <div class="container-fluid outer">
                    <div class="row-fluid">
                        <!-- .inner -->
                        <div class="span12 inner">
										
						<!--BEGIN GUIDELINES FOR CATEGORY     -->
						<?php include("../examguide.php"); ?>
						<!--END GUIDELINES FOR CATEGORY-->																		
						<!--BEGIN SELECT        -->
                            <div class="row-fluid">
							<!-- .span12 -->
                                <div class="span12">
                                    <div class="box">
                                        <header>
                                            <div class="icons"><i class="icon-book"></i></div>
                                            <h5>Level 1G/1S Subjects</h5>
                                            <div class="toolbar">
                                                <a href="#sortableTable1" data-toggle="collapse" class="accordion-toggle minimize-box">
                                                    <i class="icon-chevron-down"></i>
                                                </a>
                                            </div>
                                        </header>
                                        <div class="body collapse out" id="sortableTable1">
                                            <table class="table table-bordered sortableTable responsive">
                                                <thead>
												<tr>
													<th  style="border-left: 1px solid #C1DAD7"> code </th>
													<th>title</th>													
													<th>level</th>																							
													<th>credit</th>
													<th>lecHrs</th>
													<th>prHrs</th>
													<th>lecturer</th>
													<th>Action</th>	
												</tr>
											</thead>
                                                <tbody>
												<?php
													include('../connect.php');
													$result = mysql_query("SELECT * FROM subject WHERE level='1G'");
													
													while($row = mysql_fetch_array($result))
														{
															echo '<tr class="record">';															
															echo '<td><div align="left">'.$row['code'].'</div></td>';
															echo '<td><div align="left">'.$row['title'].'</div></td>';															
															echo '<td><div align="left">'.$row['level'].'</div></td>';
															echo '<td><div align="left">'.$row['credit'].'</div></td>';				
															echo '<td><div align="left">'.$row['lecHrs'].'</div></td>';
															echo '<td><div align="left">'.$row['prHrs'].'</div></td>';
															echo '<td><div align="left">'.$row['lecturer'].'</div></td>';																			
															echo '<td><div align="center"><></div></td>';
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
                            <!--END SELECT-->
							<!--BEGIN SELECT        -->
                            <div class="row-fluid">
                                                    
                           
                                <!-- .span12 -->
                                <div class="span12">
                                    <div class="box">
                                        <header>
                                            <div class="icons"><i class="icon-book"></i></div>
                                            <h5>Level 2G/2S Subjects</h5>
                                            <div class="toolbar">
                                                <a href="#sortableTable2" data-toggle="collapse" class="accordion-toggle minimize-box">
                                                    <i class="icon-chevron-down"></i>
                                                </a>
                                            </div>
                                        </header>
                                        <div class="body collapse out" id="sortableTable2">
                                            <table class="table table-bordered sortableTable responsive">
                                                <thead>
												<tr>
													<th  style="border-left: 1px solid #C1DAD7"> code </th>
													<th>title</th>													
													<th>level</th>																							
													<th>credit</th>
													<th>lecHrs</th>
													<th>prHrs</th>
													<th>lecturer</th>
													<th>Action</th>	
												</tr>
											</thead>
                                                <tbody>
												<?php
													include('../connect.php');
													$result = mysql_query("SELECT * FROM subject WHERE level='2G'");
													
													while($row = mysql_fetch_array($result))
														{
															echo '<tr class="record">';
															
															echo '<td><div align="left">'.$row['code'].'</div></td>';
															echo '<td><div align="left">'.$row['title'].'</div></td>';															
															echo '<td><div align="left">'.$row['level'].'</div></td>';
															echo '<td><div align="left">'.$row['credit'].'</div></td>';				
															echo '<td><div align="left">'.$row['lecHrs'].'</div></td>';
															echo '<td><div align="left">'.$row['prHrs'].'</div></td>';
															echo '<td><div align="left">'.$row['lecturer'].'</div></td>';																			
															echo '<td><div align="center"><a rel="facebox" href="editsubject.php?id='.$row['id'].'">Edit</a> | <a href="deletesub.php" id="'.$row['id'].'" class="delbutton" title="Click To Delete">delete</a></div></td>';
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
                            <!--END SELECT-->
							<!--BEGIN SELECT        -->
                            <div class="row-fluid">
                                                    
                           
                                <!-- .span12 -->
                                <div class="span12">
                                    <div class="box">
                                        <header>
                                            <div class="icons"><i class="icon-book"></i></div>
                                            <h5>Level 3G Subjects</h5>
                                            <div class="toolbar">
                                                <a href="#sortableTable3G" data-toggle="collapse" class="accordion-toggle minimize-box">
                                                    <i class="icon-chevron-down"></i>
                                                </a>
                                            </div>
                                        </header>
                                        <div class="body collapse out" id="sortableTable3G">
                                            <table class="table table-bordered sortableTable responsive">
                                                <thead>
												<tr>
													<th  style="border-left: 1px solid #C1DAD7"> code </th>
													<th>title</th>													
													<th>level</th>																							
													<th>credit</th>
													<th>lecHrs</th>
													<th>prHrs</th>
													<th>lecturer</th>
													<th>Action</th>	
												</tr>
											</thead>
                                                <tbody>
												<?php
													include('../connect.php');
													$result = mysql_query("SELECT * FROM subject WHERE level='3G'");
													
													while($row = mysql_fetch_array($result))
														{
															echo '<tr class="record">';
															
															echo '<td><div align="left">'.$row['code'].'</div></td>';
															echo '<td><div align="left">'.$row['title'].'</div></td>';															
															echo '<td><div align="left">'.$row['level'].'</div></td>';
															echo '<td><div align="left">'.$row['credit'].'</div></td>';				
															echo '<td><div align="left">'.$row['lecHrs'].'</div></td>';
															echo '<td><div align="left">'.$row['prHrs'].'</div></td>';
															echo '<td><div align="left">'.$row['lecturer'].'</div></td>';																			
															echo '<td><div align="center"><a rel="facebox" href="editsubject.php?id='.$row['id'].'">Edit</a> | <a href="deletesub.php" id="'.$row['id'].'" class="delbutton" title="Click To Delete">delete</a></div></td>';
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
                            <!--END SELECT-->
							<!--BEGIN SELECT        -->
                            <div class="row-fluid">
                                                    
                           
                                <!-- .span12 -->
                                <div class="span12">
                                    <div class="box">
                                        <header>
                                            <div class="icons"><i class="icon-book"></i></div>
                                            <h5>Level 3M/3S Subjects</h5>
                                            <div class="toolbar">
                                                <a href="#sortableTable3M" data-toggle="collapse" class="accordion-toggle minimize-box">
                                                    <i class="icon-chevron-down"></i>
                                                </a>
                                            </div>
                                        </header>
                                        <div class="body collapse out" id="sortableTable3M">
                                            <table class="table table-bordered sortableTable responsive">
                                                <thead>
												<tr>
													<th  style="border-left: 1px solid #C1DAD7"> code </th>
													<th>title</th>													
													<th>level</th>																							
													<th>credit</th>
													<th>lecHrs</th>
													<th>prHrs</th>
													<th>lecturer</th>
													<th>Action</th>	
												</tr>
											</thead>
                                                <tbody>
												<?php
													include('../connect.php');
													$result = mysql_query("SELECT * FROM subject WHERE level='3M'");
													
													while($row = mysql_fetch_array($result))
														{
															echo '<tr class="record">';
															
															echo '<td><div align="left">'.$row['code'].'</div></td>';
															echo '<td><div align="left">'.$row['title'].'</div></td>';															
															echo '<td><div align="left">'.$row['level'].'</div></td>';
															echo '<td><div align="left">'.$row['credit'].'</div></td>';				
															echo '<td><div align="left">'.$row['lecHrs'].'</div></td>';
															echo '<td><div align="left">'.$row['prHrs'].'</div></td>';
															echo '<td><div align="left">'.$row['lecturer'].'</div></td>';																			
															echo '<td><div align="center"><a rel="facebox" href="editsubject.php?id='.$row['id'].'">Edit</a> | <a href="deletesub.php" id="'.$row['id'].'" class="delbutton" title="Click To Delete">delete</a></div></td>';
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
                            <!--END SELECT-->
							<!--BEGIN SELECT        -->
                            <div class="row-fluid">
                                                    
                           
                                <!-- .span12 -->
                                <div class="span12">
                                    <div class="box">
                                        <header>
                                            <div class="icons"><i class="icon-book"></i></div>
                                            <h5>Level 4M/4S Subjects</h5>
                                            <div class="toolbar">
                                                <a href="#sortableTable4M" data-toggle="collapse" class="accordion-toggle minimize-box">
                                                    <i class="icon-chevron-down"></i>
                                                </a>
                                            </div>
                                        </header>
                                        <div class="body collapse out" id="sortableTable4M">
                                            <table class="table table-bordered sortableTable responsive">
                                                <thead>
												<tr>
													<th  style="border-left: 1px solid #C1DAD7"> code </th>
													<th>title 
														<i class="icon-sort"></i><i class="icon-sort-down"></i> <i class="icon-sort-up"></i></th>													
													<th>level 
														<i class="icon-sort"></i><i class="icon-sort-down"></i> <i class="icon-sort-up"></i></th>																							
													<th>credit 
														<i class="icon-sort"></i><i class="icon-sort-down"></i> <i class="icon-sort-up"></i></th>
													<th>lecHrs 
														<i class="icon-sort"></i><i class="icon-sort-down"></i> <i class="icon-sort-up"></i></th>
													<th>prHrs 
														<i class="icon-sort"></i><i class="icon-sort-down"></i> <i class="icon-sort-up"></i></th>
													<th>lecturer 
														<i class="icon-sort"></i><i class="icon-sort-down"></i> <i class="icon-sort-up"></i></th>
													<th>Action 
														<i class="icon-sort"></i><i class="icon-sort-down"></i> <i class="icon-sort-up"></i></th>	
												</tr>
											</thead>
                                                <tbody>
												<?php
													include('../connect.php');
													$result = mysql_query("SELECT * FROM subject WHERE level='4M'");
													
													while($row = mysql_fetch_array($result))
														{
															echo '<tr class="record">';
															
															echo '<td><div align="left">'.$row['code'].'</div></td>';
															echo '<td><div align="left">'.$row['title'].'</div></td>';															
															echo '<td><div align="left">'.$row['level'].'</div></td>';
															echo '<td><div align="left">'.$row['credit'].'</div></td>';				
															echo '<td><div align="left">'.$row['lecHrs'].'</div></td>';
															echo '<td><div align="left">'.$row['prHrs'].'</div></td>';
															echo '<td><div align="left">'.$row['lecturer'].'</div></td>';																			
															echo '<td><div align="center"><a rel="facebox" href="editsubject.php?id='.$row['id'].'">Edit</a> | <a href="deletesub.php" id="'.$row['id'].'" class="delbutton" title="Click To Delete">delete</a></div></td>';
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
                            <!--END SELECT-->
							
							<!-- BEGIN DATE PICKER -->
						<div class="row-fluid">
							<!-- .span12 -->
							<div class="span12">
								<!-- .box -->
								<div class="box">
									<header>
										<div class="icons">
											<i class="icon-calendar"></i>
										</div>
										<h5>Time duration and upload </h5>
										<ul class="nav pull-right">
											<li>
												<a href="#datePickerBlock1" data-toggle="collapse" class="accordion-toggle minimize-box">
													<i class="icon-chevron-down"></i>
												</a>
											</li>
										   
										</ul>
									</header>
									<div id="datePickerBlock1" class="body collapse out">
										<form class="form-horizontal">
											<div class="body">
												<table class="table">
													<thead>
														<tr>
															<th>
															<div class="control-group">
																<label class="control-label">Start Date</label>
																<div class="controls">
																<input type="date" id="date2" name="date2"/>
																</div>
															</div>
															</th>														
															<th>
															<div class="control-group">
																<label class="control-label">End Date</label>
																<div class="controls">
																<input type="date" id="date2" name="date2"/>
																</div>
															</div>
															</th>													  
														</tr>
													</thead>
												</table>									
											</div>
											<div class="control-group">
												<div class="controls">
												<input type="submit" class="btn small" value="Post" id="Post">
												<input type="submit" class="btn small" value="Edit" id="Post">
												<input type="submit" class="btn small" value="Remove" id="Remove">
												</div>
											</div>
									</form>
									</div>
								</div>
								<!-- /.box -->
							</div>
							<!-- /.span12 -->
						</div>
						<!-- END DATE PICKER -->
							
                                                                             
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