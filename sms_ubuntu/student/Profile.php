
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
        <title>Profile</title>
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
                                    <a class="pagepath" href="Profile.php">
                                    <font color="#FFFFFF"> | </font>
                                    Profile</a>
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
                                            <div class="span12 inner"></div>											
                                        </header>
                                        <div id="actionTable" class="body collapse in">
                                            <table class="table table-bordered table-condensed table-hover table-striped">
                                                <tbody>										
												<?php
												
												$id=$_SESSION['id'];
												
													include('../connect.php');
													//$id=$_SESSION['SESS_MEMBER_ID'];
													$result = mysql_query("SELECT * FROM student WHERE id='$id'");
													while($row = mysql_fetch_array($result)){
													$fname=$row['fname'];
													$lname=$row['lname'];
													$RegNo=$row['RegNo'];
													$indNo=$row['indNo'];
													$phone=$row['phone'];
													$password=$row['password'];
													$gender=$row['gender'];
													$address=$row['address'];
													$email=$row['email'];										
														
															echo ' <tr>
																		<td rowspan="11" width="30%" align="center"><div align="center">Photo</div></td>
																		
																	  </tr>
																	  <tr>
																		<td>Full Name:</td><td>'.$fname.' '.$lname.'</td>
																	  </tr>
																	  <tr>
																		<td>RegNo</td><td><div align="left">'.$RegNo.'</div></td>
																	  </tr>
																	  <tr>
																		<td>indNo</td><td><div align="left">'.$indNo.'</div></td>
																	  </tr>
																	  <tr>
																		<td>gender</td><td><div align="left">'.$row['gender'].'</div></td>
																	  </tr>
																	  <tr>
																		<td>address</td><td><div align="left">'.$row['address'].'</div></td>
																	  </tr>
																	  <tr>
																		<td>email</td><td><div align="left">'.$row['email'].'</div></td>
																	  </tr>
																	  <tr>
																		<td>phone No</td><td><div align="left">'.$row['phone'].'</div></td>
																	  </tr>
																	  <tr>
																		<td>password</td><td><div align="left">***********
																		<a href="#" rel="facebox" data-toggle="modal"></a></div></td>
																	  </tr>															  
																	  <tr>
																		<td>course</td><td><div align="left">'.$row['course'].'</div></td>
																	  </tr>
																	  <tr>
																		<td>level</td><td><div align="left">'.$row['level'].'</div></td>
																	  </tr>';
													}
												?>				  
                                                </tbody>
                                            </table>
											<h5><a href="#editStudent" role="button" class="btn" data-toggle="modal">Edit Profile</a></h5>
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
    <div id="editStudent" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
        <h3 id="helpModalLabel"><i class="icon-external-link"></i>Profile</h3>
      </div>
      <div class="modal-body">
        <div class="container">
          <form name ="frmStudent" role="form">
            <input type="hidden" name="hiId" id="hiId"/>
            <div class="row">
              <div class="span4">
                <div class="form-group">
                  <label>RegNo</label>
                  <input type="text" name="txtRegNo" id="txtRegNo" class="form-control" placeholder="Enter Registration Number" value="<?php echo $RegNo; ?>" readonly/>
                </div>
                <div class="form-group">
                  <label>IndNo</label>
                  <input type="text" name="txtIndNo" id="txtIndNo" placeholder="Enter Registration Number" value="<?php echo $indNo; ?>" readonly/>
                </div>
                <div class="form-group">
                  <label>Prefix</label>
                  <select name="cboPrefix" id="cboPrefix" class="ed" value="<?php echo $Prefix; ?>" />
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                    <option value="Miss">Miss</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" name="txtFName" id="txtFName" value="<?php echo $fname; ?>" />
                </div>
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" name="txtLName" id="txtLName" value="<?php echo $lname; ?>" />
                </div>
                <div class="form-group">
                  <label>Gender</label>
                  <select name="cboGender" id="cboGender" class="ed" value="<?php echo $gender; ?>" />
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>          
                </div>
              </div>
              <div class="span4">
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" name="txtAddress" id="txtAddress" value="<?php echo $address; ?>" />
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" placeholder="mail@domain.com" name="txtEmail" id="txtEmail" value="<?php echo $email; ?>" />		  
				</div>
                <div class="form-group">
                  <label>Phone</label>
                  <input type="text" name="txtPhone" id="txtPhone" value="<?php echo $phone; ?>" />	
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="txtPassword" id="txtPassword" value="<?php echo $password; ?>" readonly/>
				 
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
	
	<!-- #editModal -->
    <div id="changepass" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
        <h3 id="helpModalLabel"><i class="icon-external-link"></i>Change password</h3>
      </div>
      <div class="modal-body">
        <div class="container">
          <form name ="frmChangePass" role="form">
            <input type="hidden" name="hiId" id="hiId"/>
            <div class="row">
             
              <div class="span4">               
                <div class="form-group">
                  <label>Current Password</label>
                  <input type="password" name="txtPassword" id="txtPassword"  />
                </div>	
				<div class="form-group">
                  <label>New Password</label>
                  <input type="password" name="txtPassword1" id="txtPassword" onchange="PasswordChanged(this)"/>
				  <span id="PasswordStrength"></span>
                </div>
				<div class="form-group">
                  <label>Retype Password</label>
                  <input type="password" name="txtPassword2" id="txtPassword"  />
                </div>					
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn" aria-hidden="true" onclick="ChangePass()">Update</button>
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
        <script type="text/javascript" src="../assets/js/main.js"></script>
		<script src="js/jquery.js"></script>
		<script src="../assets/js/script.js"></script>
<script type="text/javascript">
var isok = false;
function CheckPassword(password)
{
	var strength = new Array();
	strength[0] = "Blank";
	strength[1] = "Very Weak";
	strength[2] = "Weak";
	strength[3] = "Medium";
	strength[4] = "Strong";
	strength[5] = "Very Strong";

	var score = 1;

	if (password.length < 1)
		return strength[0];

	if (password.length < 4)
		return strength[1];

	if (password.length >= 8)
		score++;
	if (password.length >= 10)
		score++;
	if (password.match(/\d+/))
		score++;
	if (password.match(/[a-z]/) &&
		password.match(/[A-Z]/))
		score++;
	if (password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,�,(,)]/))
		score++;
	
	if (score >= 3) isok = true;
	return strength[score];
	 
}

function changepass(){
	    frmChangePass.method = "post";
	//if (isok)
	//{
        frmChangePass.action = "changepass.php";
        frmChangePass.submit();
	//}
}
		
function PasswordChanged(field)	{
		var span = document.getElementById("PasswordStrength");
		span.innerHTML = CheckPassword(field.value);
	}
function UpdateStudent(){
        frmStudent.method = "post";
        frmStudent.action = "addstudexec.php";
        frmStudent.submit();
      }
	  
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
   url: "deletecourse.php",
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