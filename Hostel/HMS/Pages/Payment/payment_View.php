<!-- session -->
<?php
  include("../../lib/session.php");
  if(!isset($ses_conform))
  {
    header('Location: ../../index.php');
  }
 ?>
 <!-- Page Start -->
    <?php
        include("../../lib/STD_payView.php")
    ?>
    <!--Paiment details form-->
    <form class="form-inline" action="../../lib/STD_payUpdate.php" method="get">
        <div class="col-sm-4">
        <table width="100%">
            <tr>
                <td>Reg. No.</td>
                <td><input name="RegNo" type="text" class="form-control" id="regNo" onkeypress="return runScript(event)" value='<?php echo "$regNo"; ?>'></td>
            </tr>
            <tr>
                <td>Paid amount(anual) :</td>
                <td><input name="anuPaied" type="text" class="form-control" readonly="readonly" value="<?php echo "$anualPaid"; ?>"></td>
            </tr>
            <?php
                if ($isRegOk){
                    echo "
                        <tr>
                        <td>date</td>
                        <td><input type=\"date\" name=\"payDate\" class=\"form-control\"></td>
                      </tr>
                    ";
                }
             ?>

        </table>
        </div>
        <div class="col-sm-4">
        <table width="100%">
            <tr>
                <td>Name :</td>
                <td><input name="Name" type="text" class="form-control" readonly="readonly" value="<?php echo "$intName"; ?>"></td>
            </tr>
            <tr>
                <td>Paid amount(overall) :</td>
                <td><input name="Overpaid" type="text" class="form-control" readonly value="<?php echo "$paid"; ?>"></td>
            </tr>
            <?php
                if ($isRegOk){
                    echo "
                        <tr>
                        <td>Amount</td>
                        <td><input type=\"number\" name=\"amount\" class=\"form-control\"></td>
                      </tr>
                    ";
                }
             ?>
        </table>
        </div>
        <div class="col-sm-4">
        <table width="100%">
            <tr>
                <td>payment req. :</td>
                <td><input name="reqPayAnual" type="text" class="form-control" readonly value="<?php echo "$anual_pay"; ?>"></td>
            </tr>
            <tr>
                <td class="<?php echo "$style"; ?>"><?php echo "$lableR"; ?></td>
                <td><input name="HavetoPay" type="text" class="form-control" readonly value="<?php echo "$valueR"; ?>"></td>
            </tr>
            <?php
                if ($isRegOk){
                    echo "
                        <tr>
                        <td colspan = \"2\"><button class=\"btn btn-primary btn-block\" type=\"submit\">Add Payment</button></td>
                      </tr>
                    ";
                }
             ?>
        </table>
        </div>
        <input type="hidden" name="admDate" value="<?php echo "$adm_date"; ?>" >
        <input type="hidden" name="req" value="<?php echo "$required"; ?>" >
        </form>