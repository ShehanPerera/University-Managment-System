
<?php
include ('conn.php'); //connect the connection page
 include("../Hostel/HMS/lib/session.php");
 // if the session not yet started 
  //session_start();
       if((!isset($_SESSION['Loged_User']))||(($_SESSION['res']!="madmin")&& (!in_array("madmin",$_SESSION['position1']))))
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
                    <li class="active"><a href="index1.php">Home</a></li>
                 
                </ul>
                <ul class="nav pull-right">
                    <li id="fat-menu" class="dropdown open">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="logout.php">Logout</a></li>
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
                            <img src="ico/student-small.png" alt="arrangements" align="center"/>
                            <div class="caption" >
                                <h5 align="center">Student</h5>
								
                            </div>
                        </div>
                </li>

                
<script>

<!--
function checkLengthOfPasword(form)
	{
	var pass=form.pass.value;
		if(pass.length<10)
		{
			window.alert("Your Password shoul have lenght greater than 10!");
			form.pass.value="";
			form.pass.focus();
			return false;
		}
	else 
	return true;
	}
function validateForm()
{

//for alphabet characters only
var str=document.form.first_name.value;
	var valid="abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	//comparing user input with the characters one by one
	for(i=0;i<str.length;i++)
	{
	//charAt(i) returns the position of character at specific index(i)
	//indexOf returns the position of the first occurence of a specified value in a string. this method returns -1 if the value to search for never ocurs
	if(valid.indexOf(str.charAt(i))==-1)
		{
			alert("Name Cannot Contain Numerical Values");
			document.form.first_name.value="";
			document.form.first_name.focus();
			return false;
		}
	}
	
if(document.form.first_name.value=="")
	{
		alert("Name Field is Empty");
		return false;
	}

//for alphabet characters only
var str=document.form.last_name.value;
	var valid="abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	//comparing user input with the characters one by one
	for(i=0;i<str.length;i++)
	{
	//charAt(i) returns the position of character at specific index(i)
	//indexOf returns the position of the first occurence of a specified value in a string. this method returns -1 if the value to search for never ocurs
		if(valid.indexOf(str.charAt(i))==-1)
		{
			alert("Name Cannot Contain Numerical Values");
			document.form.last_name.value="";
			document.form.last_name.focus();
			return false;
		}
	}
	

if(document.form.last_name.value=="")
	{
		alert("Name Field is Empty");
		return false;
	}

if(document.form.email.value=="")
	{
		alert("Email Field is Empty");
		return false;
	}
var reg= /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
// /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/ is regular expresion for email id
var address= document.form.email.value;
// the test() mathod tests for a match in a string. this method returs true if it finds a match, otherwise it returns false
if (reg.test(address)==false)
	{
		alert("Invalid Email Address");
		return false;
	} 

if(document.form.age.value=="")
	{
		alert("Age Field is Empty");
		document.form.age.focus();
		return false;
	}
var str= document.form.age.value;
	var valid="0123456789";
	for(i=0;i<str.length;i++)
	{
		if(valid.indexOf(str.charAt(i))==-1)
		{
			alert("Age can only contain Numerals");
			document.form.age.value="";
			document.form.age.focus();
			return false;
		}
	}
//setting age limit
if(document.form.age.value<18 || document.form.age.value>60)
	{
		alert("Please Give age in the range of 18 to 60");
		document.form.age.focus();
		return false;
	}
//Validating Gender to be selected by radio 
if(document.form.rd_gen[0].checked==false && document.form.rd_gen[0].checked==false )
	{
		alert("Please Select Gender");
		document.form.rd_gen.focus();
		return false;
	}
	if(pass=="")
		{
			window.alert("Enter the password!");
			form.pass.focus();
			return false;
		} 
if(repass=="")
		{
			window.alert("Re Enter the password!");
			form.repass.focus();
			return false;
		} 
if(pass!=repass)
		{
			window.alert("Your password not match");
			form.pass.value="";
			form.repass.value="";
			form.pass.focus();
			return false;
		} 

else
			return true;
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
		
		
		
		
		
		var arrSettings = new Array('meddetails');
		
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

			if (strSettings == 'meddetails')
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
				var top		= document.getElementById('individualDiv').offsetTop + document.getElementById('meddetails_div').offsetTop;
				var left	= document.getElementById('individualDiv').offsetLeft + document.getElementById('meddetails_div').offsetLeft;
				
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
		
        <div class="span10"><!-- InstanceBeginEditable name="pagecontent" -->
		<div class="span10 offset2">
		
		<h1> Add New Medical Staff Details</h1>
                            <div class="tab-pane active" id="1">
                             <form action="User_Registration.php" method="post" name="frm_signup" id="third" enctype="multipart/form-data" onsubmit="return validate(this);" >
	<table cellpadding="0" cellspacing="0">
		<tr>
			<td align="left" valign="top" onClick="showSettings('meddetails');" style="padding: 2px 6px 2px 6px; background: #8e8f90; border: 1px solid #888; border-bottom: 0px; font-weight: bold; color: #fff;" onMouseOver="changeStyle('meddetails', 'over');" onMouseOut="changeStyle('meddetails', 'out');" id="meddetails">
				Medical Staff Details			</td>
			
			
		</tr>
	</table>
	
	
	<div id="meddetails_div">
		<table width="550" cellspacing="0" cellpadding="3">
			<tr><td colspan="2" height="10px"></td></tr>
	        <tr>
				<td>User Type</td>
				<td>:</td>		
				<td>
					<select  name="type" id="type" style="width:173px;">
	                         <option value="type">--Select--</option>
	                         <option value="doctor">Doctor</option>
							  <option value="pharmacist">Pharmacist</option>
                             <option value="admin">Admin</option>
	                          </select>  
				</td>
			</tr>
	        <tr>
				<td>Name</td>
				<td>:</td>
				<td>
					<input type="text" name="name" id="name"  class="InputText" style="width: 160px;">
				</td>
			</tr>
	        <tr>
				<td>Telephone No</td>
				<td>:</td>
				<td>
					<input type="text" id="tpno" name="tpno"   style="width: 160px;"></textarea>
				</td>
			</tr>
			<tr>
				<td>E-Mail</td>
				<td>:</td>
				<td>
					<input type="text" id="email" name="email"   style="width: 160px;"></textarea>
				</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td>
					<input type="text" name="uname" id="uname"  class="InputText" style="width: 160px;">
				</td>
			</tr>
			<tr>
				 <td><h7>Password</h7></td>
				 <td>:</td>
				 <td><h7><input type="password" name="password" onChange="return(checkLengthOfPasword(form));" size="40" class="InputText" style="width: 160px;"></td>
			 </tr>
			 <tr>
				 <td></td>
				 <td></td>
				 <td>Password length should be more than ten</td>
			 </tr>
			 <tr>
				 <td><h7>RePassword</h7></td>
				 <td>:</td>
				 <td><h7><input type="password" name="repassword"  size="40" class="InputText" style="width: 160px;"></td>
			 </tr> 			<tr><td height="5"></td></tr>
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
include('conn.php');
  if(isset($_POST['submitMain']))
  {
    //$date=$_POST['date'];
	$type=$_POST['type'];	
	$name=$_POST['name'];
	$tpno=$_POST['tpno'];
	$email=$_POST['email'];
	$uname=$_POST['uname'];    
	$password=$_POST['password'];
	$repassword=md5($password);
	$query = "INSERT INTO  user (user_type,name,phoneno,email,password,user_name)
    VALUES ('$type','$name','$tpno','$email','$password','$uname')";
   if(!mysqli_query($conn,$query))
	{
		die(mysqli_error($conn));
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
        <p align="center" class="muted credit"><strong>&copy; 2014  Health Center University of Jaffna</strong></br> <a class="link" href="index.php" target="_blank" rel="nofollow">Health Center</a> University of Jaffna</p>
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


