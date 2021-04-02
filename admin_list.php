<?php include('bootstrap.php');?>
<?php include('condb.php');?>
<br>
<a href="admin_home.php?act=add"><button type="button" class="btn btn-secondary">เพิ่มข้อมูล</button></a><p></p>
<?php
$query = "SELECT * FROM นายช่าง ORDER BY id ASC" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);
echo ' <table class="table table-dark table-hover">';
echo '
    <tr>
        <td>username</td>
        <td>ชื่อ</td>
        <td>นามสกุล</td>
        <td>ประเภท</td>
        <td>ความสามารถ</td>
        <td>ราคา</td>
        <td>ที่อยู่</td>
        <td>เบอร์โทรศัพท์</td>
        <td>แก้ไข</td>
        <td>ลบ</td>
    </tr>';
    while($row1 = mysqli_fetch_array($result)) 
    {
        echo "<tr>";
            echo "<td>" .$row1["username"] .  "</td> ";
            echo "<td>" .$row1["ชื่อ"] .  "</td> ";
            echo "<td>" .$row1["นามสกุล"] .  "</td> ";
            echo "<td>" .$row1["ประเภท"] .  "</td> ";
            echo "<td>" .$row1["ความสามารถ"] .  "</td> ";
            echo "<td>" .$row1["ราคา"] .  "</td> ";
            echo "<td>" .$row1["ที่อยู่"] .  "</td> ";
            echo "<td>" .$row1["เบอร์โทร"] .  "</td> ";
            echo "<td><a href='admin_home.php?act=edit&id=$row1[0]' class='btn btn-warning btn-xs'>แก้ไข</a></td> ";  
            echo "<td><a href='admin_del.php?id=$row1[0]' onclick=\"return confirm('คุณต้องการลบหรือไม่ !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
        echo "</tr>";
    }
echo "</table>";
mysqli_close($con);
?>