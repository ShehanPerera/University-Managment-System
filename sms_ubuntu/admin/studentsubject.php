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
    <title>Student Subjects</title>
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
      <?php 
        include("navbar.php");
        $id = $_POST["hiStId"]; 
      ?>
      
      <div class="main-bar">
        <div class="container-fluid">
          <div class="row-fluid">
            <div class="span12">
              <h3><i class="icon-check-empty"></i>Student Subjects</h3>
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
              <?php
              include('../connect.php');

              $sql = "SELECT DISTINCT b.level"
                   . "  FROM subject a, studentsubject b "
                   . " WHERE b.student_id =". $id
                   . "   AND b.subject_id = a.id ";

              $levelresult = mysql_query($sql);
              
              while($level_row = mysql_fetch_array($levelresult)){
              ?>
                <!-- .row-fluid -->
                <div class="row-fluid">
                  <div class="box">
                    <header>
                      <div class="icons"><i class="icon-book"></i></div>
                      <h5>Level <?php echo  $level_row['level']; ?> Subjects</h5>
                      <div class="toolbar">
                        <a href="#sortableTable<?php echo  $level_row['level']; ?>" data-toggle="collapse" class="accordion-toggle minimize-box">
                          <i class="icon-chevron-down"></i>
                        </a>
                      </div>
                    </header>

                    <div class="body collapse out" id="sortableTable<?php echo  $level_row['level']; ?>">
                      <table class="table table-bordered sortableTable responsive">
                        <thead>
                          <tr>
                            <th style="border-left: 1px solid #C1DAD7">Code</th>
                            <th>Title</th>													
                            <th>Level</th>																							
                            <th>Credit</th>
                            <th>LecHrs</th>
                            <th>PrHrs</th>
                            <th>Lecturer</th>													
                            <th>Action</th>	
                          </tr>
                        </thead>

                        <tbody>
                          <?php
                            $sql = "SELECT a.*, COALESCE(b.subject_id,0) subject_id"
                                 . "  FROM subject a, studentsubject b "
                                 . " WHERE b.student_id =". $id
                                 . "   AND b.level      ='" . $level_row['level'] . "'"
                                 . "   AND b.subject_id = a.id ";
                            
                            $result = mysql_query($sql);

                            while($row = mysql_fetch_array($result)){
                              echo '<tr class="record">';
                              echo '<td><div align="left">'.$row['code'].'</div></td>';
                              echo '<td><div align="left">'.$row['title'].'</div></td>';															
                              echo '<td><div align="left">'.$row['level'].'</div></td>';
                              echo '<td><div align="left">'.$row['credit'].'</div></td>';				
                              echo '<td><div align="left">'.$row['lecHrs'].'</div></td>';
                              echo '<td><div align="left">'.$row['prHrs'].'</div></td>';															
                              echo '<td><div align="left">'.$row['lecturer'].'</div></td>';																										
                              echo '<td><div align="center"></td>';
                              echo '</tr>';
                            }
                          ?> 
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- /.span12 -->
              <!-- /.row-fluid -->
              <?php
              }  
              ?>
              
              </div>
						
              <!-- END SUBMIT -->
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

    <script src="../assets/js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/lib/jquery.tablesorter.min.js"></script>
    <script type="text/javascript" src="../assets/js/lib/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../assets/js/lib/DT_bootstrap.js"></script>
    <script src="../assets/js/lib/responsive-tables.js"></script>
    <script type="text/javascript">
        $(function() {
            metisTable();
        });
    </script>
    <script type="text/javascript" src="../assets/js/main.js"></script>       
  </body>
</html>