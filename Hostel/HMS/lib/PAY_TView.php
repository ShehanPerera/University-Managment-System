<?php 
  
$isRegOk = true;
include('STD_Con.php');
$key = $_GET["key"];
$sql_payment  ="SELECT * FROM payment_details WHERE reg_No='$key' ORDER BY payday DESC;";
$result_pay   = $conn->query($sql_payment);
if ($result_pay->num_rows > 0)
  {
    echo "<div class=\"panel panel-info\">
                        <div class=\"panel-heading\">
                        <b>Past Payment Details</b>
                        <a href=\"#SCont\" data-toggle=\"collapse\" class=\"pull-right colapsA\"><span class=\"glyphicon glyphicon-align-justify\"></span></a>
                        </div>
                        <div id=\"SCont\" class=\"panel-body collapse\">
                        <table class=\"table table-hover table-fixed\">
                      <thead>
                      <tr>
                      <th class=\"col-xs-3\">Payment Date</th>
                      <th class=\"col-xs-3\">admition Date</th>
                      <th class=\"col-xs-3\">Paied Amount</th>
                      <th class=\"col-xs-3\">Payment</th>
                      
                      </tr>
                      </thead>
                      <tbody>
                        ";
    while($row = $result_pay->fetch_assoc())
    {

      $paid     = $row['Paid_amount'];
      $date     = $row['payday'];
      $adm_date = $row['admition_Date'];
      $pay      = $row['payment'];
      // Display Table
      echo"<tr\">
      <td class=\"col-xs-3\">".$date."</td>
      <td class=\"col-xs-3\">".$adm_date."</td>
      <td class=\"col-xs-3\">".$paid."</td>
      <td class=\"col-xs-3\">".$pay."</td>
      </tr>";
    }
    echo "
      </tbody>
      </table>
     </div>
     </div>
      ";

  }
  else
    $isRegOk = false;
 ?>