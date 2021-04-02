
<br>

<div class="container" >
  <div class="row">
    <div class="col-md-6 offset-md-3">
    <form class="row g-3" action="admin_addDB.php" method="POST">
        <div class="col-md-12">
            <label for="validationDefault01" class="form-label">username</label>
            <input type="text" name="username" class="form-control"required>
        </div>
        <div class="col-md-6">
            <label for="validationDefault01" class="form-label">ชื่อ</label>
            <input type="text" name="ชื่อ" class="form-control"required>
        </div>
        <div class="col-md-6">
            <label for="validationDefault02" class="form-label">นามสกุล</label>
            <input type="text" name="นามสกุล" class="form-control"required>
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">ที่อยู่</label>
            <input type="text" name="ที่อยู่" class="form-control"required>
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">อาชีพ</label>
            <select name="ประเภท" class="form-control"required placeholder="Enter Select Role">
                    <option value="" selected="selected">- เลือกอาชีพ -</option>
                    <option>ช่างการประปา</option>
                    <option>ช่างขุดเจาะน้ำบาดาน</option>
                    <option>ช่างติดตั้งโซล่าเซลล์</option>
                    <option>ช่างทาสี</option>
                    <option>ช่างปูกระเบื้อง</option>
                    <option>ช่างไฟฟ้า</option>
                    <option>ช่างยนต์</option>
                    <option>ช่างก่อสร้าง</option>
                    <option>ช่างอินเอตร์เน็ต</option>
                    <option>ช่างแอร์</option>
                    <option>ช่างฝ่า เพดาน</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="validationDefault03" class="form-label">ความสามารถพิเศษ (ถ้ามี)</label>
            <input type="text" name="ความสามารถ" class="form-control">
        </div>
        <div class="col-md-6">
            <label for="validationDefault04" class="form-label">ราคาเริ่มต้น</label>
            <input type="text" name="ราคา" class="form-control"required>
        </div>
        <div class="col-md-6">
            <label for="validationDefault05" class="form-label">เบอร์โทรศัพท์</label>
            <input type="text" name="เบอร์โทร" class="form-control"required>
        </div><br>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">บันทึก</button>
        </div>
    </form>
    </div>
  </div>
</div>


