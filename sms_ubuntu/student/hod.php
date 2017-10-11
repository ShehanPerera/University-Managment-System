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
    <title>Head of the department</title>
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
        		<a class="pagepath" href="../student/index.php">
                Dashboard </a> 
                <font color="#FFFFFF"> | </font>
       			<a class="pagepath" href="hod.php">
                Head of the department </a>
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
			  <div class="row-fluid">
				<!-- .span12 -->
				<div class="span12">
				  <div class="box">
					<header>
					  <div class="toolbar">
					    <a href="#actionTable" data-toggle="collapse" class="accordion-toggle minimize-box">
						  <i class="icon-chevron-up"></i>
					    </a>
						</div>
					</header>
					<div id="actionTable" class="body collapse in">
					  <table class="table table-bordered table-condensed table-hover table-striped">
                        <thead>
						  <tr>
							<th>Name</th>
							<th>Department</th>
							<th>eMail</th>												
						  </tr>
						</thead>       
						<tbody>
							<?php
								include('../connect.php');
								$result = mysql_query("SELECT * FROM hod");
								while($row = mysql_fetch_array($result)){
								
								$str = $row['fname'] . "|" 
									 . $row['lname'] . "|" 
									 . $row['department'] . "|" 
									 . $row['email'] . "|" 
									 . $row['RegNo'] . "|" 
									 . $row['password'] . "|" 
									 . $row['id']; 
									echo '<tr class="record">';
									echo '<td  style="border-left: 1px solid #C1DAD7">'.$row['fname'].' '.$row['lname'].'</td>';
									echo '<td  style="border-left: 1px solid #C1DAD7">'.$row['department'].' </td>';
									echo '<td  style="border-left: 1px solid #C1DAD7">'.$row['email'].' </td>';
									
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
		

<!-- #editModal -->
  <div id="edithod" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true">
	<?php
	function createRandomID() {
		$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ023456789";
		srand((double)microtime()*1000000);
		$i = 0;
		$RandomID = '' ;
		while ($i <= 7) {

			$num = rand() % 33;

			$tmp = substr($chars, $num, 1);

			$RandomID = $RandomID . $tmp;

			$i++;

		}
		return $RandomID;
	}
	$finalcode='UID-'.createRandomID();

	function createRandomPassword() {
		$chars = "ABCDEFGHIJKXYZabcdefghijklmnopqrstuvwxyz02345LMNOPQRSTUVW6789";
		srand((double)microtime()*1000000);
		$i = 0;
		$pass = '' ;
		while ($i <= 8) {
			$num = rand() % 41;
			$tmp = substr($chars, $num, 1);
			$pass = $pass . $tmp;
			$i++;
		}
		return $pass;
	}
	$randomPassword=createRandomPassword();
	?>
	<div class="modal-header">
	  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
	  <h3 id="helpModalLabel"><i class="icon-external-link"></i>Add New Head</h3>
	</div>
      <div class="modal-body">
        <div class="container">
          <form name="frmSubject" role="form">
            <input type="hidden" name="hiId" id="hiId"/>
            <div class="row">
              <div class="span3">
                <div class="form-group">
                  <label>First Name</label>
                  <input name="txtFName" type="text" class="ed" id="txtFName" />			
				</div>
                <div class="form-group">
                  <label>Last Name</label>
                  <input name="txtLName" type="text" class="ed" id="txtLName" />
				</div>                
                <div class="form-group">
                  <label>Department</label>
				  <input name="cboDepartment" type="text" class="ed" id="cboDepartment" />
                </div>
              </div>
              <div class="span3">
                <div class="form-group">
                  <label>Email</label>                  
				  <input name="txtEMail" type="text" class="ed" id="txtEMail" />
                </div>
                <div class="form-group">
                  <label>User ID</label>
                  <input name="txtRegNo" type="text" class="ed" id="txtRegNo" value="<?php echo $finalcode; ?>" readonly/>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input name="pasPassword" type="password" class="ed" id="pasPassword" value="<?php echo $randomPassword ?>" readonly/>
                </div>               
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn" aria-hidden="true" onclick="Updatehod()">Update</button>
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
        
        $("#txtFName").val(poArray[0]);
        $("#txtLName").val(poArray[1]);
        $("#cboDepartment").val(poArray[2]);
        $("#txtEMail").val(poArray[3]);
        $("#txtRegNo").val(poArray[4]);
		$("#pasPassword").val(poArray[5]);
        $("#hiId").val(poArray[6]);
      }
      
      function Updatehod(){
        frmSubject.method = "post";
        frmSubject.action = "addhodexec.php";
        frmSubject.submit();
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
       if(confirm("Sure you want to delete this update? There is NO undo!"))
            {

       $.ajax({
         type: "GET",
         url: "deletehod.php",
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