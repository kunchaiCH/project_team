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
                <?php if(isset($_SESSION['admin_login'])) { ?>
                Welcome, <?php echo $_SESSION['admin_login']; }?>
            </h3>
            <hr>

        </div>
    </div>
    <div class="container">
        <div class="col-12 list_navbar">
            <?php include('navbars_admin.php');?>
        </div>
        <div class="row g-0">
            <div class="col-md-12 list_technician">
            <?php
                $act = (isset($_GET['act'])) ? $_GET['act'] : '';
                if($act == 'add'){ 
                    include('admin_add.php');
                }elseif ($act == 'edit') {
                    include('admin_edit.php');
                }
                else {
                    include('admin_list.php');
                }
            ?>
            </div>
            </div>
        </div>
</body>
</html>