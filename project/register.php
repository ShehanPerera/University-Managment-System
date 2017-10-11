<?php
include ('conn.php'); //connect the connection page
include("../Hostel/HMS/lib/session.php");
 // if the session not yet started 
  //session_start();
  $utype1=$_SESSION['usertype3'];
 $utype2=$_SESSION['usertype1'];
 $utype3=$_SESSION['usertype2'];
      if((!isset($_SESSION['Loged_User']))||($_SESSION['res']!="receptionist")&& (!in_array("technician",$_SESSION['position1'])))
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
<?php include ('conn.php'); ?>
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
				

                            </div>
                        </div>
                </li>



            </ul>
			
       <script type="text/javascript">

  function checkForm(form)
  {
    if(form.username.value == "") {
      alert("Error: Username cannot be blank!");
      form.username.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.username.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.username.focus();
      return false;
    }

    if(form.pwd1.value != "" && form.pwd1.value == form.pwd2.value) {
      if(form.pwd1.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.pwd1.focus();
        return false;
      }
      if(form.pwd1.value == form.username.value) {
        alert("Error: Password must be different from Username!");
        form.pwd1.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.pwd1.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.pwd1.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.pwd1.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.pwd1.focus();
      return false;
    }

    alert("You entered a valid password: " + form.pwd1.value);
    return true;
  }

</script>



		
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
		
		
		
		
		
		var arrSettings = new Array('userdetails', 'parentdetails', 'pasthistory','familyhistory');
		
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
	

	
	
function handleCheck(y)
        {
            
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("error-notices").innerHTML = this.responseText;

            }
            };
            xhttp.open("GET", "editcheckphar.php?x="+y, true);
            xhttp.send();
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
		
		<h1> Add New Student Details</h1>
                            <div class="tab-pane active" id="1">
                                <form action="register.php" method="post" name="frm_signup" id="third" enctype="multipart/form-data" onsubmit="return validate(this);" >
	<table cellpadding="0" cellspacing="0">
		<tr>
			<td align="left" valign="top" onClick="showSettings('userdetails');" style="padding: 2px 6px 2px 6px; background: #8e8f90; border: 1px solid #888; border-bottom: 0px; font-weight: bold; color: #fff;" onMouseOver="changeStyle('userdetails', 'over');" onMouseOut="changeStyle('userdetails', 'out');" id="userdetails">
				Student Details			</td>
			<td align="left" valign="top" onClick="showSettings('parentdetails');" style="padding: 2px 6px 2px 6px; background: #bbb; border: 1px solid #888; border-left: 0px; border-bottom: 0px; font-weight: bold; color: #fff;" onMouseOver="changeStyle('parentdetails', 'over');" onMouseOut="changeStyle('parentdetails', 'out');" id="parentdetails">
				Parent Details		</td>
			<td align="left" valign="top" onClick="showSettings('pasthistory');" style="padding: 2px 6px 2px 6px; background: #bbb; border: 1px solid #888; border-left: 0px; border-bottom: 0px; font-weight: bold; color: #fff;" onMouseOver="changeStyle('pasthistory', 'over');" onMouseOut="changeStyle('pasthistory', 'out');" id="pasthistory">
				Past History			</td>
			<td align="left" valign="top" onClick="showSettings('familyhistory');" style="padding: 2px 6px 2px 6px; background: #bbb; border: 1px solid #888; border-left: 0px; border-bottom: 0px; font-weight: bold; color: #fff;" onMouseOver="changeStyle('familyhistory', 'over');" onMouseOut="changeStyle('familyhistory', 'out');" id="familyhistory">
				Family History			</td>
		</tr>
	</table>
	
	
	<div id="userdetails_div">
		<table width="550" cellspacing="0" cellpadding="3">
			<tr><td colspan="2" height="10px"></td></tr>
	        <tr>
				<td width="190">Student_Reg_No:</td>
				<td>:</td>
				<td>
					<input name="stregno" id="stregno" type="text" class="InputText" style="width: 160px;" value="">
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
				<td>Date</td>
				<td>:</td>
				<td>
					<input type="date" name="date" id="date" class="InputText" style="width: 159px;" value="">
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
				<td>Date of Birth</td>
				<td>:</td>
				<td>
					<input type="date" name="dob" id="dob" class="InputText" style="width: 159px;" value="">
				</td>
			</tr>
			<tr>
				<td>Last School Attended</td>
				<td>:</td>
				<td>
					<input type="text" name="lastsch" id="lastsch" class="InputText" style="width: 160px;">
				</td>
			</tr>
			
			
			
			
			
			<tr>
				 <td><h7>Password</h7></td>
				 <td>:</td>
				 <td><h7><input type="password" name="pwd1" onsubmit=" return checkForm(this);" size="40" class="InputText" style="width: 160px;"></td>
			 </tr>
			 <tr>
				 <td></td>
				 <td></td>
				 <td>Password length should be more than ten</td>
			 </tr>
			 <tr>
				 <td><h7>RePassword</h7></td>
				 
				 <td>:</td>
				 <td><h7><input type="password" name="pwd2"  size="40" class="InputText" style="width: 160px;"></td>
			 </tr> 
		
		</table>
	</div>


	<div id="parentdetails_div" style="display: none;">
		<table  width="550" cellspacing="0" cellpadding="3">
			<tr><td height="10px"></td></tr>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td>
					<input type="text" name="pname" id="pname"  class="InputText" style="width: 160px;">
				</td>
			</tr>
	        <tr>
				<td>Address</td>
				<td>:</td>
				<td>
					<textarea name="address" id="fbody" rows="2" style="width: 160px;"></textarea>
				</td>
			</tr>
			 <tr>
				<td>Telephone No</td>
				<td>:</td>
				<td>
					<input type="text" id="tpno" name="tpno"   style="width: 160px;"></textarea>
				</td>
			</tr>
			
		</table>
	</div>
	
	
	<div id="pasthistory_div" style="display: none;">
		<table  width="550" cellspacing="0" cellpadding="3">
		
		
		<tr><td height="10px"></td></tr>
				<tr>
                <td><div align="left"><b>If you have suffered from any of the following illness tick in the box</b></div></td>
				<td>:</td>
                 <td width="200" align="left">
				
				 <input type="checkbox" name="illness" id="poll" value="poll">Pollomyelitis </br>
                                 <input type="checkbox" name="illness" id="mum" value="mum">Mumps </br>
								 <input type="checkbox" name="illness" id="chpx" value="chpx">Chicken pox </br>
								 <input type="checkbox" name="illness" id="trubu" value="trbu">Tuberculosis </br>
								 <input type="checkbox" name="illness" id="mala" value="mala">Malaria</br>
								 <input type="checkbox" name="illness" id="ccgh" value="ccgh">Chronic Cough </br>
								 <input type="checkbox" name="illness" id="vsld" value="vsld">Visual Defects</br>
								 <input type="checkbox" name="illness" id="hrd" value="chpx">Hearing Defects</br>
								 <input type="checkbox" name="illness" id="brash" value="brash">Bronchral Asthma</br>
								 <input type="checkbox" name="illness" id="dental" value="dental">Dental Problem  </br>
								  <input type="checkbox" name="illness" id="frace" value="frace">Fractures&nbsp</br></td>
              </tr>
			  <tr>
				<td><b>Have you undergone any operation if so give details </b></td>
				<td>:</td>
				<td>
					<textarea name="details" id="fbody" rows="2" style="width: 160px;"></textarea>
				</td>
			</tr>
			
			<tr><td height="10px"></td></tr>
			<tr>
			<td align="center"> <input type="button" Name="button" id="Password2" value="Next"  onClick="showSettings('familyhistory');"  id="familyhistory">
			</td>
			</tr>
		</table>
	</div>
	
	
	<div id="familyhistory_div" style="display: none;">
		<table  width="550" cellspacing="0" cellpadding="3">
			<tr><td height="10px"></td></tr>
			<tr>
				<td><b>Father</b></td>
				
				<td>&nbsp;</td>
			</tr>
	        <tr>
			<td>Occupation</td>
			<td>:</td>
				<td>
					<input type="text" name="foccup" id="foccup" class="InputText" style="width: 160px;">
				</td>
			</tr>
			 <tr>
				<td>Age</td>
				<td>:</td>
				<td>
					<input type="text" name="fage" id="fage" class="InputText" style="width: 160px;">
				</td>
			</tr>
			<tr>
				<td>Illness</td>
				<td>:</td>
				<td>
					<input type="text" name="fill" id="fill" class="InputText" style="width: 160px;">
				</td>
			</tr>
			<tr>
				<td>If dead cause of death</td>
				<td>:</td>
				<td><input type="radio" name="rd_fstate" id="rd_falive" value="alive">Alive &nbsp;&nbsp;&nbsp;&nbsp;
                                 <input type="radio" name="rd_fstate" id="rd_fdeath" value="death">Death</td>
			</tr>
			<tr>
				<td><b>Mother</b></td>
				
				<td>&nbsp;</td>
			</tr>
	        <tr>
			<td>Occupation</td>
			<td>:</td>
				<td>
					<input type="text" name="moccup" id="moccup class="InputText" style="width: 160px;">
				</td>
			</tr>
			 <tr>
				<td>Age</td>
				<td>:</td>
				<td>
					<input type="text" name="mage" id="mage" class="InputText" style="width: 160px;">
				</td>
			</tr>
			<tr>
				<td>Illness</td>
				<td>:</td>
				<td>
					<input type="text" name="mill" id="mill" class="InputText" style="width: 160px;">
				</td>
			</tr>
			<tr>
				<td>If dead cause of death</td>
				<td>:</td>
				<td><input type="radio" name="rd_mstate" id="rd_falive" value="alive">Alive &nbsp;&nbsp;&nbsp;&nbsp;
                                 <input type="radio" name="rd_mstate" id="rd_fdeath" value="death">Death</td>
			</tr>
			<tr>
				<td><b>Brother</b></td>
				
				<td>&nbsp;</td>
			</tr>
	        <tr>
			<td>Occupation</td>
			<td>:</td>
				<td>
					<input type="text" name="boccup" id="boccup" class="InputText" style="width: 160px;">
				</td>
			</tr>
			 <tr>
				<td>Age</td>
				<td>:</td>
				<td>
					<input type="text" name="bage" id="bage" class="InputText" style="width: 160px;">
				</td>
			</tr>
			<tr>
				<td>Illness</td>
				<td>:</td>
				<td>
					<input type="text" name="bill" id="bill" class="InputText" style="width: 160px;">
				</td>
			</tr>
			<tr>
				<td>If dead cause of death</td>
				<td>:</td>
				<td><input type="radio" name="rd_bstate" id="rd_falive" value="alive">Alive &nbsp;&nbsp;&nbsp;&nbsp;
                                 <input type="radio" name="rd_bstate" id="rd_fdeath" value="death">Death</td>
			</tr>
			<tr>
				<td><b>Sister</b></td>
				
				<td>&nbsp;</td>
			</tr>
	        <tr>
			<td>Occupation</td>
			<td>:</td>
				<td>
					<input type="text" name="soccup" id="soccup" class="InputText" style="width: 160px;">
				</td>
			</tr>
			 <tr>
				<td>Age</td>
				<td>:</td>
				<td>
					<input type="text" name="sage" id="sage" class="InputText" style="width: 160px;">
				</td>
			</tr>
			<tr>
				<td>Illness</td>
				<td>:</td>
				<td>
					<input type="text" name="sill" id="sill" class="InputText" style="width: 160px;">
				</td>
			</tr>
			<tr>
				<td>If dead cause of death</td>
				<td>:</td>
				<td><input type="radio" name="rd_sstate" id="rd_falive" value="alive">Alive &nbsp;&nbsp;&nbsp;&nbsp;
                                 <input type="radio" name="rd_sstate" id="rd_fdeath" value="death">Death</td>
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
   
   if (isset($_REQUEST["rd_fstate"]))
	{
		$fstate = $_REQUEST['rd_fstate'];
		}
		
		if (isset($_REQUEST["rd_mstate"]))
	    {
		$mstate = $_REQUEST['rd_mstate'];
		}
		
		if (isset($_REQUEST["rd_bstate"]))
	   {
	   $bstate = $_REQUEST['rd_bstate'];
	  }
	if (isset($_REQUEST["rd_sstate"]))
	  {
	  	   $sstate = $_REQUEST['rd_sstate'];

	 }
		//$fstate = $_REQUEST['rd_fstate'];
