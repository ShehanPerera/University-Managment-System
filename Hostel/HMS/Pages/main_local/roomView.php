<!-- session -->
<?php
include("../../lib/session.php");
if(!isset($ses_conform))
{
    header('Location: ../../index.php');
}
?>
<!-- Page Start -->
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Student Search</title>
    <link rel="icon" href="../../Images/logo.ico" />
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <script src="../../js/jquery-3.1.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <style>
        div.cont{
            width: 100%;
            height: 100%;
            min-height: 500px;

        }

        .contantTable{
            height:380px;
            /*overflow:auto;*/
        }
        .table-fixed thead {
            width: 97%;
        }
        .table-fixed tbody {
            height: 340px;
            overflow-y: auto;
            width: 100%;
        }
        .table-fixed thead, .table-fixed tbody, .table-fixed tr, .table-fixed td, .table-fixed th {
            display: block;
        }
        .table-fixed tbody td, .table-fixed thead > tr> th {
            float: left;
            border-bottom-width: 0;
        }

        tr{
            cursor: pointer;
        }
        @media print {
            .myDivToPrint {
                background-color: white;
                height: 100%;
                width: 100%;
                position: fixed;
                top: 0;
                left: 0;
                margin: 0;
                padding: 15px;
                font-size: 14px;
                line-height: 18px;
            }
        }
    </style>
    <!-- Jason Script For  -->
    <script>
        function getStData(){
            $.get("../../lib/HOS_Room.php", function(data, status){
                document.getElementById("std_table").innerHTML = data;

            });
        }
        // redirect
        function Redirect(key) {
            window.location="inside_room.php?key="+key;
        }
    </script>
</head>
<body onload="getStData()">
<div class="cont container">
    <form method="post" action="">
        <br>
        <div class="contantTable" id="std_table">
            <table class ="table table-striped">
                <tr>
                    <th>Room ID</th><th>Maximum Capacity</th><th>Allocated Students</th>
                </tr>

            </table>
        </div>
        <div id="controlBtns" class="well well-sm" align="center">
                <a href="excel_Input_roomDT.php" class="btn btn-primary"><span class="glyphicon glyphicon-file pull-left"></span>&nbsp;&nbsp;Change Room details from CSV File</a>&nbsp;<div class="alert-info"><span class="glyphicon glyphicon-alert"></span>If you change room details, you have to allocate each students to rooms manually</div>

        </div>
    </form>
</div>
</body>
</html>
