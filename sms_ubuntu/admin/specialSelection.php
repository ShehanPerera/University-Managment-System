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
            <h3><i class="icon-check-empty"></i> Subject Selection</h3>
          </div>
        </div>
        <!-- /.row-fluid -->
      </div>
      <!-- /.container-fluid -->
    </div>			
    <?php 
      include("leftbar.php"); 
    ?>		
    <!-- /#navbar -->
    
    <!-- #content -->
    <div id="content">
      <!-- .outer -->
      <div class="container-fluid outer">
        <div class="row-fluid">
          <!-- .inner -->
          <div class="span12 inner"> 
            <!-- Start form ------------------------------->
            <form class="form-horizontal" action="specialUpdate.php" method="post">
              <input type='hidden' name="hsYearCd" id="hsYearCd" value="<?php echo $_GET['hsYearCd']; ?>"/>
              <!-- .row-fluid -->
              <div class="row-fluid">
                <!-- .span12 -->
                <div class="span12">
                  <div class="box">
                    <header>
                      <div class="icons"><i class="icon-book"></i></div>
                      <h5>Special Selection</h5>
                      <div class="toolbar">
                        <a href="#sortableTable1" data-toggle="collapse" class="accordion-toggle minimize-box">
                         
                        </a>
                      </div>
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
                            <th>Action</th>														
								</tr>
							</thead>
                        
                        
                        <tbody>
												<?php
													include('../connect.php');
                        $sql = "SELECT * FROM student WHERE level='2G'";                         
						$result = mysql_query($sql);
						while($row = mysql_fetch_array($result)){                                                     
                            echo '<tr class="record">';
                            echo '<td><div align="left">'.$row['RegNo'].'</div></td>';
                            echo '<td><div align="left">'.$row['indNo'].'</div></td>';
                            echo '<td  style="border-left: 1px solid #C1DAD7">'.$row['fname'].' '.$row['lname'].'</td>';
                            echo '<td><div align="left">'.$row['gender'].'</div></td>';
                            echo '<td><div align="left">'. $row['address'] .'</div></td>';				
                            echo '<td><div align="left">'.$row['email'].'</div></td>';
                            echo '<td><div align="left">'.$row['phone'].'</div></td>';
                            echo '<td><div align="left">'.$row['course'].'</div></td>';	
                            if($row['special'] == ''){
                              echo '<td><div align="center"><a rel="facebox" href="#"><input type="checkbox" name=selcod[] ></a></div></td>';
                            }
                            else{
                              echo '<td><div align="center"><a rel="facebox" href="#"><input type="checkbox" name=selcod[] value="y" checked ></a></div></td>';
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
													</div>
													<h5></h5>
												</header>
												<div id="datePickerBlock11" class="body">
                          <div class="control-group">
                            <div class="controls">
                              <a rel="facebox" href="#" id="addq">
                                <button class="btn edit"type= "submit">Update</button>
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