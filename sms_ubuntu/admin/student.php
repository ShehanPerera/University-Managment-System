<?php
include('../../Hostel/HMS/lib/session.php');
if((!isset($_SESSION['Loged_User']))||(($_SESSION['res']!="radmin")&&(!in_array("radmin",$_SESSION['position1']))) )
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
    <title>Student</title>
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
        		<a class="pagepath" href="../admin/index.php">
                Dashboard </a> <font color="#FFFFFF"> | </font>
       			<a class="pagepath" href="student.php">
                Student </a> 
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
            <!--Begin Datatables-->
              <div class="row-fluid">
                <div class="span12">
                  <div class="box">
                    <header>
                      <h5>					  
                        <a href="../../UMS/r_admin/CreateAccounts.php" role="button" class="btn" data-toggle="modal">Add New Student</a>                        
                        <a rel="facebox" href="uploadnew.php" id="addq"><button class="btn edit">Upload Spreadsheet</button></a>
					  </h5>
                    </header>
                    
                    <div id="collapse4" class="body">
                      <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                        <thead>
													<tr>
                            <th  style="border-left: 1px solid #C1DAD7"> RegNo </th>
                            <th>IndNo</th>													
                            <th>Name</th>																							
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Course</th>
                            <th>Level</th>
                            <th>Action</th>														
													</tr>
												</thead>
                        
                        <tbody>
                          <?php
													include('../connect.php');
                          $sql = "SELECT *FROM student";
                          
													$result = mysql_query($sql);
													while($row = mysql_fetch_array($result)){
                            $str = $row['RegNo'] . "|" 
                                 . $row['indNo'] . "|" 
                                 . $row['fname'] . "|" 
                                 . $row['lname'] . "|" 
                                 . $row['gender'] . "|" 
                                 . $row['address'] . "|" 
                                 . $row['email'] . "|" 
                                 . $row['phone'] . "|" 
                                 . $row['course'] . "|" 
                                 . $row['level'] . "|" 
                                 . $row['id']; 
                            
                            echo '<tr class="record">';
                            echo '<td><div align="left">'.$row['RegNo'].'</div></td>';
                            echo '<td><div align="left">'.$row['indNo'].'</div></td>';
                            echo '<td  style="border-left: 1px solid #C1DAD7">'.$row['fname'].' '.$row['lname'].'</td>';
                            echo '<td><div align="left">'.$row['gender'].'</div></td>';
                            echo '<td><div align="left">'. $row['address'] .'</div></td>';				
                            echo '<td><div align="left">'.$row['email'].'</div></td>';
                            echo '<td><div align="left">'.$row['phone'].'</div></td>';
                            echo '<td><div align="left">'.$row['course'].'</div></td>';
                            echo '<td><div align="left">'.$row['level'].'</div></td>';						
                            echo '<td width="150px"><div align="center">
							<a href="#editStudent" rel="facebox" data-toggle="modal" onclick=AssignValue("' . $str . '")>Edit</a> | 
							<a href="#" id="'.$row['id'].'" class="delbutton" title="Click To Delete">delete</a></div></td>';
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
    <?php include("footer.php"); ?>       		
	<!-- /#footer -->
    </div>
    <!-- /#wrap -->

		
    <form name ="frm">
      <input type="hidden" id="hiStId" name="hiStId"/>
    </form>  

    <!-- #editModal -->
    <div id="editStudent" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true">
	<?php
			function createRandomPassword() {
				$chars = "ABCDEFGHIJefghijklmnpqrstuvwxKLMNPQRSTUVWXYZ#@&!23456789abcdyz";
				srand((double)microtime()*1000000);
				$i = 0;
				$pass = '' ;
				while ($i <= 7) {

					$num = rand() % 33;

					$tmp = substr($chars, $num, 1);

					$pass = $pass . $tmp;

					$i++;

				}
				return $pass;
			}
			$finalcode=createRandomPassword();
			?>
    
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="helpModalLabel"><i class="icon-external-link"></i>Student</h3>
      </div>
      <div class="modal-body">
        <div class="container">
          <form name ="frmStudent" role="form">
            <input type="hidden" name="hiId" id="hiId"/>
            <div class="row">
              <div class="span4">
                <div class="form-group">
                  <label>RegNo</label>
                  <input type="text" name="txtRegNo" id="txtRegNo" class="form-control" placeholder="Enter Registration Number"/>
                </div>
                <div class="form-group">
                  <label>IndNo</label>
                  <input type="text" name="txtIndNo" id="txtIndNo" placeholder="Enter Index Number"/>
                </div>
                <div class="form-group">
                  <label>Prefix</label>
                  <select name="cboPrefix" id="cboPrefix" class="ed">
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                    <option value="Miss">Miss</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" name="txtFName" id="txtFName"/>
                </div>
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" name="txtLName" id="txtLName"/>
                </div>
                <div class="form-group">
                  <label>Gender</label>
                  <select name="cboGender" id="cboGender" class="ed">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>          
                </div>
              </div>
              <div class="span4">
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" name="txtAddress" id="txtAddress"/>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" placeholder="mail@domain.com" name="txtEmail" id="txtEmail"/>			  
				</div>
                <div class="form-group">
                  <label>Phone</label>
                  <input type="text" name="txtPhone" id="txtPhone"/>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="txtPassword" id="txtPassword" value="<?php echo $finalcode; ?>" readonly/>
                </div>                
                <div class="form-group">
                  <label>Course</label>
                  <select name="cboCourse" id="cboCourse" class="ed">
                  <?php
                    $results = mysql_query("SELECT * FROM course");
                    while($rows = mysql_fetch_array($results)){
                      echo '<option value="' . $rows['description'] . '">'. $rows['description'] .'</option>';
                    }
                  ?>
                  </select>
                </div>
				<div class="form-group">
                  <label>Level</label>
                  <select name="cboLevel" id="cboLevel" class="ed">
                    <option value="1G">1G</option>
                    <option value="1S">1S</option>
                    <option value="2G">2G</option>
                    <option value="2S">2S</option>
                    <option value="3G">3G</option>
                    <option value="3M">3M</option>
                    <option value="4M">4M</option>                   
                  </select>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn" aria-hidden="true" onclick="UpdateStudent()">Update</button>
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
        
        $("#txtRegNo").val(poArray[0]);
        $("#txtIndNo").val(poArray[1]);
        $("#txtFName").val(poArray[2]);
        $("#txtLName").val(poArray[3]);
        $("#cboGender").val(poArray[4]);
        $("#txtAddress").val(poArray[5]);
        $("#txtEMail").val(poArray[6]);
        $("#txtPhone").val(poArray[7]);
        $("#cboCourse").val(poArray[8]);
        $("#cboLevel").val(poArray[9]);
        $("#hiId").val(poArray[10]);
      }
      
      function UpdateStudent(){
        frmStudent.method = "post";
        frmStudent.action = "addstudexec.php";
        frmStudent.submit();
      }
      
      function ViewSubjects(riId){
        frm.method = "post";
        frm.hiStId.value = riId;
        frm.action = "studentsubject.php";
        frm.submit();
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
              url: "deletestud.php",
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