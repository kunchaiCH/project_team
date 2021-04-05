<!DOCTYPE html>
<html lang="en">
<head>
<?php include('bootstrap.php');?>
</head>
<body>
    <div class="col list_navbar">
        <?php include('navbars.php');?>
    </div>
    <div class="container index_date">
        <div class="row g-0">
            <div class="col-12 list_slide">
                <?php include("slide.php");?>
            </div>
            <div class="col-12 list_search">
                <h1 class="text3">ช่างที่อยู่ในระบบ T-Search</h1>
                <div class="imgsearch">
                    <div class="col-6">
                        <h1 class="text4">ระบบค้นหา<br></h1>
                    </div>
                    <?php include("search.php");?>
                </div>
            </div>
            <div class="col-12 list_technician">
                <div class="col-12 profile">
                    <?php
                    include('user.php');
                    $q = (isset($_GET['q']) ? $_GET['q'] : '');
                    $user_search = new User();
                    $search = $user_search->get_search($q);

                    $user = new User();
                    $profile = $user->get_profile();
                    
                    if($q!=''){
                        if($search)
                        {
                            foreach($search as $profile_row){
                                
                                include("profiles.php");
                                
                            }
                        }
                    }else{
                        if($profile)
                        {
                            foreach($profile as $profile_row){
                                
                                include("profiles.php");
                                
                            }
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col footers">
                <?php include("footers.php");?>
            </div>
        </div>

    </div>
    
</body>
</html>