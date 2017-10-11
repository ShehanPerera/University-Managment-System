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
               <a class="pagepath" href="exam.php">
               <font color="#FFFFFF"> | </font>
               Examination</a>
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
                          <div class="icons">
                            <i class="icon-question-sign"></i>
                          </div>
                          <h5>Guidelines</h5>
                          <ul class="nav pull-right">
                            <li>
                              <a href="#datePickerBlock" data-toggle="collapse" class="accordion-toggle minimize-box">
                                <i class="icon-chevron-down"></i>
                              </a>
                            </li>
                          </ul>
                        </header>

                        <div id="datePickerBlock" class="body collapse out">
                          <div class="body">
                            <h5>GUIDELINES FOR CATEGORY</h5>
                            <p>Please fill in the Table given on overleaf:<br/>
                              � Check one of the Category P/1R/2R/3R against each course unit you wish to sit.<br/>
                              � For other course units you do not wish to sit, do not Check.<br/>

                              P  : Proper Sitting (following the course unit in the current academic year).<br/>
                              1R : Repeating the course unit as First attempt (e.g. Medical certificate, etc.)(Senate approval should be annexed).<br/>
                              2R : Repeating the course unit as  Second attempt.<br/>
                              3R : Repeating the course unit as  Third attempt.<br/>
                              <h5>EXAMINATION FEES</h5>
                              <p>	�	Applying under category 2R/3R should annex payment of receipt. (Rs. 50/- for a course unit)</p>
                              <h5>ATTENDANCE</h5>
                              <p>	�	Attendance will be obtained from the respective Heads of Departments by the Deans office.<br/>
                              �	If a student get poor attendance in one or more subject(s), he/she will not be permitted to sit ECE of that particular course unit(s).</p>
                            </p>
                          </div>

                          <div class="control-group">
						  <?php                             
                              $sql = "SELECT * FROM examdate";
                              
                              $result = mysql_query($sql);
                              
                              while($row = mysql_fetch_array($result)){
                                $fdt = $row['fromdt'];
                                $tdt = $row['todt'];                                                         
                              }  
                            ?>
                            <label class="control-label">Start Date</label>
                            <div class="controls">
                              <input type="date" value="<?php echo $fdt; ?>" id="date2" name="date2" readonly/>
                            </div>
                          </div>

                          <div class="control-group">
                            <label class="control-label">End Date</label>
                            <div class="controls">
                              <input type="date" value="<?php echo $tdt; ?>"  id="date2" name="date2" readonly/>
                            </div>
                          </div>
                        </div>
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
                //$student_id    = $_SESSION['SESS_MEMBER_ID'];
                $student_level = "2G";//$_SESSION['SESS_LEVEL'];
                $level_result  = mysql_query("SELECT DISTINCT level FROM studentsubject WHERE student_id = '35'" /* . $student_id */);
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
                              
                              if($student_level == $level){
                                echo '<a rel="facebox" href="#"><input type="checkbox" name="chkExam' . $row['code'] . '" value="EX-PRO|P|' . $row['code'] . '|' . $row['level'] . '"></a>';
								
                              }
                              else{
                                echo '<a rel="facebox" href="#"><input type="radio" name="rdoExam' . $row['code'] . '" value="EX-VAL|1R|' . $row['code'] . '|' . $row['level'] . '"></a> 1R  ';															
                                echo '<a rel="facebox" href="#"><input type="radio" name="rdoExam' . $row['code'] . '" value="EX-VAL|2R|' . $row['code'] . '|' . $row['level'] . '"></a> 2R  '; 
                                echo '<a rel="facebox" href="#"><input type="radio" name="rdoExam' . $row['code'] . '" value="EX-VAL|3R|' . $row['code'] . '|' . $row['level'] . '"></a> 3R ';
                              }
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

                <!-- START SUBMIT -->
                <div class="row-fluid">
                  <!-- .span12 -->
                  <div class="span12">
                    <div class="row-fluid">
                      <!-- .span12 -->
                      <div class="span12">
                        <!-- .box -->
                        <div class="box">
                          <header>
                            <div class="icons">
                              <i class="icon-question-sign"></i>
                            </div>
                            <h5>Submit</h5>
                          </header>
                          <div id="datePickerBlock11" class="body">
                            <?php
                              $is_show = "N";
                              $sql = "SELECT * FROM examdate";
                              
                              $result = mysql_query($sql);
                              
                              while($row = mysql_fetch_array($result)){
                                $fdt = $row['fromdt'];
                                $tdt = $row['todt'];

                                $curdt = new DateTime(); 
                                $fdt = new DateTime($fdt);
                                $tdt = new DateTime($tdt);

                                if ($curdt->getTimestamp() > $fdt->getTimestamp() && $curdt->getTimestamp() < $tdt->getTimestamp()){
                                  $is_show = "Y";
                                }
                                else{
                                  $is_show = "N";
                                }
                              }  
                            ?>
                            
                            <?php if($is_show == "Y"){ ?>
                            <div class="control-group">
                              <div class="controls">
                               
                                <a rel="facebox" onclick="SubmitOnline()" id="addq"><button class="btn edit">Submit Online</button></a>
								<a rel="facebox" onclick="view()" id="addq"><button class="btn edit">View submited form</button></a>
								
                              </div>
                            </div>
                            <?php } ?>
                          </div>
                        </div>
                      </div>
                    <!-- /.box -->
                    </div>
                    <!-- /.span12 -->
                  </div>
                </div>
                <!-- /.span12 -->
              </form>
            </div>
            <!-- END SUBMIT -->
            <!-- END form ------------------------------->
          </div>
          <!-- /.inner -->
        </div>
        <!-- /.row-fluid -->
      </div>
      <!-- /.outer -->
	      <!-- #push do not remove -->
    <div id="push"></div>
    <!-- /#push -->
    <!-- /#wrap -->
    <!-- #footer -->		
    <?php include("footer.php"); ?>   
    </div>
    <!-- /#content -->
    		
    <!-- /#footer -->
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
	   function view(){
        frm.method="post";
        frm.action="examform.php";        
      }
      
      $(function() {
        metisTable();
      });
    </script>
    <script type="text/javascript" src="../assets/js/main.js"></script>       
  </body>
</html>