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
        <title>Results</title>
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
    
	<style type="text/css">
      .modal{
		width : 300px;
		height: 100px;
      }
    </style>
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
                      Dashboard </a>  <font color="#FFFFFF"> | </font>
                      <a class="pagepath" href="results.php">
                      Results</a> 
                    </h4>
                  </div>
                </div>
                <!-- /.row-fluid -->
              </div>
              <!-- /.container-fluid -->
			</div>	
			<!-- /.main-bar -->
			
            <!-- #leftBar -->		
			<?php include("leftbar.php"); ?>		
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
						<br/><br/>
					</header>   
					  <div id="collapse4" class="body">
					  	<table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
							<thead>
								<tr>
									<th  style="border-left: 1px solid #C1DAD7"> Index No </th>
									<th>Unit </th>
									<th>Credit</th>													
									<th>Grade</th>																							
									<th>Points</th>
									<th>GPA</th>								
								</tr>
							</thead>                        
							<tbody>
								
								<?php
								
												$id=$_SESSION['id'];
												//echo $id;
											include('../connect.php');
											$result1 = mysql_query("SELECT * FROM student WHERE id='$id'");
													while($row1 = mysql_fetch_array($result1)){
													
													$RegNo=$row1['RegNo'];
													$indNo=$row1['indNo'];
													}
													//echo $indNo;
											//$idxno=$_SESSION['SESS_IN_NO'];
											$result = mysql_query("SELECT * FROM results WHERE inum='$indNo'");
											$count=mysql_num_rows($result);
											if($count>0)
											{
												$gpa=0;	$tot=0; $totgpa=0; $totcredit=0;
											while($row = mysql_fetch_array($result))
												{
												echo '<tr class="record">';
												echo '<td><div align="left">'.$row['inum'].'</div></td>';
												echo '<td><div align="left">'.$row['unit'].'</div></td>';
												echo '<td><div align="right">'.$row['credit'].'</div></td>';
												$totcredit = $totcredit+$row['credit'];
												echo '<td><div align="center">'.$row['grade'].'</div></td>';
												echo '<td><div align="right">'.$row['points'].'</div></td>';
												$gpa = $row['credit']*$row['points'];
												echo '<td><div align="right">'.$gpa.'</div></td>';
												echo '</tr>';
												$tot = $tot+$gpa;
												}
											
											$totgpa = $tot/$totcredit;
											$totgpaf = number_format($totgpa,2); 
											}
											else if(!$result)
											{
												echo "No Data Available";
											}
								?>
								
							</tbody> 
						</table>
						<center>
								<a href="#showGPA" role="button" class="btn" data-toggle="modal">Total GPA</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								<!--a href="#showGraph" role="button" class="btn" data-toggle="modal">Graph</a-->
						</center>
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
	</div>
	
	<!-- #editModal -->
	<div id="showGPA" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 align="center">Total GPA</h3>
		</div>
		<div class="modal-body">
			<?php echo '<font size="4px"><center>Your Total GPA is: <font color="blue">'.$totgpaf.'</font></center></font>'; ?>
					<!--?php
							include('../connect.php');
							$idxno=$_SESSION['SESS_IN_NO'];
							echo '<img src="../assets/img/graph'.$idxno.'.png"></img>';
					?-->
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		</div>
    </div>
	
    <!-- /#editModal -->
	
	<script src="../assets/lib/jquery.min.js"></script>
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

          if(confirm("Sure you want to delete this update? There is NO undo!")){
            $.ajax({
              type: "GET",
              url: "deleteresl.php",
              data: info,
              success: function(){

              }
            });

            $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast").animate({ opacity: "hide" }, "slow");
          }

          return false;

        });

      });
    </script>   
  </body>
</html>