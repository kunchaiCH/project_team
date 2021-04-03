<?php
include('condb.php'); 
$email = $_SESSION['employee_login'];


$sql = "SELECT * FROM masterlogin INNER JOIN นายช่าง ON masterlogin.username = นายช่าง.username WHERE masterlogin.email = '$email'";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($result));
$row = mysqli_fetch_array($result);
//print_r($row)
extract($row);
?>
<?php include('bootstrap.php');?>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-12 offset-md-2">
    <form action="data_profileDB.php" method="POST">
    <input type="hidden" name="ID" value="<?php echo $ID ?>">
    <input type="hidden" name="username" value="<?php echo $username ?>">
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">username</label>
        <div class="col-sm-6">
            <p name="username"><?=$username;?></p>
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">ชื่อ</label>
        <div class="col-sm-6">
            <input type="text" name="ชื่อ" class="form-control" id="ชื่อ" value="<?=$ชื่อ;?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="credit" class="col-sm-2 col-form-label">นามสกุล</label>
        <div class="col-sm-6">
            <input type="text" name="นามสกุล" class="form-control" id="นามสกุล"value="<?=$นามสกุล;?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">อาชีพ</label>
        <div class="col-sm-6">
            <!-- <input type="text" name="ประเภท" class="form-control" id="ประเภท" value="<?=$ประเภท;?>"> -->
            <select name="ประเภท" class="form-control" placeholder="Enter Select Role">
                    <option value="" selected="selected" ><?=$ประเภท;?></option>
                    <option>ช่างการประปา</option>
                    <option>ช่างขุดเจาะน้ำบาดาน</option>
                    <option>ช่างติดตั้งโซล่าเซลล์</option>
                    <option>ช่างทาสี</option>
                    <option>ช่างปูกระเบื้อง</option>
                    <option>ช่างไฟฟ้า</option>
                    <option>ช่างยนต์</option>
                    <option>ช่างก่อสร้าง</option>
                    <option>ช่างอินเอตร์เน็ต</option>
                    <option>ช่างแอร์</option>
                    <option>ช่างฝ่า เพดาน</option>
            </select>
        </div>
    </div>
    <div class="row mb-3">
        <label for="credit" class="col-sm-2 col-form-label">ความสามารถ</label>
        <div class="col-sm-6">
            <input type="text" name="ความสามารถ" class="form-control" id="ความสามารถ"value="<?=$ความสามารถ;?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">ราคา</label>
        <div class="col-sm-6">
            <input type="text" name="ราคา" class="form-control" id="ราคา" value="<?=$ราคา;?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="credit" class="col-sm-2 col-form-label">ที่อยู่</label>
        <div class="col-sm-6">
            <input type="text" name="ที่อยู่" class="form-control" id="ที่อยู่"value="<?=$ที่อยู่;?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="credit" class="col-sm-2 col-form-label">เบอร์โทร</label>
        <div class="col-sm-6">
            <input type="text" name="เบอร์โทร" class="form-control" id="เบอร์โทร"value="<?=$เบอร์โทร;?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="credit" class="col-sm-2 col-form-label">email</label>
        <div class="col-sm-6">
            <input type="text" name="email" class="form-control" id="password"value="<?=$email;?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="credit" class="col-sm-2 col-form-label">password</label>
        <div class="col-sm-6">
            <input type="text" name="password" class="form-control" id="password"value="<?=$password;?>">
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary">บันทึก</button>
</form>        

    </div>
  </div>
</div>
