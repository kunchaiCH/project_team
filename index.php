<!DOCTYPE html>
<html lang="en">
<head>
<?php include('bootstrap.php');?>
</head>
<body>

    <div class="container">
        <div class="col-12 list_navbar">
        <?php include('navbars.php');?>
        </div>
        <div class="row g-0">
            <div class="col-12 list_slide">
                <?php include("slide.php");?>
            </div>
            <div class="col-12 list_search">
                <div class="imgsearch">
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
            <div class="col-12 footers">
                <?php include("footers.php");?>
            </div>
        </div>
    </div>
        
</body>
</html>