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
                <div class="col-md-12 list_technician">
                <?php include('profile.php');?>
                </div>
                </div>
            </div>
    </body>
    </html>
</body>
</html>