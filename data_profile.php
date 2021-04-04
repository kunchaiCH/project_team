<?php
include('condb.php'); 
$email = $_SESSION['employee_login'];


$sql = "SELECT * FROM masterlogin INNER JOIN นายช่าง ON masterlogin.username = นายช่าง.username WHERE masterlogin.email = '$email'";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
//print_r($row)
extract($row);
?>
<?php include('bootstrap.php');?>
<br>
<div class="container profiles">
  <div class="row">
    <div class="col-md-12 offset-md-2">
    <form method="POST">
    <input type="hidden" name="ID" value="<?php echo $ID ?>">
        <div class="col-sm-12">
            <h4>ชื่อ : ช่าง<?=$ชื่อ;?> &nbsp; <?=$นามสกุล;?></h4>
            <H4>ประเภทช่าง : <?=$ประเภท;?></H4>
            <h4>ความสามารถพิเศษ : <?=$ความสามารถ;?></h4>
            <h4>ราคาเริ่มต้น : <?=$ราคา;?> บาท</h4>
            <br>
            <h4>เบอร์โทรศัพท์ : <?=$เบอร์โทร;?></h4>
            <h4>Gmail : <?=$email;?></h4>
            <h4>ที่อยู่ : <?=$ที่อยู่;?></h4>
           <?php $_SESSION['userprofile'] = $username;?>
        </div>
    <?php echo "<a href='employee_home.php?act=edit' class='btn btn-primary btn-xs'>แก้ไขข้อมูล</a> ";?>
</form>        

    </div>
  </div>
</div>
