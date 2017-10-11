
</p>
<form id="form1" name="form1" method="post" action="">
  <table width="552" height="82" border="0" class="tborder">
    <tr bgcolor="#006699" class="text2">
      <td width="17" bgcolor="#000099"><div align="center" class="style3"><strong><font size="2">Bil</font></strong></div></td>
      <td width="153" bgcolor="#000099"><div align="center" class="style3"><strong><font size="2">Subject Code </font></strong></div></td>
      <td width="271" bgcolor="#000099"><div align="center" class="style3"><strong><font size="2">Subject Name </font></strong></div></td>
      <td width="146" bgcolor="#000099"><div align="center" class="style3"><strong><font size="2">Credit Hour </font></strong></div></td>
      <td width="163" bgcolor="#000099"><div align="center" class="style3"><strong><font size="2">Gred</font></strong></div></td>
      <td width="163" bgcolor="#000099"><span class="style5">Pointer</span></td>
      <td width="48" bgcolor="#000099"><span class="style5"><font size="2">Total Pointer </font></span></td>
    </tr>
    <?php $num=0; do{ ?>
    <tr class="tulisan4" >
      <input type="hidden" name="id" value="<?php echo $row['member_id']; ?>" />
      <td><? echo $num+=1; ?>
          <div align="center"></div></td>
      <td align="center"><div align="center"><?php echo $kodla=$row_Recordset1['kod_subjek']; ?></div></td>
      <td><div align="center"><?php echo $row_Recordset1['nama_subjek']; ?></div></td>
      <td><div align="center">
        <input name="jam_kredit" type="hidden" id="jam_kredit" value="<?php echo $row_Recordset1['jam_kredit']; ?>" size="5"  readonly=""/>
        <?php echo $row_Recordset1['jam_kredit']; ?> </div></td>
      <td><div align="center">
        <select name="gred"  id="Gred" onchange="DisplayGred(this.value)">
          <option value="-1">Select </option>
          <option value="A|4.0">A </option>
          <option value="A-|3.67">A- </option>
          <option value="B+|3.33">B+ </option>
          <option value="B|3.0">B </option>
          <option value="B-|2.67">B- </option>
          <option value="C+|2.33">C+ </option>
          <option value="C|2.0">C </option>
          <option value="C-|1.67">C- </option>
          <option value="D|1.0">D </option>
          <option value="F|0.0">F </option>
        </select>
      </div></td>
      <td><input name="pointer" type="text" id="pointer" size="5" readonly="" /></td>
      <td colspan="2"><label>
        <input name="sumPointer" type="text" id="sumPointer" size="5" readonly="" />
      </label></td>
      <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
    </tr>
    <tr class="tulisan4" >
      <td colspan="8" bgcolor="#000099"> </td>
    </tr>
  </table>
  <p> </p>
  <table width="358" border="0">
    <tr>
      <th bgcolor="#000099" scope="col"><span class="style3">Credit Hour </span></th>
      <th bgcolor="#000099" scope="col"><span class="style3">Total Credit Hour </span></th>
      <th bgcolor="#000099" scope="col"><span class="style3">Total Score </span></th>
      <th bgcolor="#000099" scope="col"><span class="style3">GPA</span></th>
      <th bgcolor="#000099" scope="col"><span class="style3">CGPA</span></th>
    </tr>
    <tr>
      <th scope="row"><input name="total" type="text" id="total" size="5" /></th>
      <td><div align="center">
        <input name="sumCreditHour" type="text" id="sumCreditHour" size="5" readonly="" />
      </div></td>
      <td><div align="center">
        <input name="totalScore" type="text" id="totalScore" size="5" readonly="" />
      </div></td>
      <td><input name="gpa" type="text" id="gpa" size="5" readonly="" /></td>
      <td><input name="pointer2" type="text" id="pointer2" size="5" readonly="" /></td>
    </tr>
  </table>
  <p>
    <input type="button" name="Button" value="Calculate" onclick="CalculateCGPA()" />
    <input type="submit" name="Submit3" value="Save" />
    <input type="reset" name="Submit4" value="Reset" />
  </p>