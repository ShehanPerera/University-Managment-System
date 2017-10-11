
<!-- session -->
<?php 
  include("../../lib/session.php");
  if(!isset($ses_conform))
  {
    header('Location: ../../index.php');
  }
 ?>
 <!-- Page Start -->
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Student Registation</title>
      <link rel="stylesheet" href="../../css/style 1.css">
</head>

<body>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registation Form</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

      <form action="student_registation" method="post">
      
        <h1>Registation</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          
		  <label for="name"> Full Name:</label>
          <input type="text" id="name" name="full_name">
		  
		  <label for="name">Name with Initial:</label>
          <input type="text" id="iname" name="ini_name"> 
  
		  <table>
				<tr>
					<td><label for="reg">Registation No:</label>
					<input type="text" id="regNo" name="Reg_no"></td>
					
					<td> 
						<label for="cource">Cource of Study:</label>
						<input type="text" id="cource" name="cource">
					</td>
					
				</tr>
				
				<tr>
					<td>
						<label for="nic">NIC No:</label>
						<input type="text" id="nic" name="nic">
					</td>
					<td>
						<label for="dob">Date of Birth:</label>
						<input type="date" id="dob" name="dob">
					</td>
				</tr>
		  </table>
		 
		 <input type="file" name="filename" accept="image/gif, image/jpeg, image/png">
		 
		 
          <label>sex:</label>
          <input type="radio" id="male" value="male" name="sex"><label for="male" class="light">Male</label><br>
          <input type="radio" id="female" value="female" name="sex"><label for="female" class="light">Female</label><br><br>
          
		  Faculty:
			<select name="Faculty">
			 <optgroup label="Faculties:">
				<option value="Agriculture">Agriculture</option>
				<option value="Arts" checked>Arts</option>
				<option value="Engineering">Engineering</option>
				<option value="commerce">Management Studies & Commerce</option>
				<option value="medicine" checked>Medicine</option>
				<option value="science" checked>Science</option>
				<option value="technology" checked>Technology</option>
				
			</select>
		
		
		
        </fieldset>
        
        <fieldset>
          <legend><span class="number">2</span>Guardient Details</legend>
          
		  <table >
			<tr>
				<td>
					<label for="name">Name:</label>
					<input type="text" id="name" name="name">
				</td>
				<td>
					<label for="name">Relationship:</label>
					<input type="text" id="relationship" name="relationship">
				</td>
			</tr>
			
			<tr>
				<td rowspan=2>
					<label for="address">Address:</label>
					<textarea id="adress" name="address"rows="7" cols="40" ></textarea>
				</td>
				<td>
					<label for="contact">Contact No:</label>
					<input type="tel" id="contact" name="contact">
				</td>
			</tr>
			
			<tr>
			
				<td>
					<label for="police">Police Station:</label>
					<input type="text" id="Police" name="police">
				</td>
			</tr>
			<tr>
				<td colspan=2 align="Center">
					<label for="emergency">Emergency Contact:</label>
				</td>
			</tr>
			<tr>
				<td>
					<label for="emergencyname">Name:</label>
					<input type="text" id="ename" name="ename">	
				</td>
				
				<td>
					<label for="emergencytel">Contact No:</label>
					<input type="tel" id="eno" name="eno">
				</td>
				
			</tr>
		  </table>  
        </fieldset>
		
		
        <fieldset>
			 <legend><span class="number">3</span>Contact Details</legend>
			
			<table >
				<tr>
					<td>
						<label for="rcontact">Contact No:</label>
						<input type="tel" id="rcontact" name="rcontact">
					</td>
					
					<td>
						<label for="mail">Email:</label>
						<input type="email" id="mail" name="user_email">
					</td>
				</tr>
				<tr>
					<td rowspan=2 COLSPAN=2>
						<label for="raddress">Residential Address:</label>
						<textarea id="radress" name="raddress"rows="7" cols="40" ></textarea>
					</td>
				
				</tr>
			</TABLE>
			<TABLE>
				<tr cols=40>
					<td>
						<label for="gs">GS Devision:</label>
						<input type="text" id="gs" name="gs">
					</td>
					<td>
						<label for="ds">DS Devision:</label>
						<input type="text" id="ds" name="ds">
					</td>
				</tr>
				
				<tr>
					<td>
						<label for="district">Residential District:</label>
						<input type="text" id="Police" name="police">
					</td>
					
				</tr>
				
			<table>  
		
        </fieldset>
        <button type="submit">Submit</button>
      </form>
      
    </body>
</html>
  
  
</body>
</html>
