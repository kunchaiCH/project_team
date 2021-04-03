<?php
include('condb.php');

$username = $_POST['username'];
$ชื่อ = $_POST['ชื่อ'];
$นามสกุล = $_POST['นามสกุล'];
$ประเภท = $_POST['ประเภท'];
$ความสามารถ = $_POST['ความสามารถ'];
$ราคา = $_POST['ราคา'];
$ที่อยู่ = $_POST['ที่อยู่'];
$เบอร์โทร = $_POST['เบอร์โทร'];
$role = $_POST['role'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql ="INSERT INTO นายช่าง
    
    (username, ชื่อ, นามสกุล, ประเภท, ความสามารถ, ราคา, ที่อยู่, เบอร์โทร) 

    VALUES 

    ('$username', '$ชื่อ', '$นามสกุล', '$ประเภท', '$ความสามารถ', '$ราคา', '$ที่อยู่', '$เบอร์โทร')";
    
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($result));
    // mysqli_close($con);
    

$sql ="INSERT INTO masterlogin
    
    (username, email, password, role) 

    VALUES 

    ('$username', '$email', '$password', '$role')";
    
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($result));
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