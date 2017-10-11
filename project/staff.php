<?php
include ('conn.php'); //connect the connection page
include("../Hostel/HMS/lib/session.php");
 // if the session not yet started 
  //session_start();
  $utype1=$_SESSION['usertype3'];
 $utype2=$_SESSION['usertype1'];
 $utype3=$_SESSION['usertype2'];
      if((!isset($_SESSION['Loged_User']))||($_SESSION['res']!="receptionist")&& (!in_array("receptionist",$_SESSION['position1'])))
        {
          header('location:../UMS/UMSlogin.php');
        }
?>
<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/admin.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta charset="utf-8">
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>Health Center</title>
    <!-- InstanceEndEditable -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <style type="text/css">
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }

        .sidebar-nav {
            padding: 9px 0;
        }
    </style>
	<style type="text/css">
 /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
      }
      #footer {
        background-color: #f5f5f5;
      }

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }



      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      #footer .container {
        width: auto;
        max-width: 680px;
      }
      .container .credit {
        margin: 10px 0;
      }
</style>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Le fav and touch icons -->
    <!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
    <!-- InstanceParam name="OptionalRegion1" type="boolean" value="false" -->
    <!-- InstanceBeginEditable name="HeaderScripts" -->
    <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>
    <!-- InstanceEndEditable -->

</head>

<body>
<?php include("includes/config.php");?>
<div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
			<?php
			
			echo'<a class="brand" href="../UMS/index_multi.php">UMS</a>';
			
			?>
            <a class="brand" href="commentpage.php">Health Center</a>

            <div class="nav-collapse">
                <ul class="nav">
                    <li class="active"><a href="resep.php">Home</a></li>
                 
                </ul>
                <ul class="nav pull-right">
                    <li id="fat-menu" class="dropdown open">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo "$utype3." ;echo " $utype1" ;echo " $utype2"; ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                
                
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span2">
           <div class="well sidebar-nav">

            <ul class="thumbnails">

                <ul class="thumbnails">

                <li class="span11">
                        <div class="thumbnail">
                            <img src="ico/admin.png" alt="arrangements" align="center"/>
                            <div class="caption" >
							
                                <h5 align="center">Administrator</h5>
								
								</div>
                        </div>
                </li>

                 </li>

                <li class="span11">
                        <div class="thumbnail">
                            <img src="ico/doctor_small.jpg" alt="arrangements" align="center"/>
                            <div class="caption" >
                                <h5 align="center">Doctor</h5>
														
                            </div>
                        </div>
                </li>

                <li class="span11">
                        <div class="thumbnail">
                            <img src="ico/pharmacist_small.jpg" alt="arrangements" align="center"/>
                            <div class="caption" >
                                <h5 align="center">Pharmacist</h5>

                            </div>
                        </div>
                </li>
				
				<li class="span11">
                        <div class="thumbnail">
                            <img src="ico/doctor_small.jpg" alt="arrangements" align="center"/>
                            <div class="caption" >
                                <h5 align="center">Thechnician</h5>

                            </div>
                        </div>
                </li>
				
				
				<li class="span11">
                        <div class="thumbnail">
                            <img src="ico/student-small.png" alt="arrangements" align="center"/>
                            <div class="caption" >
                                <h5 align="center">Recetionist</h5>
								<ul>
		
		
	</ul>

                            </div>
                        </div>
                </li>



            </ul>
		
		
                
<script>

