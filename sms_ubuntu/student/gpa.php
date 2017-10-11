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
        <title>GPA Calculator</title>
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
    </head>
	
    <body>
	  <!-- #wrap -->
	  <div id="wrap">
		<!-- #navbar -->
		  <?php include("navbar.php"); ?>	
			<div class="main-bar">
              <div class="container-fluid">
				<div class="row-fluid">
                  <div class="span12">
                    <h4>
                       <a class="pagepath" href="../student/index.php">
                       Dashboard </a> 
                       <a class="pagepath" href="gpa.php">
                       <font color="#FFFFFF"> | </font>
                       GPA Calculator</a>
                       </h4>
                  </div>
                </div>
                <!-- /.row-fluid -->
              </div>
              <!-- /.container-fluid -->
			</div>			
			<?php include("leftbar.php"); ?>		
			<!-- /#navbar -->

</p>
<form id="form1" name="form1" method="post" action="">
  <table width="552" height="82" border="0" class="tborder">
    <tr bgcolor="#006699" class="text2">
      <td width="17" bgcolor="#000099"><div align="center" class="style3"><strong><font size="2">Bil</font></strong></div></td>
      <td width="153" bgcolor="#000099"><div align="center" class="style3"><strong><font size="2">Subject Code </font></strong></div></td>
      <td width="271" bgcolor="#000099"><div align="center" class="style3"><strong><font size="2">Subject Name </font></strong></div></td>
      <td width="146" bgcolor="#000099"><div align="center" class="style3"><strong><font size="2">Credit Hour </font></strong></div></td>
      <td width="163" bgcolor="#000099"><div align="center" class="style3"><strong><font size="2">Gred</font></strong></div></td>
      <td width="163" bgcolor="#000099"><span class="style5">Pointer</span></td>
      <td width="48" bgcolor="#000099"><span class="style5"><font size="2">Total Pointer </font></span></td>
    </tr>
    <?php $num=0; do{ ?>
    <tr class="tulisan4" >
      <input type="hidden" name="id" value="<?php echo $row['member_id']; ?>" />
      <td><? echo $num+=1; ?>
          <div align="center"></div></td>
      <td align="center"><div align="center"><?php echo $kodla=$row_Recordset1['kod_subjek']; ?></div></td>
      <td><div align="center"><?php echo $row_Recordset1['nama_subjek']; ?></div></td>
      <td><div align="center">
        <input name="jam_kredit" type="hidden" id="jam_kredit" value="<?php echo $row_Recordset1['jam_kredit']; ?>" size="5"  readonly=""/>
        <?php echo $row_Recordset1['jam_kredit']; ?> </div></td>
      <td><div align="center">
        <select name="gred"  id="Gred" onchange="DisplayGred(this.value)">
          <option value="-1">Select </option>
          <option value="A|4.0">A </option>
          <option value="A-|3.67">A- </option>
          <option value="B+|3.33">B+ </option>
          <option value="B|3.0">B </option>
          <option value="B-|2.67">B- </option>
          <option value="C+|2.33">C+ </option>
          <option value="C|2.0">C </option>
          <option value="C-|1.67">C- </option>
          <option value="D|1.0">D </option>
          <option value="F|0.0">F </option>
        </select>
      </div></td>
      <td><input name="pointer" type="text" id="pointer" size="5" readonly /></td>
      <td colspan="2"><label>
        <input name="sumPointer" type="text" id="sumPointer" size="5" readonly />
      </label></td>
      <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
    </tr>
    <tr class="tulisan4" >
      <td colspan="8" bgcolor="#000099"> </td>
    </tr>
  </table>
  <p> </p>
  <table width="358" border="0">
    <tr>
      <th bgcolor="#000099" scope="col"><span class="style3">Credit Hour </span></th>
      <th bgcolor="#000099" scope="col"><span class="style3">Total Credit Hour </span></th>
      <th bgcolor="#000099" scope="col"><span class="style3">Total Score </span></th>
      <th bgcolor="#000099" scope="col"><span class="style3">GPA</span></th>
      <th bgcolor="#000099" scope="col"><span class="style3">CGPA</span></th>
    </tr>
    <tr>
      <th scope="row"><input name="total" type="text" id="total" size="5" /></th>
      <td><div align="center">
        <input name="sumCreditHour" type="text" id="sumCreditHour" size="5" readonly />
      </div></td>
      <td><div align="center">
        <input name="totalScore" type="text" id="totalScore" size="5" readonly />
      </div></td>
      <td><input name="gpa" type="text" id="gpa" size="5" readonly /></td>
      <td><input name="pointer2" type="text" id="pointer2" size="5" readonly /></td>
    </tr>
  </table>
  <p>
    <input type="button" name="Button" value="Calculate" onclick="CalculateCGPA()" />
    <input type="submit" name="Submit3" value="Save" />
    <input type="reset" name="Submit4" value="Reset" />
  </p>
</p>
<form id="form1" name="form1" method="post" action="">
  <table width="552" height="82" border="0" class="tborder">
    <tr bgcolor="#006699" class="text2">
      <td width="17" bgcolor="#000099"><div align="center" class="style3"><strong><font size="2">Bil</font></strong></div></td>
      <td width="153" bgcolor="#000099"><div align="center" class="style3"><strong><font size="2">Subject Code </font></strong></div></td>
      <td width="271" bgcolor="#000099"><div align="center" class="style3"><strong><font size="2">Subject Name </font></strong></div></td>
      <td width="146" bgcolor="#000099"><div align="center" class="style3"><strong><font size="2">Credit Hour </font></strong></div></td>
      <td width="163" bgcolor="#000099"><div align="center" class="style3"><strong><font size="2">Gred</font></strong></div></td>
      <td width="163" bgcolor="#000099"><span class="style5">Pointer</span></td>
      <td width="48" bgcolor="#000099"><span class="style5"><font size="2">Total Pointer </font></span></td>
    </tr>
    <?php $num=0; do{ ?>
    <tr class="tulisan4" >
      <input type="hidden" name="id" value="<?php echo $row['member_id']; ?>" />
      <td><? echo $num+=1; ?>
          <div align="center"></div></td>
      <td align="center"><div align="center"><?php echo $kodla=$row_Recordset1['kod_subjek']; ?></div></td>
      <td><div align="center"><?php echo $row_Recordset1['nama_subjek']; ?></div></td>
      <td><div align="center">
        <input name="jam_kredit" type="hidden" id="jam_kredit" value="<?php echo $row_Recordset1['jam_kredit']; ?>" size="5"  readonly=""/>
        <?php echo $row_Recordset1['jam_kredit']; ?> </div></td>
      <td><div align="center">
        <select name="gred"  id="Gred" onchange="DisplayGred(this.value)">
          <option value="-1">Select </option>
          <option value="A|4.0">A </option>
          <option value="A-|3.67">A- </option>
          <option value="B+|3.33">B+ </option>
          <option value="B|3.0">B </option>
          <option value="B-|2.67">B- </option>
          <option value="C+|2.33">C+ </option>
          <option value="C|2.0">C </option>
          <option value="C-|1.67">C- </option>
          <option value="D|1.0">D </option>
          <option value="F|0.0">F </option>
        </select>
      </div></td>
      <td><input name="pointer" type="text" id="pointer" size="5" readonly /></td>
      <td colspan="2"><label>
        <input name="sumPointer" type="text" id="sumPointer" size="5" readonly />
      </label></td>
      <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
    </tr>
    <tr class="tulisan4" >
      <td colspan="8" bgcolor="#000099"> </td>
    </tr>
  </table>
  <p> </p>
  <table width="358" border="0">
    <tr>
      <th bgcolor="#000099" scope="col"><span class="style3">Credit Hour </span></th>
      <th bgcolor="#000099" scope="col"><span class="style3">Total Credit Hour </span></th>
      <th bgcolor="#000099" scope="col"><span class="style3">Total Score </span></th>
      <th bgcolor="#000099" scope="col"><span class="style3">GPA</span></th>
      <th bgcolor="#000099" scope="col"><span class="style3">CGPA</span></th>
    </tr>
    <tr>
      <th scope="row"><input name="total" type="text" id="total" size="5" /></th>
      <td><div align="center">
        <input name="sumCreditHour" type="text" id="sumCreditHour" size="5" readonly />
      </div></td>
      <td><div align="center">
        <input name="totalScore" type="text" id="totalScore" size="5" readonly />
      </div></td>
      <td><input name="gpa" type="text" id="gpa" size="5" readonly /></td>
      <td><input name="pointer2" type="text" id="pointer2" size="5" readonly /></td>
    </tr>
  </table>
  <p>
    <input type="button" name="Button" value="Calculate" onclick="CalculateCGPA()" />
    <input type="submit" name="Submit3" value="Save" />
    <input type="reset" name="Submit4" value="Reset" />
  </p>
            <!-- #content -->
            <div id="content">
                <!-- .outer -->
                <div class="container-fluid outer">
                    <div class="row-fluid">
                        <!-- .inner -->
				<div class="span12 inner">
				  <!--BEGIN GUIDELINES FOR CATEGORY     -->
				  <div class="row-fluid">
				  <!-- .span12 -->
					
					<!-- /.span12 -->
				</div>
				<!--END GUIDELINES FOR CATEGORY-->	
			<div class="row-fluid">
                <!-- .span12 -->
                <div class="span12">
                  <div class="row-fluid">
                    <div class="span12"></div>
                <!-- /.span12 -->
              </div>
              <!--End Datatables-->
            </div>
            <!-- /.inner -->
          </div>
                          
												
									  </div>
									<!-- /.box -->
									</div>
									<!-- /.span12 -->
								</div>
							</div>
                                <!-- /.span12 -->
                        </div>
						<!-- END SUBMIT -->
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
				</div>
        <!-- /#wrap -->
        
      <!-- #footer -->		
            <?php include("footer.php"); ?>       		
		<!-- /#footer -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <!--
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script>window.jQuery.ui || document.write('<script src="../assets/js/vendor/jquery-ui-1.10.0.custom.min.js"><\/script>')</script>
        -->

        <script src="../assets/js/vendor/bootstrap.min.js"></script>
        <script type="text/javascript" src="../assets/js/lib/jquery.tablesorter.min.js"></script>
        <script type="text/javascript" src="../assets/js/lib/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="../assets/js/lib/DT_bootstrap.js"></script>
        <script src="../assets/js/lib/responsive-tables.js"></script>
        <script type="text/javascript">
          function UpdateDate(){
            frm.hsMode.value = "DATE-UPDATE";
            frm.method="post";
            frm.action="exam.php";
            frm.submit();
          }
         function ViewSubjects(riId){
        frm.method = "post";
        frm.hiStId.value = riId;
        frm.action = "examform.php";
        frm.submit();
      }
          function SemiChanged(){
            semi = $("#cboSemester").val();
            
            fdt = "#fromdt" + semi;
            tdt = "#todt" + semi;
            
            $("#fromdt").val($(fdt).val());
            $("#todt").val($(tdt).val());
          }
          
          $(function() {
            metisTable();
          });
        </script>
        <script type="text/javascript" src="../assets/js/main.js"></script>       
    </body>
</html>