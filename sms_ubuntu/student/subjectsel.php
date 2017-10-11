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
		<script language="javascript">
		</script>
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
              <a class="pagepath" href="subjectsel.php">
              <font color="#FFFFFF"> | </font>
              Subject selection</a>
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
            <!-- Start form ------------------------------->
            <form class="form-horizontal" action="SaveSubject.php" method="post">
              <!-- .row-fluid -->
              <div class="row-fluid">
                <!-- .span12 -->
                <div class="span12">
                  <div class="box">
                    <header>
                      <div class="icons"><i class="icon-book"></i></div>
                      <h5>Level <?php echo $_SESSION['SESS_LEVEL']; ?> Subjects</h5>
                      <div class="toolbar">
                        <a href="#sortableTable1" data-toggle="collapse" class="accordion-toggle minimize-box">
                          <i class="icon-chevron-down"></i>
                        </a>
                      </div>
                    </header>
                    <div class="body" id="sortableTable1">
                      <table class="table table-bordered sortableTable responsive">
                        <thead>
                          <tr>
                            <th style="border-left: 1px solid #C1DAD7"> code </th>
                            <th>title</th>													
                            <th>level</th>																							
                            <th>credit</th>
                            <th>lecHrs</th>
                            <th>prHrs</th>
                            <th>lecturer</th>
                            <th>Select</th>	
                          </tr>
                        </thead>
                        <tbody>
												<?php
													include('../connect.php');
                          $sql = "SELECT a.*, COALESCE(b.subject_id,0) subject_id"
                               . "  FROM subject a LEFT OUTER join studentsubject b "
                               . "                         ON b.subject_id = a.id "
                               . " WHERE a.level='". $_SESSION['SESS_LEVEL'] . "'"
                               . "   AND a.code IN (SELECT x.subjectcd "
                               . "                    FROM acyearsubject x, acyear y "
                               . "                   WHERE x.yearcd  = y.yearcd"
                               . "                     AND y.status  = 'ACTIVE')";
                          
													$result = mysql_query($sql);
                          
													$allcodes='';
													
													while($row = mysql_fetch_array($result)){
                            echo '<tr class="record">';															
                            echo '<td><div align="left">'.$row['code'].'</div></td>';
                            echo '<td><div align="left">'.$row['title'].'</div></td>';															
                            echo '<td><div align="left">'.$row['level'].'</div></td>';
                            echo '<td><div align="left">'.$row['credit'].'</div></td>';				
                            echo '<td><div align="left">'.$row['lecHrs'].'</div></td>';
                            echo '<td><div align="left">'.$row['prHrs'].'</div></td>';															
                            echo '<td><div align="left">'.$row['lecturer'].'</div></td>';	
															
                            if($row['subject_id'] == 0){
                              echo '<td><div align="center"><a rel="facebox" href="#"><input type="checkbox" name=selcod[] value= ' . $row['id'] . ' ></a></div></td>';
                            }
                            else{
                              echo '<td><div align="center"><a rel="facebox" href="#"><input type="checkbox" name=selcod[] value='.$row['id'].' checked ></a></div></td>';
                            }
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
							<!-- .row-fluid -->
						
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
													<h5>Time duration and upload</h5>
												</header>
												<div id="datePickerBlock11" class="body">
                          <div class="control-group">
                            <div class="controls">
                              <a rel="facebox" href="#" id="addq">
                                <button class="btn edit"type= "submit">Submit</button>
                              </a>
                            </div>
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
						<!-- END SUBMIT -->
						</form>
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
    </div>
    <!-- /#content -->
		
    <?php include("footer.php"); ?>       		
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
        $(function() {
            metisTable();
        });
    </script>
    <script type="text/javascript" src="../assets/js/main.js"></script>       
  </body>
</html>