<!--
function validateForm()
{

//for alphabet characters only
var str=document.form1.first_name.value;
	var valid="abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	//comparing user input with the characters one by one
	for(i=0;i<str.length;i++)
	{
	//charAt(i) returns the position of character at specific index(i)
	//indexOf returns the position of the first occurence of a specified value in a string. this method returns -1 if the value to search for never ocurs
	if(valid.indexOf(str.charAt(i))==-1)
		{
			alert("Name Cannot Contain Numerical Values");
			document.form1.first_name.value="";
			document.form1.first_name.focus();
			return false;
		}
	}
	
if(document.form1.first_name.value=="")
	{
		alert("Name Field is Empty");
		return false;
	}

//for alphabet characters only
var str=document.form1.last_name.value;
	var valid="abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	//comparing user input with the characters one by one
	for(i=0;i<str.length;i++)
	{
	//charAt(i) returns the position of character at specific index(i)
	//indexOf returns the position of the first occurence of a specified value in a string. this method returns -1 if the value to search for never ocurs
		if(valid.indexOf(str.charAt(i))==-1)
		{
			alert("Name Cannot Contain Numerical Values");
			document.form1.last_name.value="";
			document.form1.last_name.focus();
			return false;
		}
	}
	

if(document.form1.last_name.value=="")
	{
		alert("Name Field is Empty");
		return false;
	}

if(document.form1.email.value=="")
	{
		alert("Email Field is Empty");
		return false;
	}
var reg= /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
// /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/ is regular expresion for email id
var address= document.form1.email.value;
// the test() mathod tests for a match in a string. this method returs true if it finds a match, otherwise it returns false
if (reg.test(address)==false)
	{
		alert("Invalid Email Address");
		return false;
	} 

if(document.form1.age.value=="")
	{
		alert("Age Field is Empty");
		document.form1.age.focus();
		return false;
	}
var str= document.form1.age.value;
	var valid="0123456789";
	for(i=0;i<str.length;i++)
	{
		if(valid.indexOf(str.charAt(i))==-1)
		{
			alert("Age can only contain Numerals");
			document.form1.age.value="";
			document.form1.age.focus();
			return false;
		}
	}
//setting age limit
if(document.form1.age.value<18 || document.form1.age.value>60)
	{
		alert("Please Give age in the range of 18 to 60");
		document.form1.age.focus();
		return false;
	}
//Validating Gender to be selected by radio 
if(document.form1.rd_gen[0].checked==false && document.form1.rd_gen[0].checked==false )
	{
		alert("Please Select Gender");
		document.form1.rd_gen.focus();
		return false;
	}

}

	

}
</script>
<script>

