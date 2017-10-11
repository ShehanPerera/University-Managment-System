<?php
 session_start();
error_reporting(1);

  extract($_SESSION);
 if((!isset($_SESSION['Loged_User']))||(($_SESSION['res']!="head")&&(!in_array("head",$_SESSION['position1']))))
        {
          header('location:../../UMS/UMSlogin.php');
        } 
 ?>
  <form action="sample.php" method="POST" enctype="multipart/form-data">
                                <table >
                                    <thead>
                                        <tr>
                                            
                                            <th>ImageName</th>
                                           
                                            <th>SelectImage</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                    
                                        <td><input type="text" name="name"></td>
                                        
                                        <td><input type="file" name="product_imgLocation" id="fileToUpload" ></td>
                                      </tr>
                                       <tr>
                                          <th><input align="left" type="submit" name="insert_post" value="Save"></th>

                                          <th><input align="left" type="reset" name="reset_post" value="Clear"></th>
                                        </tr>
										
                                      </tbody>
                                </table>
                                </form>
  <?php
include("../config.php");
  if(isset($_POST['insert_post']))
  {
    $id=$_POST['id'];
    $name=$_POST['name'];
   
    
    
    $file = rand(1000,100000)."-".$_FILES['product_imgLocation']['name'];
    $file_loc = $_FILES['product_imgLocation']['tmp_name'];
    $new_file_name = strtolower($file);
    $final_file=str_replace(' ','-',$new_file_name);


    //move_uploaded_file($product_image1_tmp,"product_imgLocation/$product_image1");
    $folder="product_imgLocation/";
    move_uploaded_file($file_loc,$folder.$final_file);

     $insert_product="INSERT INTO res(name,imgLocation) values
     ('$name','$final_file')";
     
     $insert_pro=mysqli_query($con,$insert_product); echo"******";
     if($insert_pro)
     {
      echo"<script>alert('Product has been insered sucessfuly')</script>";
       echo"<script>window.open('sample.php','_self')</script>";
     }
  }
?>
