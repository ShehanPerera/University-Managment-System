<!-- session -->
<?php 
  include("../../lib/session.php");
  if(!isset($ses_conform))
  {
    header('Location: ../../index.php');
  }
 ?>
 <!-- Page Start -->
<!-- Student View -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Details</title>
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
  <script src="../../js/jquery-3.1.1.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <script type="text/javascript">
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#pro_pic')
                        .attr('src', e.target.result)
                        // .width(150)
                        // .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
  </script>
  <style>
    .upper{
      color:#E2F1FD;
      text-align: center;
    }
  .frame{
    width: 100%;
      height:100%;
    border:none;
    border-radius:10px;
  }
  .iFlip{
    transform:scaleX(-1);
    -moz-transform:scaleX(-1);
    -webkit-transform:scaleX(-1);
    -ms-transform:scaleX(-1);
  }
  </style>
<!-- Php for connecting and get methord -->
<?php 
  include('../../lib/STD_Con.php');
  $key = $_GET['key'];

  $sql="SELECT reg_no, full_name FROM student_detail WHERE reg_no='".$key."';";
  $result = $conn->query($sql);

  if ($result->num_rows > 0)
  {
    while($row = $result->fetch_assoc())
    {
      $regNo = $row['reg_no'];
      $fName = $row['full_name'];
    }
  }
?>
<!-- Methords for btns -->
<script>
    
</script>
</head>

<body>
  <div class="col-sm-4"></div>
  <div class="col-sm-4" style="padding-top: 5px">
  <!-- panal start -->
  <div class="panel panel-primary">
    <div class="panel-heading"><h4 align="center">Add Student Picture</h4></div>
    <div class="panel-body">
    <!-- Show Student Data -->
      <form class="form-inline" action="..\..\lib\STD_AddPic.php" method="POST" enctype="multipart/form-data">
      <div align="center">
        <table>
          <tr>
            <th>Reg No.</th>
            </tr>
          <tr>
          <td><input type="text" class="form-control" disabled="disabled" value="<?php echo "$regNo"; ?>"></td>
          </tr>
          <tr>
          <th>Full Name</th>
          </tr>
          <tr>
            <td><input type="text" class="form-control" name="fName" disabled="disabled" value="<?php echo "$fName"; ?>" ></td>
            
          </tr>
        </table><br>
        <input type="hidden" name="reg_no" value="<?php echo "$regNo"; ?>">
        <!-- Show picture and add file field -->
        <img id="pro_pic" src="../../Images/profile-default.jpg" alt="your image" class="img-thumbnail img-responsive" height="300px" width="200px"> <br />
                <input name="pro_Picture" type="file" onchange="readURL(this);" required="required" accept="image/*"/>
                </div>
      <!-- Buttons -->
        <p align="right"><a href="withoutPic.php?" class="btn btn-danger">Cancel</a>
        <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-floppy-save"></i>&nbsp;Save</button>
        </p>
      </form>
    </div>
  </div>
  </div>
  <div class="col-sm-4"></div>
</body>
</html>
