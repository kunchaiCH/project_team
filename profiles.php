<div id="profile">
    <img id="profileimg" width="100px" src="image/user.jpg">
    <div class="text">
        <?php 
            echo $profile_row['ชื่อ'] . " " . $profile_row['นามสกุล'] ."<br>";
            echo "ประเภท : " . $profile_row['ประเภท'] ."<br>";
            echo "ความสามารถ : " . $profile_row['ความสามารถ'] ."<br>";
            echo "ราคาเริ่มต้น : ". $profile_row['ราคา'] ."<br>";
        ?>
    </div>

</div>