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
<div class="container profiles">
  <div class="row">
    <div class="col-md-12 offset-md-2">
    <form method="POST" action="upload.php" enctype="multipart/form-data">
      <input type="file" name="file">
      <img src="<?php echo $row["ภาพ"];?>" alt="" width="100mm"><br>
        <input type="submit" value="upload" name="submit">
        <div class="col-sm-12">
            <h4>ID : <?=$row['username'];?></h4>
            <h4>สถานะ : <?=$สถานะ;?></h4>
        </div>
    
    </form>        

    </div>
  </div>
</div>