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
    <title>Past Paper</title>
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
        		<a class="pagepath" href="../admin/index.php">
                Dashboard </a> <font color="#FFFFFF"> | </font>
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
<?php
/************************ YOUR DATABASE CONNECTION START HERE   ****************************/

/* Database config */

$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'student'; 

/* End config */
$link = mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');

mysql_select_db($db_database,$link);
mysql_query("SET names UTF8");
$databasetable = "student";

/************************ YOUR DATABASE CONNECTION END HERE  ****************************/


set_include_path(get_include_path() . PATH_SEPARATOR . '../Classes/');
include 'PHPExcel/IOFactory.php';

// This is the file path to be uploaded.
$inputFileName = '../spread/excel.xlsx';

try {
	$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
} catch(Exception $e) {
	die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
}


$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
$arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet


for($i=2;$i<=$arrayCount-1;$i++){
$userRegNo = trim($allDataInSheet[$i]["A"]);
$userindNo = trim($allDataInSheet[$i]["B"]);
$userprefix = trim($allDataInSheet[$i]["C"]);
$userfname = trim($allDataInSheet[$i]["D"]);
$userlname = trim($allDataInSheet[$i]["E"]);
$usergender = trim($allDataInSheet[$i]["F"]);
$useraddress = trim($allDataInSheet[$i]["G"]);
$useremail = trim($allDataInSheet[$i]["H"]);
$userphone = trim($allDataInSheet[$i]["I"]);
$userpassword = trim($allDataInSheet[$i]["J"]);
$usercourse = trim($allDataInSheet[$i]["K"]);
$userlevel = trim($allDataInSheet[$i]["L"]);
$useryearcd = trim($allDataInSheet[$i]["M"]);
$usersubject_combination = trim($allDataInSheet[$i]["N"]);
$userspecial = trim($allDataInSheet[$i]["O"]);

$query = "SELECT id FROM student WHERE  RegNo = '".$userRegNo."'and indNo = '".$userindNo."'and prefix = '".$userprefix."'and fname = '".$userfname."'and lname = '".$userlname."'and gender = '".$usergender."'and address = '".$useraddress."'and email = '".$useremail."'and phone = '".$userphone."'and password = '".$userpassword."'and course = '".$usercourse."'and level = '".$userlevel."'and yearcd = '".$useryearcd."'and subject_combination = '".$usersubject_combination."'and special = '".$userspecial."'";
$sql = mysql_query($query);
$recResult = mysql_fetch_array($sql);
$existName = $recResult["id"];
if($existName=="") {
$insertTable= mysql_query("INSERT INTO `student` (`id`, `RegNo`, `indNo`, `prefix`, `fname`, `lname`, `gender`, `address`, `email`, `phone`, `password`, `course`, `level`, `yearcd`, `subject_combination`, `special`) VALUES('', '".$userRegNo."', '".$userindNo."', '".$userprefix."', '".$userfname."', '".$userlname."', '".$usergender."', '".$useraddress."', '".$useremail."', '".$userphone."', '".$userpassword."', '".$usercourse."', '".$userlevel."', '".$useryearcd."', '".$usersubject_combination."', '".$userspecial."');");

$msg = 'Record has been added successfully. <div style="Padding:20px 0 0 0;"><a href="student.php">Go Back</a></div>';
} else {
$msg = 'Record already exist. <div style="Padding:20px 0 0 0;"><a href="uploadnew.php">Go Back</a></div>';
}
}
echo "<div style='font: bold 18px arial,verdana;padding: 45px 0 0 500px;'>".$msg."</div>";
 

?>
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




