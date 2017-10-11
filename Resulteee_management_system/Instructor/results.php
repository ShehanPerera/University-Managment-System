<?php
 session_start();
error_reporting(1);

  extract($_SESSION);
 if((!isset($_SESSION['Loged_User']))||(($_SESSION['res']!="head")&&(!in_array("head",$_SESSION['position1']))))
        {
          header('location:../../UMS/UMSlogin.php');
        } 
 ?>
<style type="text/css">
</style>
<div class="modal fade" id="m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
    	<div class="modal-content">
      		
	  	<div class="modal-header" style=" background-color:#FF0000;   color:#fff;">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel" ><span class="glyphicon glyphicon-pencil"style=" background-color:#FF0000; margin-left:180px; color:#fff;"></span>&nbsp;Register</h4>
      	</div>
     	

      <div class="modal-body">
	  		<div  id ="err1" style="color:red;"  class="form-alert">
			</div>
		<form action="#" method="post">

	
	
	
	<div class="form-group">
	<div class="input-group input-group-sm">
					<span class="input-group-addon"> 
						<span class="glyphicon glyphicon-user"></span></span>
							
    <input type="text" class="form-control" name="courseId"  id="courseId" placeholder="Course id"/>
	</div>
</div>


<div class="form-group">
	<div class="input-group input-group-sm">
							
		<span class="input-group-addon">  
		 <span class="glyphicon glyphicon-envelope"></span></span>
						
	 <input type="text" class="form-control" name="acadamicYear"  id="acadamicYear" placeholder="acadamic year"/>
	</div>
	<br/>
	<div class="form-group">
	<div class="input-group input-group-sm">
							
		<span class="input-group-addon">  
		 <span class="glyphicon glyphicon-lock"></span></span>
	</div>
   </div>

	<div class="form-group">
	<div class="input-group input-group-sm">
					<span class="input-group-addon"> 
						<span class="glyphicon glyphicon-check"></span></span>
							
    <select class="form-control" name="type"  id="P/R" required>
		<option value="">Propper</option>
		<option value="m">Repeat</option>
	</select>
	</div>
</div>
   </select>
  </div> 
</div>

<div class="form-group">
	<div class="input-group input-group-sm">
					<span class="input-group-addon"> 
						<span class="glyphicon glyphicon-user"></span></span>
							
	</div>
</div>

	    	<div class="controls controls-row">
	   <!--<form method="POST" >-->
 <div class="controls controls-group">      </div></div>
	  <div class="modal-footer">
	
	  <input type="submit" class="btn btn-success" id="save"  value="Register" name="regis" />
    </form>
	    <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
       </div>
    </div>
  </div>
</div>