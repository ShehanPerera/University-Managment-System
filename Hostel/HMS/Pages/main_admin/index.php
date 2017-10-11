<!-- session -->
<?php 
  include("../../lib/session.php");
   if(!isset($ses_conform))
  {
     header('Location: ../../index.php');
}
 ?>
 <!-- Page Start -->
<!--Student New-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Details</title>
	<link rel="stylesheet" href="../../css/bootstrap.cosmo.css">
  <script src="../../js/jquery-3.1.1.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <!-- PHP Codes -->
  <?php 

    include("../../lib/STD_Con.php");
    $sql_noPic = "SELECT COUNT(*) as num FROM `student_pic` as p, `student_detail` as s WHERE p.name IS NULL AND s.reg_no = p.reg_No";
    $result_noPic = $conn->query($sql_noPic);
    $numOfnoPic = 0;
    $onPic_Badge = "";
    if ($result_noPic->num_rows > 0){
      $row = $result_noPic->fetch_assoc();
      $numOfnoPic = $row['num'];
    }
    if ($numOfnoPic != 0) {
      $onPic_Badge = "<span class=\"badge\">$numOfnoPic</span>";
    }
  ?>
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
    padding-top:30px;
    padding-bottom:30px;
    font-size:25px;
    display:block;
    text-align:center;
}
.glyphicon {
    font-size: 50px;
    display:block;
    text-align:center;
}
  </style>

    


</head>

<body >


	<div class="col-lg-12 winHeight">
  <br>
  <br>
       <div class="col-sm-1">
       </div>
      <div class="col-sm-5">

      <table>
       
        
        <tr>
           <td>
              <a href="past_student.php" class="btn btn-block btn-huge btn-primary " > Past Student</a>
            </td>
        </tr> 
        <tr>
           <td>
              <a href="withoutPic.php?" class="btn btn-block btn-huge btn-success " > Student without picture <?php echo "$onPic_Badge"; ?></a>
            </td>
        </tr>
 <tr><td><a href="newReg.php" class="btn btn-block btn-huge btn-primary"> New Registeres to Approval</a></td></tr>
         		
      </table>
      </div>

      <div class="col-sm-5">
        <table>
          <tr><td><a href="HostelCreation.php" class="btn btn-block btn-huge btn-success"> Add New Hostel</a></td></tr>
          <tr><td><a href="editHostel.php" class="btn btn-block btn-huge btn-primary"> Edit Hostel</a></td></tr>
         <tr><td><a href="add_new.php" class="btn btn-block btn-huge btn-success">Allocate approved Student to hostel</a></td></tr>
        </table>
      </div>
       <div class="col-sm-1">
       </div>
       

        </div>        	
</body>
</html>
