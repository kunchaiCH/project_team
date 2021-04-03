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
        <?php echo "<a href='employee_home.php?act=edit' class='btn btn-outline-primary btn-xs'>อัฟโหลด</a> ";?>
        <div class="col-sm-12">
            <h4>ID : <?=$row['username'];?></h4>
            <h4>สถานะ : <?=$สถานะ;?></h4>
        </div>
    
</form>        

    </div>
  </div>
</div>
