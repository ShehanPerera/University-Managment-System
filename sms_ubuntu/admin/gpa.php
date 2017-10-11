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
        <title>GPA CALCULATOR</title>
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
                      <a class="pagepath" href="../admin/index.php">
                      Dashboard </a>  <font color="#FFFFFF"> | </font>
                      <a class="pagepath" href="gpa.php">
                      GPA Calculator </a> 
                    </h4>
                  </div>
                </div>
                <!-- /.row-fluid -->
              </div>
              <!-- /.container-fluid -->
			</div>	
            <!-- #navbar -->		
			<?php include("leftbar.php"); ?>		
			<!-- /#navbar -->

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
                        <a href="#editStudent" role="button" class="btn" data-toggle="modal">Add New Student</a>                        
                        <a rel="facebox" href="countdown.html" id="addq"><button class="btn edit">Upload Spreadsheet</button></a>
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
							<a href="#" id="'.$row['id'].'" class="delbutton" title="Click To Delete">delete</a>| 
							<a href="#" onclick=ViewSubjects('.$row['id'].') id="'.$row['id'].'"  title="Click To View Subjects">Subjects</a></div></td>';
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
        
      <!-- #footer -->		
            <?php include("footer.php"); ?>       		
		<!-- /#footer -->
		
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
                  <input type="text" name="txtIndNo" id="txtIndNo" placeholder="Enter Registration Number"/>
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
        <script type="text/javascript">
          function UpdateDate(){
            frm.hsMode.value = "DATE-UPDATE";
            frm.method="post";
            frm.action="exam.php";
            frm.submit();
          }
         function ViewSubjects(riId){
        frm.method = "post";
        frm.hiStId.value = riId;
        frm.action = "examform.php";
        frm.submit();
      }
          function SemiChanged(){
            semi = $("#cboSemester").val();
            
            fdt = "#fromdt" + semi;
            tdt = "#todt" + semi;
            
            $("#fromdt").val($(fdt).val());
            $("#todt").val($(tdt).val());
          }
          
          $(function() {
            metisTable();
          });
        </script>
        <script type="text/javascript" src="../assets/js/main.js"></script>       
    </body>
</html>