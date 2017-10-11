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
            <form class="form-horizontal" action="acyearsubjectupdate.php" method="post">
              <input type='hidden' name="hsYearCd" id="hsYearCd" value="<?php echo $_GET['hsYearCd']; ?>"/>
              <!-- .row-fluid -->
              <div class="row-fluid">
                <!-- .span12 -->
                <div class="span12">
                  <div class="box">
                    <header>
                      <div class="icons"><i class="icon-book"></i></div>
                      <h5>Level <?php echo $_GET['hsYearCd']; ?> Subjects</h5>
                     
                    </header>
                    <div class="body" id="sortableTable1">
                          <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
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
                          $sql = "SELECT a.*, COALESCE(b.subjectcd,'') subjectcd"
                               . "  FROM subject a LEFT OUTER join acyearsubject b "
                               . "                         ON b.subjectcd = a.code "
                               . "                        AND b.yearcd='". $_GET['hsYearCd'] . "'";
