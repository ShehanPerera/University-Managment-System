
<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<?php
function createRandomID() {
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ023456789";
    srand((double)microtime()*1000000);
    $i = 0;
    $RandomID = '' ;
    while ($i <= 7) {

        $num = rand() % 33;

        $tmp = substr($chars, $num, 1);

        $RandomID = $RandomID . $tmp;

        $i++;

    }
    return $RandomID;
}
$finalcode='UID-'.createRandomID();

function createRandomPassword() {
    $chars = "ABCDEFGHIJKXYZabcdefghijklmnopqrstuvwxyz02345LMNOPQRSTUVW6789";
    srand((double)microtime()*1000000);
    $i = 0;
    $pass = '' ;
    while ($i <= 8) {

        $num = rand() % 41;

        $tmp = substr($chars, $num, 1);

        $pass = $pass . $tmp;

        $i++;

    }
    return $pass;
}
$randomPassword=createRandomPassword();
?>

<form name="myForm" action="addhodexec.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">
First Name <br />
<input name="fname" type="text" class="ed" id="brnu" />
<br>
Last Name <br />
<input name="lname" type="text" class="ed" id="brnu" />
<br>
Department <br />
<input name="department" type="text" class="ed" id="brnu" />
<br>
Email <br />
<input name="email" type="text" class="ed" id="brnu" />
<br>
User ID <br />
<input name="RegNo" type="text" class="ed" id="brnu" value="<?php echo $finalcode; ?>" readonly/>
<br>
Password <br />
<input name="password" type="text" class="ed" id="brnu" value="<?php echo $randomPassword ?>" readonly/>
<br>
<input type="submit" name="Submit" value="save" id="button1" />
</form>
