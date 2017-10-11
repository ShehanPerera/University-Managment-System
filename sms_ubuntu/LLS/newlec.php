<?php
include 'ttup.php';
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
        <title>Time table</title>
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
<body onLoad="StartClock()" onUnload="KillClock()">
 <?php
		if(isset($_GET['lls']))
		{
			$lls = $_GET['lls'];
			$delimiter = ",";
			$items = explode($delimiter, $lls);
			$level=$items[0];
			//$time=$items[1];
			if($level=="timetable1")
				$l="Level 1G";
			elseif($level=="timetable2")
				$l="Level 2G";
			else
				$l="Level 3G";
			
		}
	?>
	<?php
	require_once 'code/databaseconnection.php';
	if(user_loggedin())
	{?>
	  <p>
	  <span class="button_01"><a href="newsea.php">Search Venue</a>
	  </span> 
	  <?php
	  } 
	  ?>
	<?php
	$result=mysql_query("SELECT * FROM history");
			$last= mysql_num_rows($result);
			$result1=mysql_query("SELECT * FROM history WHERE id='$last'");
			$row=mysql_fetch_array($result1);
			$id=$row['Id'];
			$name=$row['Username'];
			$tim=$row['Time'];
			$des=$row['Description'];
			$date=$row['Date'];
	?>
<div id="wrap"> 
           <!-- #navbar -->
			<?php 			
				include("../admin/navbar.php");		
			?>				
			<!-- /#navbar -->
			
			<!-- ."main-bar -->
                <div class="main-bar">
                    <div class="container-fluid">
                        <div class="row-fluid">
                            <div class="span12">
							<h4>
                                <a class="pagepath" href="Timetable.php?lls=timetable1">
                                Timetable </a> <font color="#FFFFFF"> | </font> <a class="pagepath" >
                                Update </a>
								</h4>
                            </div>
                        </div>
                        <!-- /.row-fluid -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.main-bar -->
           

          <!-- #leftBar -->		  
			<?php 
			if(isset($_SESSION['SESS_HEAD_NAME'])){
				include("../hod/leftBar.php");
			}
			else if(isset($_SESSION['SESS_ADMIN_NAME'])){
				include("../admin/leftBar.php");
			}
			else if(isset($_SESSION['SESS_FIRST_NAME'])){
				include("../student/leftBar.php");
			}
			?>		 <div id="content">
			
                <!-- .outer -->
                <div class="container-fluid outer">
				    <div class="row-fluid">					
                        <!-- .inner -->
                        <div class="span12 inner">
                            <!--Begin Datatables-->
                            <div class="row-fluid">							 
                                <div class="span12">
                                    <div class="box">                                       
                                        <div id="collapse4" class="body">
  <!-- /header -->
  <p><?php
        if (isset($_GET['lls'])) {
            $lls = $_GET['lls'];
			$delimiter = ",";
			$items = explode($delimiter, $lls);
			$level=$items[0];
			$day=$items[1];
			$period=$items[2];
			$code=$items[3];
			$venue=$items[4];
			//$d=$items[5];
        }
        ?>
      </p>
  <div id="content">
	
		


  <form action="" method="post">
							<input type="text" name="day" readonly="readonly"id="textfield2" value="<?php echo $day;?>"/>
  
							<input type="text" name="period" readonly="readonly" id="textfield4" value="<?php echo $period;?>"/>
						
													<h3>Subject Code & Venue</h3><br>
													                 <select name="code" id="code" value="code" <?php if($d=="de")echo 'disabled="disabled"';?>>
				<?php
				if(!strlen($code)==0)
	{
		echo "<option value='".$code."'>".$code."</option>";
	}?>
				<option value="AMM">AMM</option>
				<option value="BAC">BAC</option>
				<option value="BAD">BAD</option>
				<option value="BOT">BOT</option>
				<option value="BTE">BTE</option>
				<option value="CHE">CHE</option>
				<option value="CSC">CSC</option>
				<option value="CSK">CSK</option>
				<option value="ELE">ELE</option>
				<option value="ENG">ENG</option>
				<option value="ENS">ENS</option>
				<option value="FSC">FSC</option>
                <option value="ICA">ICA</option>
				<option value="MBS">MBS</option>
				<option value="PBS">PBS</option>
				<option value="PHY">PHY</option>
                <option value="PMM">PMM</option>
				<option value="SLS">SLS</option>
				<option value="STA">STA</option>
                <option value="ZOO">ZOO</option>
              </select>
														<select name="venue" value="Venue_No"<?php if($d=="de")echo 'disabled="disabled"';?> >
    <?php
    if(strlen($venue)==0)
	{
		echo "<option value=''>Not select</option>";
	}
	if(!strlen($venue)==0)
	{
		echo "<option value='".$venue."'>".$venue."</option>";
	}
	?>
				<option value="P1">P1</option>
				<option value="P2">P2</option>
				<option value="P3">P3</option>
				<option value="P4">P4</option>
				<option value="M1">M1</option>
				<option value="M2">M2</option>
				<option value="L1">L1</option>
				<option value="L2">L2</option>
				<option value="L3">L3</option>
				<option value="L4">L4</option>
	</select>
													<br>
												 <button type="submit" name="update" value="update" >Update</button>
											

						
							
						</form>
                                        
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
        </div>
		</div>
		</div>
		       <!-- #footer -->		
            <?php include("../admin/footer.php"); ?>       		
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
		<script type="text/javascript"></script>
<script src="../assets/js/script.js"></script>		
        
    </body>
</html>