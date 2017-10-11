 <!-- Page Start -->
    <?php 
      $key = $_GET["key"];
        include("../../lib/HOS_view.php");
    ?>


  <div>  
    <form class="form-inline" id="contents"  method="get" >
    <div class="col-xs-6">
      <table width="100%">
          <tr>
              <td>ID.</td>
                <td><input name="idno" type="text" class="form-control"  readonly="readonly" id="idno" value="<?php echo $hosid;?>"/></td>
                <?php $_SESSION["hosid"]=$hosid; ?>
            </tr>
            <tr>
              <td>Name :</td>
                <td><input name="Name" type="text" class="form-control" readonly="readonly" value="<?php echo $name;?>"/></td>
            </tr>
            <td>Capacity :</td>
                <td><input name="cap" type="text" class="form-control" readonly value="<?php echo $capacity;?>"/></td>
            </tr>
            <tr>
              <td>Available :</td>
                <td><input name="Avail" type="text" class="form-control" readonly value="<?php echo $available;?>" /></td>
            </tr>
            

            <tr>
                <td>Anual Payment :</td>
                <td><input name="anualpay" type="text" class="form-control" readonly="readonly" id="block" value="<?php echo $anualPay;?>" ></td>
            </tr>

             <tr>
              <td>Address :</td>
                <td><textarea name="Saddress" class="form-control" rows="3" cols="30" readonly="readonly"  ><?php echo $address;?></textarea></td>
            </tr>
            
        </table>
        </div>
        <div class="col-xs-6">
        <table width="100%">
           <tr>
            <td>Contact No :</td>
                <td><input name="contactNo" type="text" class="form-control" readonly value="<?php echo $ContactNo;?>" /></td>
            </tr>
           <tr>
            <td>Male or Female :</td>
                <td><input name="category" type="text" class="form-control" readonly value="<?php echo $cat;?>" /></td>
            </tr>

          <tr>
            <td>Warden Id:</td>
                <td><input name="wid" type="text" class="form-control" readonly value="<?php echo $warId;?>" /></td>
            </tr>
            <tr>
              <td>Warden Name :</td>
                <td><input name="wan" type="text" class="form-control" readonly value="<?php echo $wrName;?>" /></td>
            </tr>
            <tr>
              <td>Sub Warden id :</td>
                <td><input name="subid" type="text" class="form-control" readonly value="<?php echo $subId;?>" /></td>
            </tr>
              <tr>
              <td>Contact No :</td>
                <td><input name="subname" type="text" class="form-control" readonly value="<?php echo $subName;?>" /></td>
            </tr>
        </table>
        </div>
        </div>
        </div>
    </form>
  </div>

 <!--Buttons-->
   <div id="controlBtns" class="col-sm-12">
   <br>
   <br>

   <p align="center">
     <a href="STD_current.php" class="btn btn-success"><span class="glyphicon glyphicon-ok pull-left"></span>&nbsp;&nbsp;Curent Student</a>
     <a href="logs.php" class="btn btn-danger"><span class="glyphicon glyphicon-remove pull-left"></span>&nbsp;&nbsp;Logs</a>
     </p> 
    </div> 




    