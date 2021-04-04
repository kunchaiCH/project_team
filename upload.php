<?php
session_start();
include('condb.php');
$username = $_SESSION['userprofile'];
$dir = "uploadpicture/";
$fileimage = $dir . basename($_FILES["file"]["name"]);

// print_r($_FILES);
// echo $_FILES['file']['type'];

if ($_FILES['file']['type']=="image/jpeg" || $_FILES['file']['type']=="image/png"|| $_FILES['file']['type']=="image/gif"){
    $sql = " UPDATE นายช่าง SET   
  ภาพ ='$fileimage'
  WHERE username ='$username'";

  if (move_uploaded_file($_FILES["file"]["tmp_name"],$fileimage)){
      echo "uploaded";
      $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($result));
      mysqli_close($con);
      if($result){
          echo "<script>";
          echo "window.location ='employee_home.php'; ";
          echo "</script>";
        } else {
          
          echo "<script>";
          //echo "alert('ERROR!');";
          echo "</script>";
        }
      }else{
          echo "don't uploaded";
      }
}else{
  echo "<script>";
  echo "alert('file not picture');";
  echo "window.location ='employee_home.php'; ";
  echo "</script>";
}



?>