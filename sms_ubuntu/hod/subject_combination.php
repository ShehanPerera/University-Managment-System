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
    <title>Subject Combination</title>
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
        width : 600px;
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
        		<a class="pagepath" href="../hod/index.php">
                Dashboard </a> 
                <a class="pagepath" href="subject_combination.php">
                <font color="#FFFFFF"> | </font>
                Subject combination</a>
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
              <div class="row-fluid">
                <!-- .span12 -->
                <div class="span12">
                  <div class="row-fluid">
                    <div class="span12">
                      <div class="box">
                        <header>
                          <br/><br/>
						</header>
                        
                        <div id="collapse4" class="body">
                          <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                            <thead>
                              <tr>
                                <th  style="border-left: 1px solid #C1DAD7"> Subject_1 </th>
                                <th>Subject_2</th>													
                                <th>Subject_3</th>	
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                              include('../connect.php');
                              $result = mysql_query("SELECT * FROM subject_com");
                              while($row = mysql_fetch_array($result)){
                                $str = $row['subject1'] . "|" 
                                     . $row['subject2'] . "|" 
                                     . $row['subject3'] . "|"                                      
                                     . $row['id'];

                                  echo '<tr class="record">';
                                  echo '<td><div align="left">'.$row['subject1'].'</div></td>';
                                  echo '<td><div align="left">'.$row['subject2'].'</div></td>';															
                                  echo '<td><div align="left">'.$row['subject3'].'</div></td>';                                
								  
                                  echo '</tr>';
                                }
                              ?> 
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
				  
				  <div class="row-fluid">
                                <!-- .span12 -->
                                <div class="span12">
									<div class="row-fluid">
										<!-- .span12 -->
										<div class="span12">
											<!-- .box -->
							<div class="box">
							  <header>
								<div class="icons">
								  <i class="icon-question-sign"></i>
								</div>
								<h5>Post subject selection form</h5>
								<ul class="nav pull-right">
								<li>
								  <a href="#datePickerBlock11" data-toggle="collapse" class="accordion-toggle minimize-box">
									<i class="icon-chevron-down"></i>
								  </a>
								</li>
								</ul>
							  </header>
							  <div id="datePickerBlock11" class="body collapse out">
								<form class="form-horizontal" name="frm" id="frm">
									<?php
									  $fdt="";
									  $tdt="";
									  $result = mysql_query("SELECT * FROM subjectdate ORDER BY semi DESC");
									  while($row = mysql_fetch_array($result)){
										$fdt = $row['fromdt'];
										$tdt = $row['todt'];
									  ?>
										<input type="hidden" id="fromdt<?php echo $row['semi']?>" name="fromdt<?php echo $row['semi']?>" value="<?php echo $row['fromdt']?>"/>
										<input type="hidden" id="todt<?php echo $row['semi']?>" name="todt<?php echo $row['semi']?>" value="<?php echo $row['todt']?>"/>
									  <?php
									  }    
									?>
                            
								  <input type="hidden" id="hsMode" name="hsMode" value=""/>
									<div class="control-group">
									  <label class="control-label">Start Date</label>
									  <div class="controls">
										<input type="date" id="fromdt" name="fromdt" value="<?php echo $fdt; ?>" />
									  </div>
									</div>
														
									<div class="control-group">
									  <label class="control-label">End Date</label>
									  <div class="controls">
										<input type="date" id="todt" name="todt"  value="<?php echo $tdt; ?>" />
									  </div>
									</div>
									
									<div class="control-group">
									  <div class="controls">																
										<a rel="facebox" id="addq" onclick="UpdateDate()"><button class="btn edit">Post Form</button></a>																																
									  </div>
									</div>
								</form>	
							  </div>
							</div>
						  </div>
						<!-- /.box -->
						</div>
					  <!-- /.span12 -->
					  </div>
					</div>
                  <!-- /.span12 -->
                  </div>
                </div>
                <!-- /.span12 -->
              </div>
              <!-- /.row-fluid -->
            </div>
            <!-- /.inner -->
          </div>
          <!-- /.row-fluid -->
        </div>
        <!-- /.outer -->
		
      <!-- /#content -->
      <!-- #push do not remove -->
      <div id="push"></div>
      <!-- /#push -->
	        <!-- #footer -->		
      <?php include("footer.php"); ?>       		
      <!-- /#footer -->
      </div>
      <!-- /#wrap -->
        

        
    <!-- #editModal -->
    <div id="editSubject" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="helpModalLabel"><i class="icon-external-link"></i>Subject</h3>
      </div>
      <div class="modal-body">
        <div class="container">
          <form name="frmSubject" role="form">
            <input type="hidden" name="hiId" id="hiId"/>
            <div class="row">
              <div class="span3">
                <div class="form-group">
                  <label>Subject_1</label>
                  <input type="text" name="txtSub1" id="txtSub1" class="form-control"/>
                </div>
				
               <div class="form-group">
                  <label>Subject_2</label>
                  <input type="text" name="txtSub2" id="txtSub2" class="form-control"/>
                </div>
				
				<div class="form-group">
                  <label>Subject_3</label>
                  <input type="text" name="txtSub3" id="txtSub3" class="form-control"/>
                </div>				
              </div>
            </div>
          </form>
		</div> 
      </div>
      <div class="modal-footer">
        <button class="btn" aria-hidden="true" onclick="UpdateSubject()">Update</button>
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
      </div>
    </div>
    <!-- /#editModal -->
    
    <script src="../assets/lib/jquery.min.js"></script>
    <script src="../assets/js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/lib/jquery.tablesorter.min.js"></script>
    <script type="text/javascript" src="../assets/js/lib/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../assets/js/lib/DT_bootstrap.js"></script>
    <script src="../assets/js/lib/responsive-tables.js"></script>     
    <script type="text/javascript" src="../assets/js/main.js"></script>
		<script src="js/jquery.js"></script>
		<script src="../assets/js/script.js"></script>
		<script type="text/javascript">
      function AssignValue(rsStr){
        poArray = rsStr.split("|");
        
        $("#txtSub1").val(poArray[0]);
        $("#txtSub2").val(poArray[1]);
        $("#txtSub3").val(poArray[2]);       
        $("#hiId").val(poArray[3]);
      }
      
      function UpdateSubject(){
        frmSubject.method = "post";
        frmSubject.action = "addsubcomexec.php";
        frmSubject.submit();
      }
      


      $(function() {
        metisTable();

      $(".delbutton").click(function(){

      //Save the link in a variable called element
      var element = $(this);

      //Find the id of the link that was clicked
      var del_id = element.attr("id");

      //Built a url to send
      var info = 'id=' + del_id;
       if(confirm("Sure you want to delete this update? There is NO undo!"))
            {

       $.ajax({
         type: "GET",
         url: "deletesub.php",
         data: info,
         success: function(){

         }
       });
               $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
          .animate({ opacity: "hide" }, "slow");

       }

      return false;

      });

      });
      </script>   
        
    </body>
</html>