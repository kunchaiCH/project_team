<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//สร้างตัวแปรสำหรับรับค่า member_id จากไฟล์แสดงข้อมูล
$ID = $_REQUEST["id"];

$sql = "SELECT * FROM masterlogin WHERE id ='$ID' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($result));
$row = mysqli_fetch_array($result);
$username = $row["username"];
echo $username;
//ลบข้อมูลออกจาก database ตาม member_id ที่ส่งมา

$sql = "DELETE FROM masterlogin WHERE username='$username' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$sql = "DELETE FROM นายช่าง WHERE username='$username' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  
  if($result){
  echo "<script type='text/javascript'>";
  // echo "alert('Delete Succesfuly');";
  echo "window.location = 'admin_home.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to delete again');";
  echo "</script>";
}
?>