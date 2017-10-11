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
    <title>Examination</title>
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
                <a class="pagepath" href="../student/index.php">
                Dashboard </a> 
                <a class="pagepath" href="subject.php">
                <font color="#FFFFFF"> | </font>
                Subject</a>
                <a class="pagepath" href="mysubject.php">
                <font color="#FFFFFF"> | </font>
                My subject</a>
                </h4>
            </div>
          </div>
          <!-- /.row-fluid -->
        </div>
        <!-- /.container-fluid -->
      </div>			

      <?php include("leftbar.php"); ?>		
      <?php include('../connect.php'); ?>		
                      
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
                  <div class="row-fluid">
                    <!-- .span12 -->
                    <div class="span12">
                      <!-- .box -->
                      <div class="box">
                        <header>                          
                          <h5><a rel="facebox" href="subjectsel.php" id="addq"><button class="btn edit">Subject Selection</button></a></h5>
                          <ul class="nav pull-right">
                            <li>
                              <a href="#datePickerBlock" data-toggle="collapse" class="accordion-toggle minimize-box">
                                <i class="icon-chevron-down"></i>
                              </a>
                            </li>
                          </ul>
                        </header>                        
                      </div>
                      <!-- /.box -->
                    </div>
                    <!-- /.span12 -->
                  </div>
                </div>
                <!-- /.span12 -->
              </div>
              <!--END GUIDELINES FOR CATEGORY-->

              <form id="frm" name="frm" class="form-horizontal">		
                <!-- .row-fluid -->
                <?php
                $student_id    = $_SESSION['SESS_MEMBER_ID'];
                $student_level = $_SESSION['SESS_LEVEL'];
                $level_result  = mysql_query("SELECT DISTINCT level FROM studentsubject WHERE student_id = " . $student_id);
                while($level_row = mysql_fetch_array($level_result)){
                  $level = $level_row['level'];
                ?>

                <div class="row-fluid">
                  <!-- .span12 -->
                  <div class="span12">
                    <div class="box">
                      <header>
                        <div class="icons"><i class="icon-book"></i></div>
                        <h5>Level <?php echo $level; ?> Subjects</h5>
                        <div class="toolbar">
                          <a href="#sortableTable<?php echo $level;?>" data-toggle="collapse" class="accordion-toggle minimize-box">
                            <i class="icon-chevron-down"></i>
                          </a>
                        </div>
                      </header>
                      
                      <div class="body collapse out" id="sortableTable<?php echo $level;?>">
                        <table class="table table-bordered sortableTable responsive">
                          <thead>
                            <tr>
                              <th  style="border-left: 1px solid #C1DAD7"> code </th>
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
                            $sql = "SELECT a.* "
                                 . "  FROM subject a, studentsubject b "
                                 . " WHERE b.subject_id = a.id "
                                 . "   AND a.level      = '" . $level . "'";

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
                              echo '<td><div align="center">';
                              
                              
                                echo '<a rel="facebox" href="#"></a> ';
                              
                              
                                echo '<a rel="facebox" href="#">Result</a>';															
                                echo '</div></td></tr>';
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
                <!-- .row-fluid -->
                <?php
                }
                ?>
            <!-- END form ------------------------------->
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
    <!-- /#wrap -->
    <!-- #footer -->		
    <?php include("footer.php"); ?>       		
    <!-- /#footer -->
	</div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="../assets/js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/lib/jquery.tablesorter.min.js"></script>
    <script type="text/javascript" src="../assets/js/lib/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../assets/js/lib/DT_bootstrap.js"></script>
    <script src="../assets/js/lib/responsive-tables.js"></script>
	<script src="../assets/js/script.js"></script>
    <script type="text/javascript">
      function SubmitOnline(){
        frm.method="post";
        frm.action="examupdate.php";
        frm.submit();
      }
      
	  
	  
      $(function() {
        metisTable();
      });
    </script>
    <script type="text/javascript" src="../assets/js/main.js"></script>       
  </body>
</html>