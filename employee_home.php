<?php 
    session_start();

    if (!isset($_SESSION['employee_login'])) {
        header("location: index.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('bootstrap.php');?>
</head>
<body>
<div class="text-center mt-5">
        <div class="container">

            <?php if(isset($_SESSION['success'])) : ?>
                <div class="alert alert-success">
                    <h3>
                        <?php 
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>
            <hr>
        
            <h3>
                <?php if(isset($_SESSION['employee_login'])) { ?>
                Welcome, <?php echo $_SESSION['employee_login']; }?>
            </h3>
            <hr>

        </div>
    </div>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <?php include('bootstrap.php');?>
    </head>
    <body>
        <div class="container">
            <div class="col-12 list_navbar">
                <?php include('navbars_Registers.php');?>
            </div>
            <div class="row g-0">
                <div class="col-md-12 list_add">
                <?php
                $act = (isset($_GET['act'])) ? $_GET['act'] : '';
                if($act == 'edit'){ 
                    include('data_profileADD.php');
                }else {
                    include('profile.php');
                }
            ?>
                </div>
            </div><hr>
            <div class="col-12 list_search">
                    <div class="imgsearch">
                        <div class="col-7">
                            <h1 class="text2">ข้อมูลของนายช่างท่านอื่น</h1>
                        </div>
                        <?php include("searchs.php");?>
                    </div>
            </div>
            <div class="col-12 list_technician">
                <div class="col-6 profile">
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
    </body>
    </html>
</body>
</html>