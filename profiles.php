<div id="profile">
        <div class="grid">
            <div class="item">
                <div class="content">
                    <img id="profileimg" width="200mm" height="200mm"src="<?php echo $profile_row['ภาพ'];?>">
                </div>
            </div>
            <div class="item">
                <div class="content">
                    <?php 
                        echo $profile_row['ชื่อ'] . " " . $profile_row['นามสกุล'] ."<br>";
                        echo "ประเภท : " . $profile_row['ประเภท'] ."<br>";
                        echo "ความสามารถ : " . $profile_row['ความสามารถ'] ."<br>";
                        echo "Email : " . $profile_row['email'] ."<br>";
                    
                    ?>
                </div>
            </div>
            <div class="item">
                <div class="content">
                    <?php 
                        echo "ที่อยู่ : " . $profile_row['ที่อยู่'] ."<br>";
                        echo "เบอร์โทร : " . $profile_row['เบอร์โทร'] ."<br>";
                        echo "ราคาเริ่มต้น : ". $profile_row['ราคา'] ."<br>";
                        echo "สถานะช่าง : ". $profile_row['สถานะ'] ."<br>";

                    ?>
                </div>
            </div>
            
        </div>
    <!-- </div> -->

</div>