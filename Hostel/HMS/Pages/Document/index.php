<!-- session -->
<?php
  include("../../lib/session.php");
  if(!isset($ses_conform))
  {
    header('Location: ../../index.php');
  }
 ?>
 <!-- Page Start -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Details</title>
  <link rel="stylesheet" href="../../css/bootstrap.cosmo.css">
  <script src="../../js/jquery-3.1.1.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <style>

  td {
    height: 60px;
    width:1000px;
}
  .container{

  }
  .winHeight{
    height: 95vh;
  }
  .frame{
    border-color:#3329E7;
    border-radius:25px;
    border-style:solid;
  }
  th, td{
    padding:3px;
  }
  .formnew{
    height:400px;
    overflow:auto;
  }
  .btn-huge{
    padding-top:40px;
    padding-bottom:40px;
    font-size:30px;
    display:block;
    text-align:center;
}
/*For image button*/
.thumbnail {
  position: relative;
  width: 300;
}

.image {
  display: block;
  width: 300;
  height: 200;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #06367D;
}

.thumbnail:hover .overlay {
  opacity: 0.8;
}

.text {
  text-align: center;
  color: white;
  font-size: 25px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
</style>


</head>

<body>
  <div class="col-lg-12 winHeight">
       
      <div class="col-sm-4">
      <table>
        <tr>
        <td><a href="basicStudent.php">
        <div class="thumbnail">
        <img class="img-responsive" src="Images/Basic_StudentDetails.jpg" width="300" height="200">
        <div class="overlay">
        <div class="text">
        Basic Student Details
        </div>
        </div>
        </div>
        </a>
        </td>
        </tr>
        <tr>
        <td><a href="Download/Student Details.csv">
        <div class="thumbnail">
        <img class="img-responsive" src="Images/newStudent.jpg" width="300" height="200">
        <div class="overlay">
        <div class="text">
        Download "add student" CSV template
        </div>
        </div>
        </div>
        </a>
        </td>
        </tr>
      </table>
      </div>

      <div class="col-sm-4">
        <table>
        <tr>
        <td><a href="anualPayment.php">
        <div class="thumbnail">
        <img class="img-responsive" src="Images/anualpay.jpg" width="300" height="200">
        <div class="overlay">
        <div class="text">
        Anual Payment Report
        </div>
        </div>
        </div>
        </a>
        </td>
        </tr>
        <!-- <tr>
        <td><a href="">
        <div class="thumbnail">
        <img class="img-responsive" src="Images/Basic_StudentDetails.jpg" width="90%" height="236">
        <div class="overlay">
        <div class="text">
        Basic Student Details
        </div>
        </div>
        </div>
        </a>
        </td>
        </tr> -->
      </table>
      </div>
      <div class="col-sm-4">
        <table>
        <tr>
        <td><a href="Download/PAYING IN VOUCHER.doc">
        <div class="thumbnail">
        <img class="img-responsive" src="Images/Voucher.jpg" width="300" height="200px">
        <div class="overlay">
        <div class="text">
        Download Voucher Template
        </div>
        </div>
        </div>
        </a>
        </td>
        </tr>
        <!-- <tr>
        <td><a href="">
        <div class="thumbnail">
        <img class="img-responsive" src="Images/Basic_StudentDetails.jpg" width="90%" height="236">
        <div class="overlay">
        <div class="text">
        Basic Student Details
        </div>
        </div>
        </div>
        </a>
        </td>
        </tr> -->
      </table>
      </div>

        </div>
</body>
</html>
