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
    <title>Zoology</title>
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
                <font color="#FFFFFF"> | </font>
       			<a class="pagepath" href="ppaper.php">
                Past Paper </a>
                <a class="pagepath" href="principalsub.php">
                <font color="#FFFFFF"> | </font>
                Principal Subject </a> 
                <a class="pagepath" href="zoo.php">
                <font color="#FFFFFF"> | </font>
                Zoology</a>
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
	    <hr>
	     <div class="tac">
			<a class="quick-btn" href="zoo1g.php">
			<img   src="../assets/img/1g.png" >
			<span>1G</span>
		   </a>
		   <a class="quick-btn" href="zoo2g.php">
			<img   src="../assets/img/2g.png" > 
			<span>2G</span>
		   </a>
		   <a class="quick-btn" href="zoo3g.php">
			<img   src="../assets/img/3g.png" > 
			<span>3G</span>
		   </a>
		   	<a class="quick-btn" href="zoo4m.php">
			<img   src="../assets/img/4m.png" > 
			<span>4M</span>
		   </a>
                             
		 </div><hr>																		
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
    <form name ="frm">
      <input type="hidden" id="hiStId" name="hiStId"/>
    </form>  

    <script src="../assets/lib/jquery.min.js"></script>
    <script src="../assets/js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/lib/jquery.tablesorter.min.js"></script>
    <script type="text/javascript" src="../assets/js/lib/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../assets/js/lib/DT_bootstrap.js"></script>
    <script src="../assets/js/lib/responsive-tables.js"></script>     
    <script type="text/javascript" src="../assets/js/main.js"></script>
		<script src="js/jquery.js"></script>
   
  </body>
</html>