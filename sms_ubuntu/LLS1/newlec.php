
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
                                <h3><i class="icon-check-empty"></i>
								Timetable Update</h3>
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
    <div id="inner">
      <div class="left float-l">
     <p align="right"> <input type="text"  name="theDate" readonly="readonly" size="7" value="<?php date_default_timezone_set('Asia/Colombo'); echo date('m/d/Y'); ?>" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
	 <p><?php
        if (isset($_GET['lls1'])) {
            $lls1 = $_GET['lls1'];
            echo '<span style="color: yellow">'.$lls1.'</span>';
        }
        ?>
        
		 <div class="form-group">
                  <label>Day</label>
                 <input type="text" name="day" readonly="readonly"id="textfield2" value="<?php echo $day;?>"/>
         </div>
		 <div class="form-group">
                  <label>Period</label>
                 <input type="text" name="period" readonly="readonly" id="textfield4" value="<?php echo $period;?>"/>
         </div>
		 <div class="form-group">
                  <label>Session Code</label>
                 <select name="code" id="code" <?php if($d=="de")echo 'disabled="disabled"';?>>
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
				<option value="CSC301GC2">CSC301GC2</option>
              </select>
         </div>
				
		<table width="265" border="0">
         
         
          <tr>
            <td height="31">Venue No</td>
            <!--td height="31" colspan="2"><input type="venue" name="venue" placeholder="Type name" <?php if($d=="de")echo 'readonly="readonly"';?> id="textfield6" value="<?php echo $venue;?>"/></td>
    <--><td>
	<select name="venue" <?php if($d=="de")echo 'disabled="disabled"';?> >
    <?php
    if(strlen($venue)==0)
	{
		echo "<option value=''>Not select</option>";
	}
	if(!strlen($venue)==0)
	{
		echo "<option value='".$venue."'>".$venue."</option>";
	}
	$result=mysql_query("SELECT * FROM venue ");
	while ($row=mysql_fetch_array($result))
	{
		if($row['Venue_No']!=$venue)
		echo "<option value='".$row['Venue_No']."'>".$row['Venue_No']."</option>";
	}
	?>
	</select> 
		  </tr>
          <tr>
            <td height="31"><div align="center">
			 <input type="submit" name="Insert" id="button1" value="Insert" />
            </div></td>
            <td width="60" height="31"><div align="right">
              <input type="submit" name="Update" id="button2" value="Update" />
            </div></td>
            <td width="85"><div align="right">
              <input type="submit" name="Delete" id="button3" value="Delete" />
            </div></td>
          </tr>
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
        
    </body>
</html>