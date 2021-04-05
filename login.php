<?php 

    session_start();

    if (isset($_SESSION['admin_login'])) {
        header("location: admin_home.php");
    }

    if (isset($_SESSION['employee_login'])) {
        header("location: employee_home.php");
    }

?>
<?php include('bootstrap.php');?>
<style type="text/css">#btn{width:100%;}</style>
<!-- Button trigger modal -->
<a href="#" class="login" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</a>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="ture">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login Admin & Employee</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="container" >
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-12" style="">

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

        <?php if(isset($_SESSION['error'])) : ?>
            <div class="alert alert-danger">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <form action="login_db.php" method="post" class="form-horizontal my-5">
        
        <label for="email" class="col-sm-3 control-label">Email</label>
        <div class="col-sm-12">
            <input type="text" name="txt_email" class="form-control" required placeholder="Enter email">
        </div>
        
        <label for="password" class="col-sm-3 control-label">Password</label>
        <div class="col-sm-12">
            <input type="password" name="txt_password" class="form-control" required placeholder="Enter password">
        </div>

        <div class="form-group">
            <label for="type" class="col-sm-3 control-label">Select Type</label>
            <div class="col-sm-12">
                <select name="txt_role" class="form-control"required placeholder="Enter Select Role">
                    <option value="" selected="selected">- Select Role -</option>
                    <option value="admin">admin</option>
                    <option value="employee">employee</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-12 mt-3">
                <input type="submit" name="btn_login" class="btn btn-success" style="width: 100%;" value="Login">
            </div>
        </div>
        </form>
    </div>
        </div>
      </div>
    </div>
      </div>
      <div class="modal-footer">
        <h6>เฉพาะผู้ดูแลระบบ และ นายช่าง</h6>
      </div>
    </div>
  </div>
</div>