<?php
session_start();
error_reporting(1);

  extract($_SESSION);
 if((!isset($_SESSION['Loged_User']))||(($_SESSION['res']!="radmin")&&(!in_array("radmin",$_SESSION['position1']))))
        {
          header('location:../../UMS/UMSlogin.php');
        } 
		?>
<?php
session_start();
require('../config.php');

 extract($_POST);


  if(isset($_SESSION['enterkey']))
  {
	  unset($_SESSION['enterkey']);
  }

 if(isset($_POST["passin"]))
 {
	 $pass= $_POST['pass'];
	 //$pass=md5($pass);
	 $sql = "select * from admin where code='$pass'";
	 $sqli = mysqli_query($con,$sql);
	 $row = mysqli_num_rows($sqli);
	 if(!$row ==null)
	 {
		 $_SESSION['enterkey']=true;
		 header("Location:index.php?option=add_result");

	 }
   else
   {
     $Error = "";
   }
 }

 ?>
<?php
$que1=mysqli_query($con,"select * from results");
  $row1= mysqli_num_rows($que1);
	if(!$row1)
	{
echo "<h3><font color='red'>No any Result Found</font></h3>";
echo "<h3><a href='index.php?option=add_result'>Click here to add New Result</a></h3>";
	}
 	else{
?>
<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_result.php?id='+id;
     }
}
</script>
<style>
/* The Modal (background) */
.button {
  font-size: 1em;
  padding: 10px;
  color: #fff;
  border: 2px solid orange;
  border-radius: 20px/50px;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
}
.button:hover {
  background: orange;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {

  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: orange;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

</style>
</head>
<body>


<!-- Trigger/Open The Modal -->
<div id="popup1" class="overlay">
	<div class="popup">
    <div class="modal-dialog" role="document">

        <div class="modal-content">

          <div class="modal-header" style=" background-color:#FF0000;   color:#fff;">
            <a class="close" href="#">×</a><br/>

    <h4 class="modal-title" id="exampleModalLabel"><span class="glyphicon glyphicon-log-in"style=" background-color:#FF0000; margin-left:180px; color:#fff;">&nbsp;Enrolment key</h4>

		<div class="content">
      <form action="" method="post">
      <div class="form-group">
    	<div class="input-group input-group-sm">

    		<span class="input-group-addon">
    		 <span class="glyphicon glyphicon-lock"></span></span>

    	 <input type="password" class="form-control" name="pass"  id="pass" placeholder="password"/>

    		</div>
    	</div>
      <input type="submit" class="btn btn-success" id="save1"  value="submit" name="passin" />
    </form>
    </div>
    </div>
    </div>

		</div>
	</div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>




<table class="table table-bordered">
<tr class="active" height="30px">
	<td colspan="16">
  <a href='#popup1'>
  <span class="glyphicon glyphicon-lock"></span>Add New Result</a></td>
</tr>
<tr class="info" height="30">
	<tr>
 		<th>ID</th>
 		<th>Index_no</th>
  		<th>Course_Code</th>
  		<th>Credit_Value</th>
  		<th>Semester</th>
		<th>attempt</th>
		<th>level</th>
		<th>Marks</th>
		<th>Result</th>
		<th>gpv</th>
		<th>credit*gpv</th>
		<th>Delete</th>
		<th>Update</th>
	</tr>
</tr>

<?php
error_reporting(1);
         $rec_limit =10;

         /* Get total number of records */

		 $sql = "SELECT count(id) FROM results ";
         $retval = mysqli_query($con,$sql);

         if(! $retval )
		  {
            die('Could not get data: ' . mysqli_error());
         }
         $row = mysqli_fetch_array($retval, MYSQL_NUM );
         $rec_count = $row[0];

         if( isset($_GET{'pagi'} ) ) {
            $pagi = $_GET{'pagi'} + 1;
            $offset = $rec_limit * $pagi ;
         }else {
            $pagi = 0;
            $offset = 0;
         }


         $left_rec = $rec_count - ($pagi * $rec_limit);
         $sql = "SELECT * ". "FROM results ".
            "LIMIT $offset, $rec_limit";

         $retval = mysqli_query($con, $sql);

         if(! $retval )
		  {
            die('Could not get data: ' . mysqli_error());
         }

     $inc=1;
	 $i=1;
	while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
	{
		$id=$row['Course_Code'];
		echo "<tr class='active'>";

		echo "<th>".$i."</th>";
		//echo "<th>".$row['name']."</th>";
		//$co=mysqli_query($con,"select * from results where Course_Code='".$row['Course_Code']."'");
		///$r=mysqli_fetch_array($co);
		//echo "<td>".$row['No']."</td>";
		echo "<td>".$row['Index_no']."</td>";
		echo "<td>".$row['Course_Code']."</td>";
		echo "<td>".$row['credit']."</td>";
		echo "<td>".$row['semester']."</td>";
		echo "<td>".$row['attempt']."</td>";
		echo "<td>".$row['Level']."</td>";
		echo "<td>".$row['marks']."</td>";
		echo "<td>".$row['Result']."</td>";
		echo "<td>".$row['gpv']."</td>";
		echo "<td>".$row['credit*gpv']."</td>";

echo "<td class='text-center'><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-remove' style=color:red;></span></a></td>";

echo "<th><a href='index.php?option=update_result&id=$id'><span class='glyphicon glyphicon-pencil'></span></a>
</th>";
echo "<tr>";
$i++;
}
//for shoing Pagination
echo "<tr class='info'><td colspan='16'>";
if( $pagi > 0 )
 {
         $last = $pagi - 2;
      echo "<a href = \"index.php?option=result&pagi=$last\">Previous</a> |";
        echo "<a href = \"index.php?option=result&pagi=$pagi\">Next</a>";

		 }
		 else if( $pagi == 0 )
		  {
     echo "<a href = \"index.php?option=result&pagi=$pagi\">Next</a>";
         }
		 else if( $left_rec < $rec_limit ) {
            $last = $pagi - 2;
            echo "<a href = \"index.php?option=result&pagi&pagi=$last\">Previous</a>";
         }
        echo "</td></tr>";
		?>


</table>

<?php }?>