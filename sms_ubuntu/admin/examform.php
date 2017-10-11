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
              <h3><i class="icon-check-empty"></i> Examination</h3>
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
			<form id="frm" name="frm" class="form-horizontal">		
                <!-- .row-fluid -->
				
               

                <div class="row-fluid">
                  <!-- .span12 -->
                  <div class="span12">
                    <div class="box">
                      <header>
                        <div class="icons"><i class="icon-book"></i></div>
                        <h5>Subjects</h5>
                        <div class="toolbar">
                         <a href="#sortableTable" data-toggle="collapse" class="accordion-toggle minimize-box">
                           
                          </a>
                        </div>
                      </header>
                      
                      <div id="collapse4" class="body">
                          <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                            <thead>
                            <tr>
                              <th  style="border-left: 1px solid #C1DAD7"> code </th>
                              <th>Title</th>													
                              <th>Level</th>																							
                              <th>Credit</th>
                            </tr>
                          </thead>

                          <tbody>
                          <?php
                           include('../connect.php'); 
							$RegNo=$_GET['RegNo']; 							
							$sql = "SELECT DISTINCT a.* "
                                 . "  FROM subject a,  examapp b "
                                 . " WHERE b.subjectcode = a.code "
                                 . "   AND b.regno       = '" . $RegNo . "'";						 
							$result = mysql_query($sql);
							$crsum=0;
							while($row = mysql_fetch_array($result))
							{
                              echo '<tr class="record">';
                              echo '<td><div align="left">'.$row['code'].'</div></td>';
                              echo '<td><div align="left">'.$row['title'].'</div></td>';															
                              echo '<td><div align="left">'.$row['level'].'</div></td>';
                              echo '<td><div align="left">'.$row['credit'].'</div></td>';
							  echo '<a rel="facebox" href="#"></a> ';
                              echo '</div></td></tr>';
							  //$credit=$_GET['credit']; 	
                              $crsum = $crsum + $row['credit'];
                              
                            }							
                            ?> 
							
                          </tbody>
                        </table>						
                      </div><div align='center'><h5>Total credit = <?php echo $crsum; ?> </h5></div>
                    </div>
                  </div>
                  <!-- /.span12 -->
                </div>
                <!-- /.row-fluid -->
                <!-- .row-fluid -->
              
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