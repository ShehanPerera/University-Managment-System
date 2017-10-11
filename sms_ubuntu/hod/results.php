<?php
include('../../Hostel/HMS/lib/session.php');
if((!isset($_SESSION['Loged_User']))||(($_SESSION['res']!="head")&&(!in_array("head",$_SESSION['position1']))) )
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
        width : 800px;
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
                      <a class="pagepath" href="../hod/index.php">
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
						<h5>					  
						<a href="#editResults" role="button" class="btn" data-toggle="modal">Add New Record</a> 
						<!--a rel="facebox" href="countdown.html" id="addq"><button class="btn edit">Upload Spreadsheet</button></a-->
						</h5>
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
									<th>Action</th>														
								</tr>
							</thead>                        
							<tbody>
								<?php
									include('../connect.php');
									$sql1 = "SELECT *FROM results";
									$result1 = mysql_query($sql1);
									while($row = mysql_fetch_array($result1))
									{
										$str = $row['inum'] . "|" 
										 . $row['unit'] . "|" 
										 . $row['credit'] . "|" 
										 . $row['grade'] . "|" 
										 . $row['points'] . "|" 
										 . $row['id']; 
										 
										echo '<tr class="record">';
										echo '<td><div align="left">'.$row['inum'].'</div></td>';
										echo '<td><div align="left">'.$row['unit'].'</div></td>';
										echo '<td><div align="right">'.$row['credit'].'</div></td>';
										echo '<td><div align="center">'.$row['grade'].'</div></td>';
										echo '<td><div align="right">'.$row['points'].'</div></td>';
										echo '<td><div align="right">'.($row['credit']*$row['points']).'</div></td>';
										echo '<td width="150px"><div align="center">
										<a href="#editResults" rel="facebox" data-toggle="modal" onclick=AssignValue("' . $str . '")>Edit</a> | 
										<a href="#" id="'.$row['id'].'" class="delbutton" title="Click To Delete">delete</a></div></td>';
										echo '</tr>';
									}
								?> 
							</tbody> 
						</table>
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
        </div>
      <!-- #push do not remove -->
      <div id="push"></div>
      <!-- /#push -->
	<!-- #footer -->		
    <?php include("footer.php"); ?>       		
	<!-- /#footer -->
    </div>
    <!-- /#wrap -->
	
	<!-- #editModal -->
    <div id="editResults" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true">
		<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 id="helpModalLabel"><i class="icon-external-link"></i>Results</h4>
		</div>
		  <div class="modal-body">
			<div class="container">
			  <form name ="frmResults" role="form">
				<input type="hidden" name="hiId" id="hiId"/>
				<div class="row">
				  <div class="span4">
					<div class="form-group">
					  <label>Index No</label>
					  <input type="text" name="txtIndNo" id="txtIndNo" class="form-control" placeholder="Enter Index Number"/>
					</div>
					<div class="form-group">
					  <label>Unit</label>
					  <input type="text" name="txtUnit" id="txtUnit" placeholder="Enter Unit"/>
					</div>
                <!--div class="form-group">
                  <label>Credit</label>
                  <select name="cboCredit" id="cboCredit" class="ed">
                    <option value="credit">Select credit</option>
					<option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
					<option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div-->
                <div class="form-group">
                  <label>Grade</label>
                  <select name="cboGrade" id="cboGrade" class="ed">
                    <option value="grade">Select grade</option>
					<option value="A+">A+</option>
                    <option value="A">A</option>
					<option value="A-">A-</option>
                    <option value="B+">B+</option>
					<option value="B">B</option>
                    <option value="B-">B-</option>
					<option value="C+">C+</option>
					<option value="C">C</option>
                    <option value="C-">C-</option>
					<option value="D+">D+</option>
					<option value="D">D</option>
                    <option value="E">E</option>
                  </select>          
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn" aria-hidden="true" onclick="UpdateResults()">Update</button>
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
      function AssignValue(rsStr){
        poArray = rsStr.split("|");
        
        $("#txtIndNo").val(poArray[0]);
        $("#txtUnit").val(poArray[1]);
        $("#cboCredit").val(poArray[2]);
        $("#cboGrade").val(poArray[3]);
        $("#cboPoints").val(poArray[4]);
		$("#hiId").val(poArray[5]);
      }
      
      function UpdateResults(){
        frmResults.method = "post";
        frmResults.action = "addresultexec.php";
        frmResults.submit();
      }
      
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