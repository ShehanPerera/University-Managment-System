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
        <title>Sub_comb_submitted</title>
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
						Dashboard </a> 
						<font color="#FFFFFF"> | </font>
						<a class="pagepath" href="subject_combination.php">
						Subject Combination</a>
						<font color="#FFFFFF"> | </font>
						<a class="pagepath" href="combination_view.php">
						Submitted List</a>
					</h4>
                  </div>
                </div>
                <!-- /.row-fluid -->
              </div>
              <!-- /.container-fluid -->
			</div>			
			<?php include("leftbar.php"); ?>		
			<!-- /#navbar -->

            <!-- #content -->
            <div id="content">
                <!-- .outer -->
                <div class="container-fluid outer">
                    <div class="row-fluid">
                        <!-- .inner -->
				<div class="span12 inner">
				  <!--BEGIN GUIDELINES FOR CATEGORY     -->
				  <div class="row-fluid">
				  <!-- .span12 -->
					<div class="span12">
						<?php include("../examguide.php"); ?>
					</div>
					<!-- /.span12 -->
				</div>
				<!--END GUIDELINES FOR CATEGORY-->	
			<div class="row-fluid">
                <!-- .span12 -->
                <div class="span12">
                  <div class="row-fluid">
                    <div class="span12">
                      <div class="box">
                        <header>
                          <h5>Submitted list</h5>
                        </header>
                        
                        <div id="collapse4" class="body">
                          <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                            <thead>
                              <tr>
                            <th  style="border-left: 1px solid #C1DAD7"> RegNo </th>
                            <th>IndNo</th>													
                            <th>Name</th>																							
                            
                            <th>Course</th>
                            <th>Level</th>
                            <th>Action</th>														
													</tr>
												</thead>
                        
                        <tbody>
                          <?php
							include('../connect.php');
                     
                           $sql = "SELECT DISTINCT a.* "
                                 . "  FROM student a,  examapp b "
                                 . " WHERE b.RegNo = a.RegNo ";
								 
							
								 
							$result = mysql_query($sql);
							while($row = mysql_fetch_array($result)){
                           
                            echo '<tr class="record">';
                            echo '<td><div align="left">'.$row['RegNo'].'</div></td>';
                            echo '<td><div align="left">'.$row['indNo'].'</div></td>';
                            echo '<td  style="border-left: 1px solid #C1DAD7">'.$row['fname'].' '.$row['lname'].'</td>';                           
                            echo '<td><div align="left">'.$row['course'].'</div></td>';
                            echo '<td><div align="left">'.$row['level'].'</div></td>';						
                            echo '<td><div align="center">
							<a href="combination_form.php?RegNo='.$row['RegNo'].'">Subject</a></div></td>';
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
        <!-- /#wrap -->
        
      <!-- #footer -->		
            <?php include("footer.php"); ?>       		
		<!-- /#footer -->
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