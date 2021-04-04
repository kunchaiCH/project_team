<div id="profile">
    
    <img id="profileimg" width="100px" src="<?php echo $profile_row['ภาพ'];?>">
    <div class="text">
        <?php 
            echo $profile_row['ชื่อ'] . " " . $profile_row['นามสกุล'] ."<br>";
            echo "ประเภท : " . $profile_row['ประเภท'] ."<br>";
            echo "ความสามารถ : " . $profile_row['ความสามารถ'] ."<br>";
            echo "Email : " . $profile_row['email'] ."<br>";
            echo "ที่อยู่ : " . $profile_row['ที่อยู่'] ."<br>";
            echo "เบอร์โทร : " . $profile_row['เบอร์โทร'] ."<br>";
            echo "ราคาเริ่มต้น : ". $profile_row['ราคา'] ."<br>";
        ?>
    </div>

</div>