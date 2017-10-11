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
    <title>Subject</title>
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
                Dashboard </a> <font color="#FFFFFF"> | </font>
                <a class="pagepath" href="subject.php">
                Subject </a> 
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
                          <br/><br/>
                        </header>
                        
                        <div id="collapse4" class="body">
                          <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                            <thead>
                              <tr>
                                <th  style="border-left: 1px solid #C1DAD7"> code </th>
                                <th>title</th>													
                                <th>level</th>																							
                                <th>credit</th>
                                <th>lecHrs</th>
                                <th>prHrs</th>
                                <th>lecturer</th>
                                <th>semi</th>
                               </tr>
                            </thead>
                            <tbody>
                            <?php
                              include('../connect.php');
                               $result = mysql_query("SELECT * FROM subject");
                              while($row = mysql_fetch_array($result)){
                                $str = $row['code'] . "|" 
                                     . $row['title'] . "|" 
                                     . $row['level'] . "|" 
                                     . $row['credit'] . "|" 
                                     . $row['lecHrs'] . "|" 
                                     . $row['prHrs'] . "|" 
                                     . $row['lecturer'] . "|" 
                                     . $row['semi'] . "|" 
                                     . $row['id']; 

                                  echo '<tr class="record">';
                                  echo '<td><div align="left">'.$row['code'].'</div></td>';
                                  echo '<td><div align="left">'.$row['title'].'</div></td>';															
                                  echo '<td><div align="left">'.$row['level'].'</div></td>';
                                  echo '<td><div align="left">'.$row['credit'].'</div></td>';				
                                  echo '<td><div align="left">'.$row['lecHrs'].'</div></td>';
                                  echo '<td><div align="left">'.$row['prHrs'].'</div></td>';															
                                  echo '<td><div align="left">'.$row['lecturer'].'</div></td>';
                                  echo '<td><div align="left">'.$row['semi'].'</div></td>';		
                                  echo '</tr>';
                                }
                              ?> 
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
				  
				  
                                <!-- /.span12 -->
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
		       <!-- #footer -->		
            <?php include("footer.php"); ?>       		
		<!-- /#footer -->
      </div>
      <!-- /#content -->

        <!-- /#wrap -->

    <!-- #editModal -->
    <div id="editSubject" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="helpModalLabel"><i class="icon-external-link"></i>Subject</h3>
      </div>
      <div class="modal-body">
        <div class="container">
          <form name="frmSubject" role="form">
            <input type="hidden" name="hiId" id="hiId"/>
            <div class="row">
              <div class="span3">
                <div class="form-group">
                  <label>Subject Code</label>
                  <input type="text" name="txtCode" id="txtCode" class="form-control"/>
                </div>
                <div class="form-group">
                  <label>Subject Title</label>
                  <input type="text" name="txtTitle" id="txtTitle"/>
                </div>
                <div class="form-group">
                  <label>Level</label>
                  <select name="cboLevel" id="cboLevel" class="ed">
                    <option value="1G">1G</option>
                    <option value="1S">1S</option>
                    <option value="2G">2G</option>
                    <option value="2S">2S</option>
                    <option value="3G">3G</option>
                    <option value="3S">3S</option>
                    <option value="3M">3M</option>
                    <option value="4M">4M</option>
                    <option value="4S">4S</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Credit</label>
                  <input type="text" name="txtCredit" id="txtCredit"/>
                </div>
              </div>
              <div class="span3">
                <div class="form-group">
                  <label>Lec Hrs</label>
                  <input type="text" name="txtLecHrs" id="txtLecHrs"/>
                </div>
                <div class="form-group">
                  <label>PrHrs</label>
                  <input type="text" name="txtPrHrs" id="txtPrHrs"/>
                </div>
                <div class="form-group">
                  <label>Lecturer</label>
                  <input type="text" name="txtLecturer" id="txtLecturer"/>
                </div>
                <div class="form-group">
                  <label>Semi</label>
                  <input type="text" name="txtSemi" id="txtSemi"/>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn" aria-hidden="true" onclick="UpdateSubject()">Update</button>
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
        
        $("#txtCode").val(poArray[0]);
        $("#txtTitle").val(poArray[1]);
        $("#cboLevel").val(poArray[2]);
        $("#txtCredit").val(poArray[3]);
        $("#txtLecHrs").val(poArray[4]);
        $("#txtPrHrs").val(poArray[5]);
        $("#txtLecturer").val(poArray[6]);
        $("#txtSemi").val(poArray[7]);
        $("#hiId").val(poArray[8]);
      }
      
      function UpdateSubject(){
        frmSubject.method = "post";
        frmSubject.action = "addsubexec.php";
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