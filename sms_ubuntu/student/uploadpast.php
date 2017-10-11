<?php
include 'uploadpast1.php';
?>
<html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Upload Past Paper</title>
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
                Dashboard </a> 
                <font color="#FFFFFF"> | </font>
       			<a class="pagepath" href="ppaper.php">
                Past Paper </a> 
				<a class="pagepath" href="uploadpast.php">
                <font color="#FFFFFF"> | </font>
                Upload Pastpaper</a>
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

		
								<form id="fileuploader"role="form" action="" method="post" enctype="multipart/form-data">
						
													<h3>Pastpaper Name</h3><br>
													<input type="text" name="fname"  required></input><br>
													<h6>(Give the title of the Paper with year)</h6><br>
													<h3>Subject Name & Level</h3><br>
													<select name="sname">
														<option value="phy">phy</option>
														<option value="csc">csc</option>
														<option value="com">com</option>
														<option value="bac">bac</option>
														<option value="pmm">pmm</option>
														<option value="amm">amm</option>
														<option value="mmt">mmt</option>
														<option value="sta">sta</option>
														<option value="eng">eng</option>
														<option value="bot">bot</option>
														<option value="che">che</option>
														<option value="zoo">zoo</option>
														<option value="fsc">fsc</option>
														
													</select>
													<select name="lname">
													<option value=""></option>
													<option value="1g">1G</option>
													<option value="1s">1S</option>
														<option value="2g">2G</option>
														<option value="2s">2S</option>
														<option value="3g">3G</option>
														<option value="3s">3S</option>
														<option value="4g">4M</option>
														<option value="4s">4S</option>
													</select>
													<br>

													<h3>HardCopy</h3><h5>(you can upload max 2MB file.)</h5><br>
													<input type="file"  name="upload"/></input><br>

												 <button type="submit" name="submit">SUBMIT</button>
												<button type="submit" name="reset">RESET</button>

							</div>
							
						</form>
		
		
<hr>																		
		</div>
          <!-- /.row-fluid -->
        </div>
        <!-- /.outer -->
      </div>
      <!-- /#content -->
      <!-- #push do not remove -->
      <div id="push"></div>
      <!-- /#push -->
	 <!-- #footer -->		
    <?php include("footer.php"); ?>       		
	<!-- /#footer -->
    </div>
    <!-- /#wrap -->
    
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
		<script src="../assets/js/script.js"></script>
   
  </body>
</html>