<?php
	/*
This script is use to upload any Excel file into database.
Here, you can browse your Excel file and upload it into 
your database.

Download Link: http://www.discussdesk.com/import-excel-file-data-in-mysql-database-using-PHP.htm

Website URL: http://www.discussdesk.com
*/
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Demo - Import Excel file data in mysql database using PHP, Upload Excel file data in database</title>
<meta name="description" content="This tutorial will learn how to import excel sheet data in mysql database using php. Here, first upload an excel sheet into your server and then click to import it into database. All column of excel sheet will store into your corrosponding database table."/>
<meta name="keywords" content="import excel file data in mysql, upload ecxel file in mysql, upload data, code to import excel data in mysql database, php, Mysql, Ajax, Jquery, Javascript, download, upload, upload excel file,mysql"/>
</head>
<body>

<?php
/************************ YOUR DATABASE CONNECTION START HERE   ****************************/

/* Database config */

$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'excel'; 

/* End config */
$link = mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');

mysql_select_db($db_database,$link);
mysql_query("SET names UTF8");
$databasetable = "upload";

/************************ YOUR DATABASE CONNECTION END HERE  ****************************/


set_include_path(get_include_path() . PATH_SEPARATOR . 'Classes/');
include 'PHPExcel/IOFactory.php';

// This is the file path to be uploaded.
$inputFileName = 'result.xlsx';

try {
	$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
} catch(Exception $e) {
	die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
}


$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
$arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet


for($i=2;$i<=$arrayCount;$i++){
$userid = trim($allDataInSheet[$i]["A"]);
$userRegNo = trim($allDataInSheet[$i]["B"]);
$userindNo = trim($allDataInSheet[$i]["C"]);
$userprefix = trim($allDataInSheet[$i]["D"]);
$userfname = trim($allDataInSheet[$i]["E"]);
$userlname = trim($allDataInSheet[$i]["F"]);
$usergender = trim($allDataInSheet[$i]["G"]);
$useraddress = trim($allDataInSheet[$i]["H"]);
$useremail = trim($allDataInSheet[$i]["I"]);
$userphone = trim($allDataInSheet[$i]["J"]);
$userpassword = trim($allDataInSheet[$i]["K"]);
$usercourse = trim($allDataInSheet[$i]["L"]);
$userlevel = trim($allDataInSheet[$i]["M"]);
$useryearcd = trim($allDataInSheet[$i]["N"]);
$usersubject_combination = trim($allDataInSheet[$i]["O"]);
$userspecial = trim($allDataInSheet[$i]["P"]);

$query = "SELECT name FROM upload WHERE id = '".$userid."' and RegNo = '".$userMobile."'";
$sql = mysql_query($query);
$recResult = mysql_fetch_array($sql);
$existName = $recResult["name"];
if($existName=="") {
$insertTable= mysql_query("INSERT INTO `student` (`id`, `RegNo`, `indNo`, `prefix`, `fname`, `lname`, `gender`, `address`, `email`, `phone`, `password`, `course`, `level`, `yearcd`, `subject_combination`, `special`) VALUES('".$userName."', '".$userMobile."');");


$msg = 'Record has been added. <div style="Padding:20px 0 0 0;"><a href="">Go Back to tutorial</a></div>';
} else {
$msg = 'Record already exist. <div style="Padding:20px 0 0 0;"><a href="">Go Back to tutorial</a></div>';
}
}
echo "<div style='font: bold 18px arial,verdana;padding: 45px 0 0 500px;'>".$msg."</div>";
 

?>
<body>
</html>