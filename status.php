<!-- Button trigger modal -->
<a href="#" class="login" data-bs-toggle="modal" data-bs-target="#exampleModal">กำหนดสถานะช่าง</a>

<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">นายช่าง</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="container" >
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-12">
        <div class="container">
        <form action="statusDB.php" method="post" class="form-horizontal my-5">
        <div class="form-group">
            <label for="type" class="col-sm-3 control-label">เลือกสถานะ</label>
            <div class="col-sm-12">
                <select name="สถานะ" class="form-control"required placeholder="Enter Select status">
                    <option value="" selected="selected">- สถานะ -</option>
                    <option value="ว่าง">ว่าง</option>
                    <option value="ไม่ว่าง">ไม่ว่าง</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-12 mt-3">
                <input type="submit" name="btn_status" class="btn btn-success" style="width: 100%;" value="ยืนยันการเปลี่ยนสถานะ">
            </div>
        </div>
        </form>
    </div>
        </div>
      </div>
    </div>
      </div>
      <div class="modal-footer">
        <h6>การเปลี่ยนสถานะ</h6>
      </div>
    </div>
  </div>
</div>