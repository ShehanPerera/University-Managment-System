 <!-- Page Start -->
    <?php 
      $key = $_GET["key"];
        include("../../lib/HOS_view.php");
    ?>


  <div>  
    <form class="form-inline" id="contents"  method="post" action="../../lib/HOS_update.php" >
    <div class="col-xs-6">
      <table width="100%">
          <tr>
              <td>ID.</td>
                <td><input name="hosid" type="text" class="form-control"  readonly="readonly" id="hosid" value="<?php echo $hosid;?>"/></td>
                
            </tr>
            <tr>
              <td>Name :</td>
                <td><input name="Name" type="text" class="form-control" value="<?php echo $name;?>"/></td>
            </tr>
            <td>Capacity :</td>
                <td><input name="cap" type="text" class="form-control"  value="<?php echo $capacity;?>"/></td>
            </tr>
            <tr>
              <td>Available :</td>
                <td><input name="available" type="text" class="form-control" readonly value="<?php echo $available;?>" /></td>
            </tr>
            

            <tr>
                <td>no_block :</td>
                <td><input name="block" type="text" class="form-control"  id="block" value="<?php echo $no_block;?>" ></td>
            </tr>

             <tr>
              <td>Address :</td>
                <td><textarea name="haddress" class="form-control" rows="3" cols="30" readonly="readonly"  ><?php echo $address;?></textarea></td>
            </tr>
            
        </table>
        </div>
        <div class="col-xs-6">
        <table width="100%">
           <tr>
           
            <td>Male or Female :</td>
                <td>
                  <select name="category" class="form-control"  style="width:100%">
                  <option></option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </td>
            </tr>

          <tr>
            <td>Ser. Id :</td>
                <td><input name="vserid" type="text" class="form-control"  value="<?php echo $war;?>" /></td>
            </tr>
            <td>Warden :</td>
                <td><input name="warden" type="text" class="form-control"  readonly value="<?php echo $warden;?>" /></td>
            </tr>
            <tr>
              <td>Contact No :</td>
                <td><input name="warno" type="text" class="form-control"  readonly value="<?php echo $warno;?>" /></td>
            </tr>
            <tr>
            <td>Ser. Id :</td>
                <td><input name="sserid" type="text" class="form-control"  value="<?php echo $sub;?>" /></td>
            </tr>
            <tr>
              <td>Sub Warden :</td>
                <td><input name="subwarden" type="text" class="form-control" readonly value="<?php echo $subwarden;?>" /></td>
            </tr>
              <tr>
              <td>Contact No :</td>
                <td><input name="subno" type="text" class="form-control" readonly value="<?php echo $subno;?>" /></td>
            </tr>
        </table>
        </div>
        </div>
        </div>

    <div id="controlBtns" class="col-sm-12">
   <br>
   <br>

   <p align="center">
     <input type="submit"   class="btn btn-primary"><span class="glyphicon glyphicon-file pull-left"></span>&nbsp;&nbsp;</input>
     
     <a href="logs.php" class="btn btn-danger"><span class="glyphicon glyphicon-remove pull-left"></span>&nbsp;&nbsp;Remove</a>
     </p> 
    </div> 

    </form>
  </div>

 <!--Buttons-->




    