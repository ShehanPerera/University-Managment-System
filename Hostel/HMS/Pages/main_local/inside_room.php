
<?php

include ("../../lib/session.php");
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<title>Student Search</title>
<link rel="icon" href="../../Images/logo.ico" />
<link rel="stylesheet" href="../../css/bootstrap.min.css">
  <script src="../../js/jquery-3.1.1.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  
  <script type="text/javascript">
     function imgError(image) {
          image.onerror = "";
          image.src = "../../images/profile-default.jpg";
          return true;
        }
  </script>


<style>
div.gallery {
    border: 1px solid #ccc;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}


div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 0 6px;
    float: left;
    width: 25%;
    height: auto;
}

.free {
    float: left;
    width: 100px;
    height: auto;
}

@media only screen and (max-width: 700px){
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px){
    .responsive {
        width: 100%;
        height: 50%
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}
</style>
</head>
<body>
<?php
include('../../lib/HOS_roomView.php');
?>
</body>
</html>
