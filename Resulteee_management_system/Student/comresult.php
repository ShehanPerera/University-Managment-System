<!DOCTYPE html>
<?
session_start();
error_reporting(1);
require("../config.php");
 extract($_SESSION);
 if($student=="")
 {
 header('location:../index.php');
 }
$q=mysqli_query($con,"select * from student where email='".$student."'"); 
$stu= mysqli_fetch_array($q);?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>common result</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/dashboard.css" rel="stylesheet">
   
  </head>
<style> 
.flex-container {
    display: -webkit-flex;
    display: flex;  
    -webkit-flex-flow: row wrap;
    flex-flow: row wrap;
    text-align: center;
}

.flex-container > * {
    padding: 15px;
    -webkit-flex: 1 100%;
    flex: 1 100%;
}

.article {
    text-align: left;
}

header {background: black;color:white;}
footer {background: #aaa;color:white;}
.nav {background:#eee;}

.nav ul {
    list-style-type: none;
    padding: 0;
}
.nav ul a {
    text-decoration: none;
}

@media all and (min-width: 768px) {
    .nav {text-align:left;-webkit-flex: 1 auto;flex:1 auto;-webkit-order:1;order:1;}
    .article {-webkit-flex:5 0px;flex:5 0px;-webkit-order:2;order:2;}
    footer {-webkit-order:3;order:3;}
}
</style>

  <body>

    <nav class="navbar "  style="background:#f5f5f5;border-bottom:1px solid #ccc">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  </div>
		   <h1 class="page-header" style="color:#337ab7; text-decoration:underline" align="center">COMMON RESULT </h1>
		   
		   <div class="form-group">
 
<a href="../index.php" >BACK</a>
<div class="flex-container">
<?php $result_photo="";?>
<nav class="nav">
<ul>
  <table class="table table-responsive table-hover">
                        
                            
							

	<tr> <th><h4  style="color:#337ab7" ><a href="comresult.php?id1=1G"> Level 1G</a></h4>
						<?php
							if(isset($_GET['id1']))
							{
								?>
									<h4  style="color:#338ab7" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="comresult.php?semi11=s1&id1=1G"> Semester1</a></h4>
												<?php
												include('../config.php');
												if(isset($_GET['semi11']))
												{
											$que=mysqli_query($con ,"select * from marks_photo where level='1G' and semester='1'");
												
												while($row=mysqli_fetch_array($que))
												{
													?>
					<h4  style="color:#338ab7" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="comresult.php?img1=<?php echo $row['image']; ?>&semi11=s1&id1=1G"><?php echo $row['subject']; ?></a></h4>
													<?php
													if(isset($_GET['img1']))
													{
															$result_photo = $_GET['img1'];
													}	
												}
												}
												?>
									<h4  style="color:#337ab7" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="comresult.php?semi111=s1&id1=1G"> Semester2</a></h4>
									
									
									<?php
												include('../config.php');
												if(isset($_GET['semi111']))
												{
											$que=mysqli_query($con ,"select * from marks_photo where level='1G' and semester='2'");
												
												while($row=mysqli_fetch_array($que))
												{
													?>
					<h4  style="color:#337ab7" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="comresult.php?img12=<?php echo $row['image']; ?>&semi111=s1&id1=1G"><?php echo $row['subject']; ?></a></h4>
													<?php
													if(isset($_GET['img12']))
													{
															$result_photo = $_GET['img12'];
													}	
												}
												}
												?>
								<?php
							}
						?>
						</th>
						</tr>
						
	<tr> <th><h4  style="color:#337ab7" ><a href="comresult.php?id99=1S">  Level 1S</a></h4>
	
	<?php
							if(isset($_GET['id99']))
							{
								?>
									<h4  style="color:#437ab7" >&nbsp;&nbsp;&nbsp;&nbsp;<a href="comresult.php?semi12=s2&id99=1S"> Semester1</a></h4>
												<?php
												include('../config.php');
												if(isset($_GET['semi12']))
												{
											$que=mysqli_query($con ,"select * from marks_photo where level='1S' and semester='1'");
												
												while($row=mysqli_fetch_array($que))
												{
													?>
					<h4  style="color:#337ab7" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="comresult.php?img21=<?php echo $row['image']; ?>&semi12=s1&id99=1S"><?php echo $row['subject']; ?></a></h4>
													<?php
													if(isset($_GET['img21']))
													{
															$result_photo = $_GET['img21'];
													}	
												}
												}
												?>
									<h4  style="color:#337ab7" >&nbsp;&nbsp;&nbsp;&nbsp;<a href="comresult.php?semi112=s1&id99=1S"> Semester2</a></h4>
									
									
									<?php
												include('../config.php');
												if(isset($_GET['semi112']))
												{
											$que=mysqli_query($con ,"select * from marks_photo where level='1S' and semester='2'");
												
												while($row=mysqli_fetch_array($que))
												{
													?>
					<h4  style="color:#337ab7" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="comresult.php?img22=<?php echo $row['image']; ?>&semi112=s1&id=2S"><?php echo $row['subject']; ?></a></h4>
													<?php
													if(isset($_GET['img22']))
													{
															$result_photo = $_GET['img22'];
													}	
												}
												}
												?>
								<?php
							}
						?>
						</th>
						</tr>
	<tr> <th><h4  style="color:#337ab7" ><a href="comresult.php?id2=2G"> Level 2G</a></h4>
	
	<?php
							if(isset($_GET['id2']))
							{
								?>
									<h4  style="color:#337ab7" >&nbsp;&nbsp;&nbsp;&nbsp;<a href="comresult.php?semi21=s1&id2=2G"> Semester1</a></h4>
												<?php
												include('../config.php');
												if(isset($_GET['semi21']))
												{
											$que=mysqli_query($con ,"select * from marks_photo where level='2G' and semester='1'");
												
												while($row=mysqli_fetch_array($que))
												{
													?>
					<h4  style="color:#337ab7" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="comresult.php?img31=<?php echo $row['image']; ?>&semi21=s1&id2=2G"><?php echo $row['subject']; ?></a></h4>
													<?php
													if(isset($_GET['img31']))
													{
															$result_photo = $_GET['img31'];
													}	
												}
												}
												?>
									<h4  style="color:#337ab7" >&nbsp;&nbsp;&nbsp;&nbsp;<a href="comresult.php?semi113=s1&id2=2G"> Semester2</a></h4>
									
									
									<?php
												include('../config.php');
												if(isset($_GET['semi113']))
												{
											$que=mysqli_query($con ,"select * from marks_photo where level='2G' and semester='2'");
												
												while($row=mysqli_fetch_array($que))
												{
													?>
					<h4  style="color:#337ab7" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="comresult.php?img32=<?php echo $row['image']; ?>&semi113=s1&id2=2G"><?php echo $row['subject']; ?></a></h4>
													<?php
													if(isset($_GET['img32']))
													{
															$result_photo = $_GET['img32'];
													}	
												}
												}
												?>
								<?php
							}
						?>
						</th>
						</tr>
	<tr> <th><h4  style="color:#337ab7" ><a href="comresult.php?id3=2S&level=level"> Level 2S</a></h4>
	
	<?php
							if(isset($_GET['id3']))
							{
								?>
									<h4  style="color:#337ab7" >&nbsp;&nbsp;&nbsp;&nbsp;<a href="comresult.php?semi22=s1&id3=2S"> Semester1</a></h4>
												<?php
												include('../config.php');
												if(isset($_GET['semi22']))
												{
											$que=mysqli_query($con ,"select * from marks_photo where level='2S' and semester='1'");
												
												while($row=mysqli_fetch_array($que))
												{
													?>
					<h4  style="color:#337ab7" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="comresult.php?img41=<?php echo $row['image']; ?>&semi22=s1&id3=2S"><?php echo $row['subject']; ?></a></h4>
													<?php
													if(isset($_GET['img41']))
													{
															$result_photo = $_GET['img41'];
													}	
												}
												}
												?>
									<h4  style="color:#337ab7" >&nbsp;&nbsp;&nbsp;&nbsp;<a href="comresult.php?semi114=s1&id3=2S"> Semester2</a></h4>
										
										
										<?php
												include('../config.php');
												if(isset($_GET['semi114']))
												{
											$que=mysqli_query($con ,"select * from marks_photo where level='2S' and semester='2'");
												
												while($row=mysqli_fetch_array($que))
												{
													?>
					<h4  style="color:#337ab7" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="comresult.php?img42=<?php echo $row['image']; ?>&semi114=s1&id3=2S"><?php echo $row['subject']; ?></a></h4>
													<?php
													if(isset($_GET['img42']))
													{
															$result_photo = $_GET['img42'];
													}	
												}
												}
												?>
								<?php
							}
						?>
						</th>
						</tr>
	<tr> <th><h4  style="color:#337ab7" ><a href="comresult.php?id4=3G&level=level"> Level 3G</a></h4>
	
	<?php
							if(isset($_GET['id4']))
							{
								?>
									<h4  style="color:#337ab7" >&nbsp;&nbsp;&nbsp;&nbsp;<a href="comresult.php?semi31=s1&id4=3G"> Semester1</a></h4>
												<?php
												include('../config.php');
												if(isset($_GET['semi31']))
												{
											$que=mysqli_query($con ,"select * from marks_photo where level='3G' and semester='1'");
												
												while($row=mysqli_fetch_array($que))
												{
													?>
					<h4  style="color:#337ab7" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="comresult.php?img51=<?php echo $row['image']; ?>&semi31=s1&id4=3G"><?php echo $row['subject']; ?></a></h4>
													<?php
													if(isset($_GET['img51']))
													{
															$result_photo = $_GET['img51'];
													}	
												}
												}
												?>
									<h4  style="color:#337ab7" >&nbsp;&nbsp;&nbsp;&nbsp;<a href="comresult.php?semi115=s1&id4=3G"> Semester2</a></h4>
									
									
									<?php
												include('../config.php');
												if(isset($_GET['semi115']))
												{
											$que=mysqli_query($con ,"select * from marks_photo where level='3G' and semester='2'");
												
												while($row=mysqli_fetch_array($que))
												{
													?>
					<h4  style="color:#337ab7" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="comresult.php?img52=<?php echo $row['image']; ?>&semi115=s1&id4=3G"><?php echo $row['subject']; ?></a></h4>
													<?php
													if(isset($_GET['img52']))
													{
															$result_photo = $_GET['img52'];
													}	
												}
												}
												?>
								<?php
							}
						?>
						</th>
						</tr>
	<tr> <th><h4  style="color:#337ab7" ><a href="comresult.php?id5=3S&level=level"> Level 3S</a></h4>
	
	<?php
							if(isset($_GET['id5']))
							{
								?>
									<h4  style="color:#337ab7" >&nbsp;&nbsp;&nbsp;&nbsp;<a href="comresult.php?semi32=s1&id5=3S"> Semester1</a></h4>
												<?php
												include('../config.php');
												if(isset($_GET['semi']))
												{
											$que=mysqli_query($con ,"select * from marks_photo where level='3S' and semester='1'");
												
												while($row=mysqli_fetch_array($que))
												{
													?>
					<h4  style="color:#337ab7" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="comresult.php?img61=<?php echo $row['image']; ?>&semi32=s1&id5=3S"><?php echo $row['subject']; ?></a></h4>
													<?php
													if(isset($_GET['img61']))
													{
															$result_photo = $_GET['img61'];
													}	
												}
												}
												?>
									<h4  style="color:#337ab7" >&nbsp;&nbsp;&nbsp;&nbsp;<a href="comresult.php?semi116=s1&id5=3S"> Semester2</a></h4>
									
									
									<?php
												include('../config.php');
												if(isset($_GET['semi116']))
												{
											$que=mysqli_query($con ,"select * from marks_photo where level='3S' and semester='2'");
												
												while($row=mysqli_fetch_array($que))
												{
													?>
					<h4  style="color:#337ab7" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="comresult.php?img62=<?php echo $row['image']; ?>&semi116=s1&id5=3S"><?php echo $row['subject']; ?></a></h4>
													<?php
													if(isset($_GET['img62']))
													{
															$result_photo = $_GET['img62'];
													}	
												}
												}
												?>
								<?php
							}
						?>
						</th>
						</tr>
	<tr> <th><h4  style="color:#337ab7" ><a href="comresult.php?id6=4M&level=level"> Level 4M</a></h4>
	
	<?php
							if(isset($_GET['id6']))
							{
								?>
									<h4  style="color:#337ab7" >&nbsp;&nbsp;&nbsp;&nbsp;<a href="comresult.php?semi117=s1&id6=4M"> Semester1</a></h4>
												<?php
												include('../config.php');
												if(isset($_GET['semi117']))
												{
											$que=mysqli_query($con ,"select * from marks_photo where level='4M' and semester='1'");
												
												while($row=mysqli_fetch_array($que))
												{
													?>
					<h4  style="color:#337ab7" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="comresult.php?img71=<?php echo $row['image']; ?>&semi117=s1&id6=4M"><?php echo $row['subject']; ?></a></h4>
													<?php
													if(isset($_GET['img71']))
													{
															$result_photo = $_GET['img71'];
													}	
												}
												}
												?>
									<h4  style="color:#337ab7" >&nbsp;&nbsp;&nbsp;&nbsp;<a href="comresult.php?semi118=s1&id6=4M"> Semester2</a></h4>
									
									
									<?php
												include('../config.php');
												if(isset($_GET['semi118']))
												{
											$que=mysqli_query($con ,"select * from marks_photo where level='4M' and semester='2'");
												
												while($row=mysqli_fetch_array($que))
												{
													?>
					<h4  style="color:#337ab7" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="comresult.php?img72=<?php echo $row['image']; ?>&semi118=s1&id6=4M"><?php echo $row['subject']; ?></a></h4>
													<?php
													if(isset($_GET['img72']))
													{
															$result_photo = $_GET['img72'];
													}	
												}
												}
												?>
								<?php
							}
						?>
						</th>
						</tr>
	<tr> <th><h4  style="color:#337ab7" ><a href="comresult.php?id7=4S&level=level"> Level 4S</a></h4>
	
	<?php
							if(isset($_GET['id7']))
							{
								?>
									<h4  style="color:#337ab7" >&nbsp;&nbsp;&nbsp;&nbsp;<a href="comresult.php?semi119=s1&id7=4S"> Semester1</a></h4>
												<?php
												include('../config.php');
												if(isset($_GET['semi11']))
												{
											$que=mysqli_query($con ,"select * from marks_photo where level='4S' and semester='1'");
												
												while($row=mysqli_fetch_array($que))
												{
													?>
					<h4  style="color:#337ab7" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="comresult.php?img81=<?php echo $row['image']; ?>&semi11=s1&id7=1G"><?php echo $row['subject']; ?></a></h4>
													<?php
													if(isset($_GET['img81']))
													{
															$result_photo = $_GET['img81'];
													}	
												}
												}
												?>
									<h4  style="color:#337ab7" >&nbsp;&nbsp;&nbsp;&nbsp;<a href="comresult.php?semi125=s1&id7=4S"> Semester2</a></h4>
									
									
									<?php
												include('../config.php');
												if(isset($_GET['semi119']))
												{
											$que=mysqli_query($con ,"select * from marks_photo where level='4S' and semester='2'");
												
												while($row=mysqli_fetch_array($que))
												{
													?>
					<h4  style="color:#337ab7" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="comresult.php?img82=<?php echo $row['image']; ?>&semi125=s1&id7=4S"><?php echo $row['subject']; ?></a></h4>
													<?php
													if(isset($_GET['img82']))
													{
															$result_photo = $_GET['img82'];
													}	
												}
												}
												?>
								<?php
							}
						?>
						</th>
						</tr>
							
                                
                              
								
				</table>
				</ul>
				</nav>
				<?php
				if($result_photo !="")
				{
					?>
				<article class="article">
			
				<img src="..\Instructor\product_imgLocation\<?php echo $result_photo; ?>"  style="width:750px;height:800px;">

				</article>
				<?php
				}
				?>
				
				<footer>Copyright &copy; PHONEAX CODERS</footer>

</div>
	</div>
	
 
  </body>
</html>
