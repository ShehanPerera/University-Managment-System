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
    <title>Academic Year</title>
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
      .form_fields{
        margin-left: 50px;
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
               <a class="pagepath" href="acyear.php">
               <font color="#FFFFFF"> | </font>
               Academic year</a>
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
                  <div class="row-fluid">
                    <div class="span12">
                      <div class="box">
                        <header>
                          <h5>
                                Academic Year                    
                          </h5>
                        </header>
                        
                        <div id="collapse4" class="body">
                          <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                            <thead>
                              <tr>
                                <th>Year Code</th>													
                                <th>From Date</th>																							
                                <th>To Date</th>
                                <th>Status</th>
                              </tr>
                            </thead>

                            <tbody>
                            <?php
                              include('../connect.php');
                              $result = mysql_query("SELECT * FROM acyear");
                              while($row = mysql_fetch_array($result)){
                                $str = $row['yearcd'] . "|" 
                                     . $row['fromdt'] . "|" 
                                     . $row['todt'] . "|" 
                                     . $row['status'] . "|" 
                                     . $row['id']; 

                                echo '<tr class="record">';
                                echo '<td><div align="left">'.$row['yearcd'].'</div></td>';
                                echo '<td><div align="left">'.$row['fromdt'].'</div></td>';															
                                echo '<td><div align="left">'.$row['todt'].'</div></td>';
                                echo '<td><div align="left">'.$row['status'].'</div></td>';				
                                echo '</tr>';
                              }
                              ?> 
                            </tbody>
                          </table>
                        </div>
                      </div>
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
    <div id="editYear" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="helpModalLabel"><i class="icon-external-link"></i>Academic Year</h3>
      </div>
      
      <div class="modal-body">
        <form name="frmYear" id="" role="form">
          <div class="container">
            <input type="hidden" name="hiId" id="hiId"/>
            <input type="hidden" name="hsYearCd" id="hsYearCd"/>
            <div class="form_fields">
              <div class="form-group">
                <label>Year Code</label>
                <input type="text" name="txtYearCd" id="txtYearCd" class="form-control"/>
              </div>
              <div class="form-group">
                <label>From Date</label>
                <input type="date" name="txtFromDt" id="txtFromDt"/>
              </div>
              <div class="form-group">
                <label>To Date</label>
                <input type="date" name="txtToDt" id="txtToDt"/>
              </div>
              <div class="form-group">
                <label>Status</label>
                <select name="cboStatus" id="cboStatus" class="ed">
                  <option value="ACTIVE">Active</option>
                  <option value="INACTIVE">Inactive</option>
                </select>
              </div>
            </div>
          </div>  
        </div>
          
      </form>

      <div class="modal-footer">
        <button class="btn" aria-hidden="true" onclick="UpdateYear()">Update</button>
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
        
        $("#txtYearCd").val(poArray[0]);
        $("#txtFromDt").val(poArray[1]);
        $("#txtToDt").val(poArray[2]);
        $("#cboStatus").val(poArray[3]);
        $("#hiId").val(poArray[4]);
      }
      
      function UpdateYear(){
        frmYear.method = "post";
        frmYear.action = "acyearupdate.php";
        frmYear.submit();
      }

      function Subjects(rsYearCd){
        frmYear.method = "post";
        frmYear.action = "acyearsubject.php?hsYearCd="+rsYearCd;
        frmYear.submit();
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
          url: "deletesub.php",
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