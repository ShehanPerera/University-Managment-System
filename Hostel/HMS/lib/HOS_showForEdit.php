<?php
	$key = $_GET['key'];
	include('STD_Con.php');
  $sql="SELECT * FROM hostel_detail WHERE id='$key';";
  $res = $conn->query($sql);
  if($res->num_rows>0)
  {
    while($row = $res->fetch_assoc())
    {
      $id = $row['id'];
      $HName = $row['name'];
      $HAddress = $row['address'];
      $Contact_No = $row['contact_no'];
      $cap = $row['capacity'];
      $avail = $row['available'];
      $anualPay = $row['anual_payment'];
      $cat = $row['category'];
    }
    $fill = $cap-$avail;
    // for display details
    echo "<table width=\"100%\" >
                <tr>
                <td><label for=\"hosname\" id=\"hosname\">Name of the Hostel: </label></td><td><input name=\"hname\" type=\"text\" class=\"form-control\" value='$HName'  required/></td>
                </tr>
                <tr>
                <td><label for=\"capacity\" >Capacity: </label></td><td><input type=\"number\" name=\"Cap\" class=\"form-control\" required \" value ='$cap'/></td>
                </tr>
                <tr>
                <tr>
                <td><label for=\"l-Name\" id=\"iname\">Contact No: </label></td><td><input name=\"Cont\" type=\"number\" class=\"form-control\" required value='$Contact_No' /></td>
                </tr>
                <tr>
                <td><label>Required Anual Payment </label></td>
                <td><input name=\"anual\" type=\"text\" class=\"form-control\" required value='$anualPay'/></td>
              </tr>
              <tr>
                <td><label>Address: </label></td>
                <td><textarea name=\"address\" class=\"form-control\" rows=\"3\" cols=\"30\">$HAddress</textarea></td>
              </tr>
              <tr>
                <td><label for=\"gender\">Gender : </label></td>
                <td><input name=\"gender\" type=\"text\" class=\"form-control\" required value='$cat'/>
            </td>
              </tr>

                </table>
                <input name=\"fill\" type=\"hidden\" class=\"form-control\" required value='$fill'/>";
                
  }
?>