<!--
		var arrSubstitutes;
		
		function changeSubstitute(strAction)
		{
			if ((arrSubstitutes.length == 1) && (strAction == 'remove'))
			{
				strDiv = '<table cellpadding="0" cellspacing="0">';
				strDiv += '	<tr>';
				strDiv += '		<td valign="top">';
				strDiv += '			<input id="SubstituteName_-99" Name="SubstituteName_-99" type="text" class="InputText" style="wi</input0px;" value="-">';
				strDiv += '		</td>';
				strDiv += '		<td style="padding-left:3px;" valign="top">';
				strDiv += '			<a href="javascript:BrowseUser(\'-99\');"><img border="0" src="../images/browseuser.png"/></a>';
				strDiv += '			<img src="../images/edit_add.gif" onClick="changeSubstitute(\'add\');" style="cursor: pointer;">';
				strDiv += '			<img src="../images/edit_remove.gif" onClick="changeSubstitute(\'remove\');" style="cursor: pointer;">';
				strDiv += '		</td>';
				strDiv += '	</tr>';
				strDiv += '	<tr><td height="5"></td></tr>';
				strDiv += '</table>';

				arrSubstitutes[0] = -99;
				
				document.getElementById('substitute_div').innerHTML = strDiv;
			}
			else
			{
				arrNewSubstitutes = new Array();
				strDiv = '<table cellpadding="0" cellspacing="0">';
				
				if (strAction == 'add')
				{
					if (arrSubstitutes.length < 1)
					{
						nMax = arrSubstitutes.length + 2;
					}
					else
					{
						nMax = arrSubstitutes.length + 1;
					}
				}
				else
				{
					nMax = arrSubstitutes.length -1;
				}

				for (nIndex = 0; nIndex < nMax; nIndex++)
				{
					nSubstituteId = arrSubstitutes[nIndex];
					if (nSubstituteId > 0 || nSubstituteId == -3) {
						strSubsDiv = 'SubstituteName_' + nSubstituteId;
						strSubsName = document.getElementById(strSubsDiv).value;
					}
					else {
						strSubsName = '-';
						nSubstituteId = nIndex * (-1);
					}
					
					strDiv += '	<tr>';
					strDiv += '		<td valign="top">';
					strDiv += '			<input id="SubstituteName_' +  nSubstituteId + '" Name="SubstituteName_' +  nSubstituteId + '" type="text" class="InputText" style="width: 160px;" value="' + strSubsName + '">';
					strDiv += '		</td>';
					strDiv += '		<td style="padding-left:3px;" valign="top">';
					strDiv += '			<a href="javascript:BrowseUser(' + nSubstituteId + ');"><img border="0" src="../images/browseuser.png"/></a>';
					if (nIndex == 0)
					{
						strDiv += '			<img src="../images/edit_add.gif" onClick=</imggeSubstitute(\'add\');" style="cursor: pointer;">';
						strDiv += '			<img src="../images/edit_remove.gif" onClick="changeSubstitute(\'remove\');" style="cursor: pointer;">';
					}
					strDiv += '		</td>';
					strDiv += '	</tr>';
					strDiv += '	<tr><td height="5"></td></tr>';
					
					arrNewSubstitutes[nIndex] = nSubstituteId;
				}
				strDiv += '</table>';
				
				document.getElementById('substitute_div').innerHTML = strDiv;
				
				arrSubstitutes = arrNewSubstitutes;
			}
		}
		
		function BrowseUser(nId)
		{
			url="selectuser.php?language=en&nId="+nId;
			open(url,"BrowseUser","width=300,height=190,status=yes,menubar=no,resizable=no,scrollbars=no");		
		}

		function SetUser(nId, strName, oldId)
		{
			//if (nId == -333) nIdTEST = '';
			//alert('ID: ' + nId + '\nName: ' + strName + '\nAlte Id: ' + oldId);
			
			var strDiv = 'SubstituteName_' + oldId;
			
			objSubstitude = document.getElementById(strDiv);
			
			objSubstitude.value = strName;
			objSubstitude.id 	= 'SubstituteName_' + nId;
			objSubstitude.name 	= 'SubstituteName_' + nId;
			
			for (index = 0; index < arrSubstitutes.length; index++) {
				if (arrSubstitutes[index] == oldId) {
					arrSubstitutes[index] = nId;
				}
			}
		}

		function validate(objForm)
		{
			var objForm = document.forms["EditUser"];
			objForm.strFirstName.required = 1;
			objForm.strFirstName.err = "You must enter a Firstname";
			objForm.strLastName.required = 1;
			objForm.strLastName.err = "You must enter a Lastname";
			
			objElementAdmin = document.getElementById("UserAccesslevelAdmin");
			objElementReadOnly = document.getElementById("UserAccesslevelReadOnly");
			if ( (objElementAdmin.checked == true) || (objElementReadOnly.checked == true) )
			{
				objForm.Password1.required = 1;
				objForm.Password1.err = "You must enter a password";
				objForm.Password2.required = 1;
				objForm.Password2.err = "You must retype the password";
			}
			else
			{
				objForm.Password1.required = 0;
				objForm.Password2.required = 0;
			}
			
			bResult = jsVal(objForm);
			
			if (bResult == true)
			{
				if (objForm.Password1.value != objForm.Password2.value)
				{
					alert ('The passwords didn\'t match');
					bResult = false;
				}
			}
			
			return bResult	;
		}
		
		function checkValue()
		{
			var tempIndex, choiceVal, tempIndex2, choiceVal2
			tempIndex = document.EditUser.strIN_Email_Value.selectedIndex
			choiceVal = document.EditUser.strIN_Email_Value.options[tempIndex].text
			tempIndex2 = document.EditUser.strIN_Email_Format.selectedIndex
			choiceVal2 = document.EditUser.strIN_Email_Format[tempIndex2].text
			
			if ((tempIndex==2)&&(tempIndex2==0))
			{
				if ((choiceVal=="IFrame")&&(choiceVal2=="Text"))
				{
					window.alert("'IFrames' only works with HTML!")
					document.EditUser.strIN_Email_Value[2].selected = false;
					document.EditUser.strIN_Email_Value[0].selected = true;
				}
			}		
		}
		
		
		
		
		
		var arrSettings = new Array('userdetails', 'otherdetails');
		
		function showSettings(strSettings)
		{
			nMax = arrSettings.length;
			for (nIndex = 0; nIndex < nMax; nIndex++)
			{
				strCurSettings = arrSettings[nIndex];
				strDiv = strCurSettings + '_div';
				
				if (strCurSettings == strSettings)
				{
					document.getElementById(strDiv).style.display = 'block';
					document.getElementById(strCurSettings).style.background = '#8e8f90';
					document.getElementById(strCurSettings).style.cursor = 'auto';
				}
				else
				{
					document.getElementById(strDiv).style.display = 'none';
					document.getElementById(strCurSettings).style.background = '#bbb';
					document.getElementById(strCurSettings).style.cursor = 'pointer';
				}
			}

			if (strSettings == 'userdetails')
			{
				checkIndividual();
			}
			else
			{
				document.getElementById('indiLayer').style.display = 'none';
			}
		}
		
		function changeStyle(strTd, strAction)
		{
			strDiv = strTd + '_div';
			objDiv = document.getElementById(strDiv).style.display;
			
			if (objDiv == 'none')
			{
				objTd = document.getElementById(strTd);
				switch(strAction)
				{
					case 'over':
						objTd.style.background = '#ffc056';
						objTd.style.cursor = 'pointer';
						break;
					case 'out':
						objTd.style.background = '#bbb';
						break;
				}
			}
		}
		
		function checkIndividual()
		{
			var individualCheckbox = document.getElementById('IN_bIndividualEmail').checked;
			var indiLayer = document.getElementById('indiLayer');
			
			if (!individualCheckbox)
			{
				var top		= document.getElementById('individualDiv').offsetTop + document.getElementById('userdetails_div').offsetTop;
				var left	= document.getElementById('individualDiv').offsetLeft + document.getElementById('userdetails_div').offsetLeft;
				
				indiLayer.style.display = 'block';
				indiLayer.style.top		= top + 'px';
				indiLayer.style.left	= left + 'px';
				
				//alert(left);
			}
			else
			{
				indiLayer.style.display = 'none';
			}
		}
	//-->
	
