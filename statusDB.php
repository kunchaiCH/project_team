<meta charset="UTF-8">
<?php
session_start();
//1. เชื่อมต่อ database: 
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
$username = $_SESSION['userprofile'];
$สถานะ = $_POST['สถานะ'];

//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 

  $sql = "UPDATE นายช่าง SET   
      สถานะ='$สถานะ' 
      WHERE username ='$username'";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  
if($result){
    echo "<script>";
    //echo "alert('Add Succesfuly');";
    echo "window.location ='employee_home.php'; ";
    echo "</script>";
  } else {
    
    echo "<script>";
    // echo "alert('ERROR!');";
    //echo "window.location ='admin_course_civil.php'; ";
    echo "</script>";
  }
?>