  <!-- #left -->
      <div id="left">
          <!-- .user-media -->
          <div class="media user-media hidden-phone">
              <a href="../../UMS/user/editpage.php" class="user-link">
                 <?php echo '<img height="180px" width="130px" src="data:image;base64,'.$_SESSION['image'].'" id="pro_pic"/></td>'; ?>               
              </a>
              <div class="media-body hidden-tablet">
                <h5>
                	<a href="../../UMS/user/editpage.php">
                    <font color="#000000">
                    <?php echo $_SESSION['usertype2'] ;echo ". "; echo $_SESSION['usertype'] ;echo " "; echo $_SESSION['usertype1'] ; ?>
                    </font>
                    </a>
                </h5>
                <ul class="unstyled user-info">
                <li>
				<a>Student</a>
                </li>
                </ul>
              </div>
          </div>
          <!-- /.user-media -->
          <!-- #menu -->
                  <div id="cssmenu">
  <ul>
  
    <li class='active'><a href="../student/index.php"><i class="icon-home icon-large"></i> Dashboard</a></li>
	<li class='has-sub'><a href='#'><i class="icon-user icon-large"></i></i><span> Users</span><i class="icon-chevron-down icon-large"></i></a>
	<ul>
	<li ><a href="../student/hod.php"> Department Head</a></li>
	<li ><a href="../student/student.php"> Student</a></li>
	</ul>
	</li>
	<li class='has-sub'><a href='#'><i class="icon-th-large icon-large"></i><span> Course Details</span><i class="icon-chevron-down icon-large"></i></a>
	<ul>
	<li ><a href="../student/acyear.php"> Academic Year</a></li>
    <li ><a href="../student/course.php"> Course</a></li>
	<li ><a href="../student/subject.php"> Subject</a></li>
	<li ><a href="../student/subject_combination.php"> Subject Combination</a></li>
	</ul>
	</li>
  	<li class='has-sub'><a href='#'><i class="icon-eye-open icon-large"></i><span> Student View</span><i class="icon-chevron-down icon-large"></i></a>
	<ul>
	<li ><a href="../LLS/Timetable.php?lls=timetable1"> Timetable</a></li>
	<li ><a href="../student/results.php"> Results</a></li>
	<li ><a href="../student/exam.php"> Examination</a></li>
    <li ><a href="../student/note.php"> Notification</a></li>
	</ul>
	</li>
	<li ><a href="../student/ppaper.php"><i class="icon-book icon-large"></i> Past Paper</a></li>							
  </ul>
  </div>
                <!-- /#menu -->

            </div>
<!-- /#left -->