//		$fstate = $_REQUEST['rd_fstate'];
	//	$mstate = $_REQUEST['rd_mstate'];
		//$bstate = $_REQUEST['rd_bstate'];
		//$sstate = $_REQUEST['rd_sstate'];
    //$date=$_POST['date'];
	$stregno=$_POST['stregno'];	
	$faculty=$_POST['faculty'];
	$date=$_POST['date'];	
	$fullname=$_POST['fullname']; 
	
	$raddress=$_POST['raddress'];
	$paddress=$_POST['paddress'];
	$dob=$_POST['dob'];
	$lastschool=$_POST['lastsch'];
	$pass = $_POST['pass'];
	$encryptpass=md5($pass);
	$pname=$_POST['pname'];
	$address=$_POST['address'];
	$telephone=$_POST['tpno'];
	
	
	$foccupation=$_POST['foccup'];
	$fage=$_POST['fage'];
	$fill=$_POST['fill'];	
    $fstate=$_POST['fstate'];
	
	$moccupation=$_POST['moccup'];
	$mage=$_POST['mage'];
	$mill=$_POST['mill'];	
    //$mstate=$_POST['rd_mstate'];
	
	$boccupation=$_POST['boccup'];
	$bage=$_POST['bage'];
	$bill=$_POST['bill'];	
    //$bstate=$_POST['rd_bstate'];
	
	$soccupation=$_POST['soccup'];
	$sage=$_POST['sage'];
	$sill=$_POST['sill'];	
    //$sstate=$_POST['rd_sstate'];
	 include('conn.php');
	$query1 = "INSERT INTO student_details (`stregno`, `faculty`, `date`, `fullname`, `raddress`, `paddress`, `dob`, `lastsch`, `password`,`usertype`,`pname`, `address`, `tpno`,  `foccup`, `fage`, `fill`, `fstate`, `moccup`, `mage`, `mill`, `mstate`, `boccup`, `bage`, `bill`, `bstate`, `soccup`, `sage`, `sill`, `sstate`) 
	VALUES ('$stregno', '$faculty', '$date', '$fullname', '$raddress', '$paddress', '$dob', '$lastschool','$encryptpass','student', '$pname', '$address', '$telephone', '$foccupation', '$fage', '$fill', '$fstate', '$moccupation', '$mage', '$mill', '$mstate', '$boccupation', '$bage', '$bill', ' $bstate', '$soccupation', '$sage', '$sill', '$sstate')";
	$result1=mysqli_query($conn,$query1);	
				include('conn.php');
	$query2= "INSERT INTO registration (`regno`)VALUES ('$stregno')";
	$result2=mysqli_query($conn,$query2);
	
	//$query3="INSERT INTO  `healthcen`.`user` (`usertype` ,`name` ,`phoneno` ,`password` ,`username`)
			//VALUES ('student',  '$fullname',  '$telephone',  '$pass',  '$stregno')";
	//$result3=mysql_query($query3);		

    if(!$result1 && !$result2)
	{
		die(mysqli_error($conn));
		 echo "<script>alert('Your account not created !!');</script>";
	}
   
    echo "<script>alert('Your account has been created !!');</script>";
	//echo "<script>window.location='contactadmin.php';</script>";
  }
 


 ?>


   <div> 
		  <div id="push"></div>
    </div>
<div id="footer">
      <div class="container">
        <p align="center" class="muted credit"><strong>&copy; 2017  Health Center University of Jaffna</strong></br> <a class="link" href="index.php" target="_blank" rel="nofollow">Health Center</a> University of Jaffna</p>
      </div>
    </div>

</div>	



<!--/.fluid-container-->

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
