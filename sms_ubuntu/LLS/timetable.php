<?php
include('../../Hostel/HMS/lib/session.php');
if((!isset($_SESSION['Loged_User']))||(($_SESSION['res']!="radmin")&&(!in_array("radmin",$_SESSION['position1']))&&(!in_array("student",$_SESSION['position1']))&&(!in_array("head",$_SESSION['position1']))) )
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
    <body>
	<script language="JavaScript">
var clockID = 0;
function UpdateClock() {
   if(clockID) {
      clearTimeout(clockID);
      clockID  = 0;
   }
   var tDate = new Date();

   document.theClock.theTime.value = "" 
                                   + tDate.getHours() + ":" 
                                   + tDate.getMinutes() + ":" 
                                   + tDate.getSeconds();
   clockID = setTimeout("UpdateClock()", 1000);
}
function StartClock() {
   clockID = setTimeout("UpdateClock()", 500);
}
function KillClock() {
   if(clockID) {
      clearTimeout(clockID);
      clockID  = 0;
   }
}
</script>
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
        <!-- #wrap -->
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
							  <a class="pagepath" href="../admin/index.php">
                                Dashboard / </a> 
                                <a class="pagepath" href="Timetable.php?lls=timetable1">
                                Timetable </a> 
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
			?>		
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
                                        <div id="collapse4" class="body">
										<a href="Timetable.php?lls=timetable1">Level 1G</a>
										<a href="Timetable.php?lls=timetable2">Level 2G</a>
										<a href="Timetable.php?lls=timetable3">Level 3G</a>
                                            <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped"> 
											<thead>
													<tr>
													<th  style="border-left: 1px solid #C1DAD7">  </th>																									
													<th>Monday</th>																							
													<th>Tuesday</th>
													<th>Wednesday</th>
													<th>Thursday</th>
													<th>Friday</th>
																										
													</tr>
												</thead>											
                                                <tbody>
												<?php		
		
for($i=1;$i<=8;$i++)
{
echo '<tr>';
echo '<th width="5"><div align="center">'.$i.'</font></div></th>';
for($j=0;$j<5;$j++)
{
	$a[]="Monday";
	$a[]="Tuesday";
	$a[]="Wednesday";
	$a[]="Thursday";
	$a[]="Friday";
	
	$result=mysql_query("SELECT * FROM $level WHERE Day='$a[$j]' AND Period='$i'");
	$n=mysql_num_rows($result);
	$s="";
	
	while($row=mysql_fetch_array($result))
	{		
		if(!isset($_SESSION['SESS_ADMIN_NAME']))
		{
			if($s=="")
			$s='<td><div align="left">'.$row['Session_Code']."&nbsp;&nbsp;".$row['Venue_No']."<br>";
			else
			$s=$s.$row['Session_Code']."&nbsp;&nbsp;".$row['Venue_No']."<br>";		
		}
		else
		{
			$check=$row['Session_Code'];
			$result1=mysql_query("SELECT * FROM session WHERE Session_Code='$check'");
			$row1=mysql_fetch_array($result1);
			echo isset($row1['Session_Code']);
			if(isset($row1['Session_Code'])==1)
			{
				if($s=="")
				$s='<td><div align="left"><a href="map.php?lls='.$row['Session_Code'].",".$level.'">'.$row['Session_Code'].'</a>&nbsp;&nbsp;<a>'.$row['Venue_No'].'</a>'.
				'<a href="newlec.php?lls='.$level.",".$a[$j].",".$i.",".$row['Session_Code'].",".$row['Venue_No'].'"><img name="" src=" edit.png" width="15" height="15" align="right" alt="" /></a>'.
				'<a href="newlec.php?lls='.$level.",".$a[$j].",".$i.",".$row['Session_Code'].",".$row['Venue_No'].","."de".'"></a>'."<br>";
				else
				$s=$s.'<a href="map.php?lls='.$row['Session_Code'].",".$level.'">'.$row['Session_Code'].'</a>&nbsp;&nbsp;<a>'.$row['Venue_No'].'</a>'.
				'<a href="newlec.php?lls='.$level.",".$a[$j].",".$i.",".$row['Session_Code'].",".$row['Venue_No'].'"><img name="" src=" edit.png" width="15" height="15" align="right" alt="" /></a>'.
				'<a href="newlec.php?lls='.$level.",".$a[$j].",".$i.",".$row['Session_Code'].",".$row['Venue_No'].","."de".'"></a>'."<br>";
			}
			else
			{
				if($s=="")
				$s='<td><div align="left">'.$row['Session_Code'].'&nbsp;&nbsp;<a>'.$row['Venue_No'].'</a>'.
				'<a href="newlec.php?lls='.$level.",".$a[$j].",".$i.",".$row['Session_Code'].",".$row['Venue_No'].'"><img name="" src=" edit.png" width="15" height="15" align="right" alt="" /></a>'.
				'<a href="newlec.php?lls='.$level.",".$a[$j].",".$i.",".$row['Session_Code'].",".$row['Venue_No'].","."de".'"></a>'."<br>";
				else
				$s=$s.$row['Session_Code'].'&nbsp;&nbsp;<a>'.$row['Venue_No'].'</a>'.
				'<a href="newlec.php?lls='.$level.",".$a[$j].",".$i.",".$row['Session_Code'].",".$row['Venue_No'].'"><img name="" src=" edit.png" width="15" height="15" align="right" alt="" /></a>'.
				'<a href="newlec.php?lls='.$level.",".$a[$j].",".$i.",".$row['Session_Code'].",".$row['Venue_No'].","."de".'"></a>'."<br>";
			}
		}
	}
	if(!user_loggedin())
		echo $s.'</td>';
	else
		echo $s.'</div><a href="newlec.php?lls='.$level.",".$a[$j].",".$i.",".$row['Session_Code'].",".$row['Venue_No'].'"><img name="" src=" insert.gif" width="10" height="8" align="right" alt="" /></a></td>';
}
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