</script>
                       
                

            </ul>

        </div>
    
        </div>
        <!--/span-->
		<button><a href="resep.php">Back</a></button>
        <div class="span10"><!-- InstanceBeginEditable name="pagecontent" -->
		<div class="span10 offset2">
		
		<h1> Add New Staff Details</h1>
                            <div class="tab-pane active" id="1">
                             <form action="staff.php" method="post" name="frm_signup" id="third" enctype="multipart/form-data" onsubmit="return validate(this);" >
	<table cellpadding="0" cellspacing="0">
		<tr>
			<td align="left" valign="top" onClick="showSettings('userdetails');" style="padding: 2px 6px 2px 6px; background: #8e8f90; border: 1px solid #888; border-bottom: 0px; font-weight: bold; color: #fff;" onMouseOver="changeStyle('userdetails', 'over');" onMouseOut="changeStyle('userdetails', 'out');" id="userdetails">
				User Details			</td>
			<td align="left" valign="top" onClick="showSettings('otherdetails');" style="padding: 2px 6px 2px 6px; background: #bbb; border: 1px solid #888; border-left: 0px; border-bottom: 0px; font-weight: bold; color: #fff;" onMouseOver="changeStyle('otherdetails', 'over');" onMouseOut="changeStyle('otherdetails', 'out');" id="otherdetails">
				Other Details		</td>
			
		</tr>
	</table>
	
	
	<div id="userdetails_div">
		<table width="550" cellspacing="0" cellpadding="3">
			<tr><td colspan="2" height="10px"></td></tr>
	        <tr>
				<td width="190">Staff Reg.No</td>
				<td>:</td>
				<td>
					<input type="text" name="sregno" id="sregno" class="InputText" style="width: 160px;" value="">
				</td>
			</tr>
	        <tr>
				<td>Faculty</td>
				<td>:</td>
				<td>
					<select  name="faculty" id="faculty" style="width:173px;">
	                         <option value="faculty">--Select--</option>
	                         <option value="Science">Science</option>
							  <option value="Arts">Arts</option>
                             <option value="Management">Management</option>
	                         <option value="Low">Low</option>
							 <option value="Media">Media</option>
	                         </select>  
				</td>
			</tr>
	        <tr>
				<td>Date Of Birth</td>
				<td>:</td>
				<td>
					<input type="date" name="dob" id="dob" class="InputText" style="width: 159px;" value="">
				</td>
			</tr>		
		
	        <tr>
				<td>Full Name</td>
				<td>:</td>
				<td>
					<input type="text" name="fullname" id="fullname"  class="InputText" style="width: 160px;">
				</td>
			</tr>
	        <tr>
				<td>Residential Address</td>
				<td>:</td>
				<td>
					<textarea name="raddress" id="fbody" rows="2" style="width: 160px;"></textarea>
				</td>
			</tr>
			<tr>
				<td>Permanent Address</td>
				<td>:</td>
				<td>
					<textarea name="paddress" id="fbody" rows="2" style="width: 160px;"></textarea>
				</td>
			</tr>
			<tr>
				<td>Age</td>
				<td>:</td>
				<td>
					<input type="text" name="age" id="age" class="InputText" style="width: 159px;" value="">
				</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td>
					<input type="radio" name="rd_gen" id="rd_male" value="Male">Male &nbsp;&nbsp;&nbsp;&nbsp;
                                 <input type="radio" name="rd_gen" id="rd_female" value="Female">Female
				</td>
			</tr>
		
			
		</table>
	</div>


	<div id="otherdetails_div" style="display: none;">
		<table  width="550" cellspacing="0" cellpadding="3">
			<tr><td height="10px"></td></tr>
			<tr>
				<td>Designation</td>
				<td>:</td>
				<td>
					<textarea name="designation" id="designation"  rows="2" style="width: 160px;"></textarea>
				</td>
			</tr>
	        <tr>
				<td>Department</td>
				<td>:</td>
				<td>
					<textarea name="department" id="department"  rows="2" style="width: 160px;"></textarea>
				</td>
			</tr>
			
			
			
			 <tr>
				<td>Marital State</td>
				<td>:</td>
				<td>
					<input type="radio" name="rd_ms" id="rd_married" value="married">Married &nbsp;&nbsp;&nbsp;&nbsp;
                                 <input type="radio" name="rd_ms" id="rd_single" value="single">Single
				</td>
			</tr>
			<tr><td height="10px"></td></tr>
			<tr>
			<td align="center"> <input type="submit" name="submitMain" value="Insert" onclick="return done(this.form);" />
			</td>
			</tr>
		</table>
	</div>
	</form>
	</div>
    </div>
 <!--/row-->
