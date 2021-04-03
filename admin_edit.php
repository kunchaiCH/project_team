<?php
include('condb.php'); 
$ID = $_REQUEST["id"];
// echo $ID;
$sql = "SELECT * FROM masterlogin WHERE id ='$ID' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($result));
$row = mysqli_fetch_array($result);
$username = $row["username"];

$sql = "SELECT * FROM masterlogin INNER JOIN นายช่าง ON masterlogin.username = นายช่าง.username WHERE masterlogin.username='$username' ";
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
    <form action="admin_editDB.php" method="POST">
    <input type="hidden" name="ID" value="<?php echo $ID ?>">
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">username</label>
        <div class="col-sm-6">
            <input type="text" name="username" class="form-control" id="ชื่อ" value="<?=$username;?>">
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
            <input type="text" name="ประเภท" class="form-control" id="ประเภท" value="<?=$ประเภท;?>">
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
