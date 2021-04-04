
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal1">
  Upload Profile
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">เลือกรูปภาพ</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form method="POST" action="upload.php" enctype="multipart/form-data">
            <input type="file" name="file">
            <hr>
            <input type="submit" value="upload" name="submit">
        </form>   
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>