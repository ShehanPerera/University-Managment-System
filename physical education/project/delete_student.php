<?php
                        include('connection.php');
                                session_start();
                                $_name=$_SESSION['id'];
                                $_reg=$_SESSION['id1'];
                                 
                                $result = mysql_query("DELETE FROM $_name where Reg_No='$_reg'") or die(mysql_error());
                                if ($result) {
                                	echo "<script>

											    var x;
											    if (confirm(' Delete is successful!') == true) {
											        window.location='SportGames.html';
											    } else {
											         window.location='SportGames.html';
											    }
											    

											</script>";
                                	
                                }
                     ?>