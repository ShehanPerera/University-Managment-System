  <!-- #left -->
  <div id="left">
    <!-- .user-media -->
    <div class="media user-media hidden-phone">
      <a href="../admin/Profile.php" class="user-link">
        <img src="../assets/img/male.gif" alt="User" class="media-object img-polaroid user-img">
        </a>
      <div class="media-body hidden-tablet">
        <h5 class="media-heading" href="../admin/Profile.php"><?php echo $_SESSION['SESS_ADMIN_NAME'] ; ?></h5>
        <ul class="unstyled user-info">
          <li><a>Administator</a></li>
          </li>
        </ul>
      </div>
  </div>

  <!-- /.user-media -->
  <!-- #menu -->
  <ul id="menu" class="unstyled accordion collapse in">
    <li ><a href="../admin/index.php"><i class="icon-dashboard icon-large"></i> Dashboard</a></li>
	<li ><a href="../admin/acyear.php"><i class="icon-book icon-large"></i> Academic Year</a></li>		
    <li ><a href="../admin/student.php"><i class="icon-user icon-large"></i> Student</a></li>
    <li ><a href="../admin/subject.php"><i class="icon-book icon-large"></i> Subject</a></li>
	<li ><a href="../admin/subject_combination.php"><i class="icon-book icon-large"></i> Subject Combination</a></li>
	<li ><a href="../admin/exam.php"> <i class="icon-pencil icon-large"></i></i> Examination</a></li>
    <li ><a href="../admin/note.php"> <i class="icon-pencil icon-large"></i></i> Notification</a></li>    	
    <li ><a href="../admin/hod.php"><i class="icon-user icon-large"></i> Department Head</a></li>
    <li ><a href="../admin/course.php"><i class="icon-book icon-large"></i> Course</a></li>	
	<li ><a href="../admin/log.php"><i class="icon-time icon-large"></i> Log</a></li>	
    <li ><a href="../LLS/Timetable.php?lls=timetable1"><i class="icon-time icon-large"></i> Timetable</a></li>
    <li ><a href="../admin/pp.php"><i class="icon-time icon-large"></i> Pass Paper</a></li>
	
  </ul>
  <!-- /#menu -->
</div>
<!-- /#left -->