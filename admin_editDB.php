<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
  $ID = $_REQUEST["ID"];
  $username = $_REQUEST["username"];
  $ชื่อ = $_REQUEST["ชื่อ"];
  $นามสกุล = $_REQUEST["นามสกุล"];
  $ประเภท = $_REQUEST["ประเภท"];
  $ความสามารถ = $_REQUEST["ความสามารถ"];
  $ราคา = $_REQUEST["ราคา"];
  $ที่อยู่ = $_REQUEST["ที่อยู่"];
  $เบอร์โทร = $_REQUEST["เบอร์โทร"];
//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
  
  $sql = "UPDATE นายช่าง SET  
      username='$username' , 
      ชื่อ='$ชื่อ' , 
      นามสกุล='$นามสกุล' , 
      ประเภท='$ประเภท' ,
      ความสามารถ='$ความสามารถ' , 
      ราคา='$ราคา' , 
      ที่อยู่='$ที่อยู่' , 
      เบอร์โทร='$เบอร์โทร' 
      WHERE ID='$ID' ";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  
  if($result){
  echo "<script type='text/javascript'>";
  //echo "alert('Update');";
  echo "window.location = 'admin_home.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  //echo "alert('Error back to Update again');";
  echo "</script>";
}
?>