<!-- InstanceEndEditable --></div>
 <!--/span-->
    </div>
    <!--/row-->
<?php 
  if(isset($_POST['submitMain']))
  {
   if (isset($_REQUEST["rd_gen"]))
	{
		$gender = $_REQUEST['rd_gen'];
		}
		if (isset($_REQUEST["rd_ms"]))
	{
		$martialstate = $_REQUEST['rd_ms'];
		}
    //$date=$_POST['date'];
	$sregno=$_POST['sregno'];	
	$faculty=$_POST['faculty'];
	$dob=$_POST['dob'];
	$fullname=$_POST['fullname'];    
	$raddress=$_POST['raddress'];
	$paddress=$_POST['paddress'];
	$age=$_POST['age'];
    //$gender=$_POST['gender'];
	$designation=$_POST['designation'];
	$department=$_POST['department'];
	//$martialstate=$_POST['martialstate'];
	include('conn.php');
	$query1 = "INSERT INTO  staff_details (sregno,faculty,dob,fullname,raddress,paddress,age,gender,designation,department,martialstate)
    VALUES ('$sregno','$faculty','$dob','$fullname','$raddress','$paddress','$age','$gender','$designation','$department','$martialstate')";
	$result1=mysqli_query($conn,$query1);
	include('conn.php');
	$query2= "INSERT INTO registration (`regno`)VALUES ('$sregno')";
	$result2=mysqli_query($conn,$query2);
	
	if(!$result1&&!$result2)
	{
		die(mysqli_error($conn));
		echo "<script>alert('Your account not created !!');</script>";
	}
   
   echo "<script>alert('Your account has been created !!');</script>";
	
  }
 ?>
<!--/.fluid-container-->
<div> 
		  <div id="push"></div>
    </div>
<div id="footer">
      <div class="container">
        <p align="center" class="muted credit"><strong>&copy; 2017  Health Center University of Jaffna</strong></br> <a class="link" href="index.php" target="_blank" rel="nofollow">Health Center</a> University of Jaffna</p>
      </div>
    </div>
	</div>
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap-tab.js"></script>
<script src="js/bootstrap-dropdown.js"></script>
<script src="js/bootstrap-modal.js"></script>
<script src="js/bootstrap-typeahead.js"></script>
<!-- InstanceBeginEditable name="scripts" -->
<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
