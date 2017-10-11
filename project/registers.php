
<?php
// define variables and set to empty values
/* $stregnoErr = $facultyErr = $usertypeErr = $fullnameErr = $addressErr=$dobErr="";
$stregno = $faculty  = $fullname = $address =$dob=$lastschool=$password=$petname=$tpno=$illness=$fartheroccup=$fatherage=$motheroccup=$motherage=$usertype= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["stregno"])) {
    $stregnoErr = "stregno is required";
  } else {
    $stregno = test_input($_POST["stregno"]);
  }

  if (empty($_POST["faculty"])) {
    $facultyErr = "faculty is required";
  } else {
    $faculty = test_input($_POST["faculty"]);
  }

  if (empty($_POST["fullname"])) {
    $fullnameErr = "fullname is required";
  } else {
    $fullname = test_input($_POST["fullname"]);
  }
  
  if (empty($_POST["address"])) {
    $addressErr = "address is required";
  } else {
    $address = test_input($_POST["address"]);
  }
  
  if (empty($_POST["dob"])) {
    $dobErr = "dob is required";
  } else {
    $dob = test_input($_POST["dob"]);
  }
   if (empty($_POST["lastschool"])) {
    $lastschool = "";
  } else {
    $lastschool = test_input($_POST["lastschool"]);
  }
 if (empty($_POST["password"])) {
    $password = "";
  } else {
    $password = test_input($_POST["password"]);
  }
  if (empty($_POST["petname"])) {
    $petname = "";
  } else {
    $petname = test_input($_POST["petname"]);
  }
   if (empty($_POST["tpno"])) {
    $tpno = "";
  } else {
    $tpno = test_input($_POST["tpno"]);
  }
   if (empty($_POST["illness"])) {
    $illness = "";
  } else {
    $illness = test_input($_POST["illness"]);
  }
   if (empty($_POST["fartheroccup"])) {
    $fartheroccup = "";
  } else {
    $fartheroccup = test_input($_POST["fartheroccup"]);
  }
   if (empty($_POST["fatherage"])) {
    $fatherage = "";
  } else {
    $fatherage = test_input($_POST["fatherage"]);
  }
  if (empty($_POST["motheroccup"])) {
    $motheroccup = "";
  } else {
    $motheroccup = test_input($_POST["motheroccup"]);
  }
   if (empty($_POST["motherage"])) {
    $motherage = "";
  } else {
    $motherage = test_input($_POST["motherage"]);
  }
  
  if (empty($_POST["usertype"])) {
    $usertypeErr = "usertype is required";
  } else {
    $usertype = test_input($_POST["usertype"]);
  }
}
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} */
?>

<!doctype html>

<html>
<title>
RECEPTIONIST
</title>
<link href="css/admin.css" type="text/css" rel="stylesheet" />
<body>
	
		<div class="flex-container">
		<header>
		<img src="images/logo.jpg" align ="left" alt="healthcentre" width="150" height="150">
		<h1>Patient and Resource Management System </h1>
		<h2>Health Center University of Jaffna</h2>
		</header>
	<ul>
		<li><a class="active" href="admin.php">Home</a></li>
		
		<li style="float:right"><a href= "logout.php">Logout</a></li>
		
	</ul>


<html>
<head>
	
   <center><h1>RECEPCANIST INSERT NEW  DETAILS</h1></center>
	</head>
	
	<body style="background-color:#bfe8f7;">
	
<tbody>
<BR>
<BR>
<BR>
<fieldset>
<form action="registernewp.php" method="POST"></br>
<tr><td>
<CENTER><U>St</U>regno:&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="text" name="stregno" required/><br></td></tr>


<tr><td><br>
<CENTER><U>F</U>aculty:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="text" name="faculty" required/><br></td></tr>
<tr><td><br>
<CENTER><U>F</U>ullname:&nbsp;&nbsp;&nbsp;</td><td><input type="text" name="fullname"required/><br></td></tr>
<tr><td><br>
<CENTER><U>A</U>ddress:&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="text" name="address"><br></td></tr>
<tr><td><br>
<CENTER><U>D</U>ob:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="text" name="dob"required/><br></td></tr>

<tr><td><br>
<CENTER><U>L</U>astschool:&nbsp;</td><td><input type="text" name="lastschool"><br></CENTER></td></tr>
<tr><td><br>
<CENTER><U>P</U>assword:&nbsp;&nbsp;&nbsp;</td><td><input type="text" name="password"><br></CENTER><br></td></tr>
<tr><td><br>
<CENTER><U>P</U>etname:&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="text" name="petname"><br></CENTER><br></td></tr>
<tr><td><br>
<CENTER><U>T</U>pno:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="int" name="tpno"><br></CENTER><br></td></tr>
<tr><td><br>
<CENTER><U>I</U>llness:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="text" name="illness"></CENTER><br></td></tr>
<tr><td><br>
<CENTER><U>F</U>atheroccup:</td><td><input type="text" name="fartheroccup"><br></CENTER></td></tr>
<tr><td><br>
<CENTER><U>F</U>atherage:&nbsp;&nbsp;</td><td><input type="text" name="fatherage"><br></CENTER></td></tr>
<tr><td><br>
<CENTER><U>M</U>otheroccup:</td><td><input type="text" name="motheroccup"><br></CENTER></td></tr>
<tr><td><br>
<CENTER><U>M</U>otherage:</td><td><input type="text" name="motherage"></CENTER></td></tr>
<tr><td><br>
<CENTER><U>U</U>sertype:</td><td><input type="text" name="usertype" required/></td></tr>
<tr><td><br>
<br>
<CENTER >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="SUBMIT">
<td width="1000px"></td>	
<input type="reset" name="reset" value="reset"></CENTER><br></td></tr>
</form>
</tbody>
</fieldset>
	 
                        
	</body>
	</html>
