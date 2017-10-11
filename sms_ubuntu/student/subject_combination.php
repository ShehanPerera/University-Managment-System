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


<html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Subject combination</title>
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
    <div class="main-bar">
      <div class="container-fluid">
        <div class="row-fluid">
          <div class="span12">
            <h4>
            <a class="pagepath" href="../student/index.php">
            Dashboard </a> 
            <a class="pagepath" href="subject_combination.php">
            <font color="#FFFFFF"> | </font>
            Subject combination</a>
            </h4>
          </div>
        </div>
        <!-- /.row-fluid -->
      </div>
      <!-- /.container-fluid -->
    </div>			
    <?php 
      include("leftbar.php"); 
    ?>		
    <!-- /#navbar -->
    
    <!-- #content -->
    <div id="content">
      <!-- .outer -->
      <div class="container-fluid outer">
        <div class="row-fluid">
          <!-- .inner -->
          <div class="span12 inner"> 
            <!-- Start form ------------------------------->
            <form class="form-horizontal" action="subject_com_update.php" method="post">
              <input type='hidden' name="hsYearCd" id="hsYearCd" value="<?php echo $_GET['hsYearCd']; ?>"/>
              <!-- .row-fluid -->
              <div class="row-fluid">
                <!-- .span12 -->
              
              </div>
							<!-- /.row-fluid -->
							<!-- .row-fluid -->
						
              <!-- START SUBMIT -->
							<div class="row-fluid">
								<!-- .span12 -->
								<div class="span12">
									<div class="row-fluid">
										<!-- .span12 -->
										<div class="span12">
											<!-- .box -->
											<div class="box">
												<header>
													<div class="icons">
														<i class="icon-question-sign"></i>
													</div>
													<h5>Time duration and upload</h5>
												</header>
												
												<div id="datePickerBlock11" class="body">
												  
												  <div class="form-group">
													<label>First Preference</label>
													<select name="pre1" id="pre1" class="ed">
													  <?php
														include('../connect.php');
														//$results = mysql_query("SELECT * FROM course");
														$results = mysql_query("SELECT * FROM subject_com");
														
														while($rows = mysql_fetch_array($results)){
														  echo '<option value="' . $rows['id'] . '">'. $rows['subject1'] .' , '. $rows['subject2'] .' , '. $rows['subject3'] .'</option>';
														}
													  ?>
													</select>
												  </div>
												</div>
												  
												<div id="datePickerBlock11" class="body"> 
												  <div class="form-group">
													<label>Second Preference</label>
													<select name="pre2" id="pre2" class="ed">
													  <?php
														include('../connect.php');
														//$results = mysql_query("SELECT * FROM course");
														$results = mysql_query("SELECT * FROM subject_com");
														
														while($rows = mysql_fetch_array($results)){
														  echo '<option value="' . $rows['id'] . '">'. $rows['subject1'] .' , '. $rows['subject2'] .' , '. $rows['subject3'] .'</option>';
														}
													  ?>
													</select>
												  </div>												  
												</div>
												  
												<div id="datePickerBlock11" class="body"> 												  
												  <div class="form-group">
													<label>Third Preference</label>
													<select name="pre3" id="pre3" class="ed">
													  <?php
														include('../connect.php');
														//$results = mysql_query("SELECT * FROM course");
														$results = mysql_query("SELECT * FROM subject_com");
														
														while($rows = mysql_fetch_array($results)){
														  echo '<option value="' . $rows['id'] . '">'. $rows['subject1'] .' , '. $rows['subject2'] .' , '. $rows['subject3'] .'</option>';
														}
													  ?>
													</select>
												  </div>
												  
												</div>
												
											</div>
										</div>
									<!-- /.box -->
									</div>
									<!-- /.span12 -->
									
									<div class="row-fluid">
										<!-- .span12 -->
										<div class="span12">
											<!-- .box -->
											<div class="box">
												<header>
													<div class="icons">
														<i class="icon-question-sign"></i>
													</div>
													<h5>Time duration and upload</h5>
												</header>
												<div id="datePickerBlock11" class="body">
												  <div class="control-group">
													<div class="controls">
													  <a rel="facebox" href="#" id="addq">
														<button class="btn edit" name="submit" type= "submit">Submit</button>
													  </a>
													</div>
												  </div>													
												</div>
											</div>
										</div>
									<!-- /.box -->
									</div>
									<!-- /.span12 -->
								</div>
								
								
								
							</div>
              <!-- /.span12 -->
            
						<!-- END SUBMIT -->
						</form>
						<!-- END form ------------------------------->
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
    <script src="../assets/js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/lib/jquery.tablesorter.min.js"></script>
    <script type="text/javascript" src="../assets/js/lib/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../assets/js/lib/DT_bootstrap.js"></script>
    <script src="../assets/js/lib/responsive-tables.js"></script>
	<script src="../assets/js/script.js"></script>
    <script type="text/javascript">
        $(function() {
            metisTable();
        });
    </script>
    <script type="text/javascript" src="../assets/js/main.js"></script>       
  </body>
</html>