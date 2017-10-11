<?php
include('STD_Con.php');
$key = $_GET['key'];
?>
<p class="well"><b>Room No: <?php echo "$key "?></b>
    <?php
    $sql_avail="SELECT `max_Cap`, `cur_Amount` FROM `hostel_room` WHERE `Room_ID`='$key' AND (`max_Cap`> `cur_Amount`);";
    $result_avail = $conn->query($sql_avail);

    if ($result_avail->num_rows > 0)
    {
        ?>
        <a  href="addStdRoom.php?key=<?php echo "$key"; ?>" class="btn btn-success">Add new Student to room</a>
        <?php
    }
    ?>
</p>
<?php

$sql="SELECT * FROM `student_hostel` WHERE `room_no`='$key';";

$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        $regNo = $row['reg_no'];

        $sql_basic="SELECT * FROM student_detail WHERE reg_no='".$regNo."';";
        $result_Main = $conn->query($sql_basic);

        if ($result_Main->num_rows > 0)
        {
            while($row = $result_Main->fetch_assoc())
            {
                $fName = $row['name_initial'];
                $course = $row['course'];
                $fac = $row['faculty'];
                $yer = $row['year_of_study'];
            }
        }

        ?>				<div class="col-md-3">
        <div  class="panel panel-primary" >
            <div class="panel-heading">
                <?php echo $regNo;?>
            </div>
            <div class="panel-body">
                <p align="center">

                    <img src="../../lib/STD_img.php?key=<?php echo $regNo;?>" class="thumbnail" onerror="imgError(this);"  width="150px" height="200px">            <div class="desc">
                    <?php echo "<b>$fName</b>";?><br>
                    <?php echo "<b>Faculty</b> : $fac";?><br>
                    <?php echo "<b>Course </b>: $course";?><br>
                </div>
                <!--                        <div class="btn-group">-->
                <a href="../student/student_View.php?key=<?php echo $regNo;?>" class="btn btn-success btn-sm">View Details</a>
                <a href="../student/student_View.php?key=<?php echo $regNo;?>" class="btn btn-info btn-sm">Swap</a>
                <a href="changeRoom.php?key=<?php echo $regNo;?>" class="btn btn-primary btn-sm">Change</a>
                <!--                        </div>-->
                </p>
            </div>
        </div>
    </div>

        <?php

    }
}
?>
<br>





