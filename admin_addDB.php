<?php
include('condb.php');

$ชื่อ = $_POST['ชื่อ'];
$นามสกุล = $_POST['นามสกุล'];
$อาชีพ = $_POST['อาชีพ'];
$ความสามารถ = $_POST['ความสามารถ'];
$ราคา = $_POST['ราคา'];
$ที่อยู่ = $_POST['ที่อยู่'];
$เบอร์โทร = $_POST['เบอร์โทร'];
$sql ="INSERT INTO นายช่าง
    
    (ชื่อ, นามสกุล, อาชีพ, ความสามารถ, ราคา, ที่อยู่, เบอร์โทร) 

    VALUES 

    ('$ชื่อ', '$นามสกุล', '$อาชีพ', '$ความสามารถ', '$ราคา', '$ที่อยู่', '$เบอร์โทร')";
    
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    mysqli_close($con);
    
    if($result){
      echo "<script>";
      //echo "alert('Add Succesfuly');";
      echo "window.location ='admin_home.php'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      //echo "alert('ERROR!');";
      //echo "window.location ='admin_course_civil.php'; ";
      echo "</script>";
    }
?>