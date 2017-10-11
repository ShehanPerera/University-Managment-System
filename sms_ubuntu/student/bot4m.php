<?php 
    include("db.php");	

?>

<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Botany Level 4M</title>
    <meta name="description" content="Metis: Bootstrap Responsive Admin Theme">
    <meta name="viewport" content="width=device-width">
    <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap-responsive.min.css"/>
    <link type="text/css" rel="stylesheet" href="../assets/Font-awesome/css/font-awesome.min.css"/>
    <link type="text/css" rel="stylesheet" href="../assets/css/style.css">
    <link type="text/css" rel="stylesheet" href="../assets/css/DT_bootstrap.css"/>
    <link rel="stylesheet" href="../assets/css/responsive-tables.css">

    <link rel="stylesheet" href="../assets/css/theme.css">

    <script type="text/javascript" src="../assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE 7]>
    <link type="text/css" rel="stylesheet" href="../assets/Font-awesome/css/font-awesome-ie7.min.css"/>
    <![endif]-->
    
    <style type="text/css">
      .modal{
        width : 800px;
      }
    </style>
  </head>

  <body>
    <!-- #wrap -->
    <div id="wrap">
      <!-- #navbar -->
      <?php include("navbar.php"); ?>		
      <!-- /#navbar -->
      <!-- ."main-bar -->
      <div class="main-bar">
        <div class="container-fluid">
          <div class="row-fluid">
            <div class="span12">
              <h4>
        		<a class="pagepath" href="../student/index.php">
                Dashboard </a> 
                <font color="#FFFFFF"> | </font>
       			<a class="pagepath" href="ppaper.php">
                Past Paper </a>
                <a class="pagepath" href="principalsub.php">
                <font color="#FFFFFF"> | </font>
                Principal Subject </a> 
                <a class="pagepath" href="bot.php">
                <font color="#FFFFFF"> | </font>
                Botany</a>
				<a class="pagepath" href="bot4m.php">
                <font color="#FFFFFF"> | </font>
                Level 4M</a>
               </h4>
            </div>
          </div>
          <!-- /.row-fluid -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.main-bar -->

      <!-- #leftBar -->
			<?php include("leftBar.php"); ?>		
			<!-- /#leftBar -->

      <!-- #content -->
      <div id="content">
        <!-- .outer -->
        <div class="container-fluid outer">
          <div class="row-fluid">
            <!-- .inner -->
            <div class="span12 inner">
            <!--Begin Datatables-->
              <div class="row-fluid">
                <div class="span12">
                  <div class="box">
                    <div id="collapse4" class="body">
                    
    <thead>
			

<script type="text/javascript">
var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-22897853-1']);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script>

</head>
<body>
<table width="60%" border="1" cellpadding="2" cellspacing="2">
<style type="text/css">


.rect { width:400px; min-height:25px; margin:0 auto; padding:10px; border:1px solid red; margin-top:10px;margin-bottom:10px; }
.rect a { font-size:15px; font-family:Tahoma, Geneva, sans-serif; text-decoration:none; color:#AED588; text-transform:capitalize; font-weight:bold;}
.rect a:hover { font-size:15px; font-family:Tahoma, Geneva, sans-serif; text-decoration:none; color:#093; text-transform:capitalize; font-weight:bold;}


</style>
<tr>
    <td align="left" valign="middle" bgcolor="#008000">
	<div style="margin:0px 10px; font-weight:bold; color:#FFF; font-size:16px;">Past Paper Download</div>
	</td></tr>
	<tr>
	<td align="left" valign="middle">
	<?php
		$query1 = "SELECT * FROM bot4m LIMIT 10";
	$result = mysql_query($query1);
while($row=mysql_fetch_array($result))
{
	$fname=$row['fname'];
	$type=$row['type'];
	?>
<div class="rect">
<img alt="down-icon" src="../files/tick.png" align="left" width="20" height="20" />
<a href="download.php?filename=<?php echo $fname ;?>">
<?php echo $fname ;?></a>
</div>
<?php }?>
	</td>
	</tr>
	</table>		
							
						</thead>
                        
                        <tbody>
                         
						</tbody> 
                    </div>
                  </div>
                </div>
                <!-- /.span12 -->
              </div>
              <!--End Datatables-->
            </div>
            <!-- /.inner -->
          </div>
          <!-- /.row-fluid -->
        </div>
        <!-- /.outer -->
      </div>
      <!-- /#content -->
      <!-- #push do not remove -->
      <div id="push"></div>
      <!-- /#push -->
	      <!-- #footer -->		
    <?php include("footer.php"); ?>       		
		<!-- /#footer -->
    </div>
    <!-- /#wrap -->

    <form name ="frm">
      <input type="hidden" id="hiStId" name="hiStId"/>
    </form>  
	
    <script src="../assets/lib/jquery.min.js"></script>
    <script src="../assets/js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/lib/jquery.tablesorter.min.js"></script>
    <script type="text/javascript" src="../assets/js/lib/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../assets/js/lib/DT_bootstrap.js"></script>
    <script src="../assets/js/lib/responsive-tables.js"></script>     
    <script type="text/javascript" src="../assets/js/main.js"></script>
		<script src="js/jquery.js"></script>  
<script src="../assets/js/script.js"></script>		
  </body>
</html>