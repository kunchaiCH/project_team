<?php
include('condb.php'); 
$email = $_SESSION['employee_login'];


$sql = "SELECT * FROM masterlogin INNER JOIN นายช่าง ON masterlogin.username = นายช่าง.username WHERE masterlogin.email = '$email'";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
$row = mysqli_fetch_array($result);
//print_r($row)
extract($row);
?>
<?php include('bootstrap.php');?>
<br>
<div class="container profiles">
  <div class="row">
    <div class="col-md-12 offset-md-2">
      <img id="imgprofile" src="<?php echo $row["ภาพ"];?>" alt="" width="180mm" height="180mm">
      <br><p></p>
      <?php include("uploadprofile.php");?>
      <p></p>
        <div class="col-sm-12">
            <h2>ID : <?=$row['username'];?></h2><hr>
            <h4>สถานะ : <?=$สถานะ;?></h4>
        </div>
    
    </form>        

    </div>
  </div>
</div>