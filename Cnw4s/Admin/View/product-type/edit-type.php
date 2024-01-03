<?php
$db = new Database();
$query = "SELECT * from danhmuc";
$row_lietke = $db->select($query);

?>

<div class="section-body">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Edit Product Type</h4>
        </div>
        <div class="card-body">
          <form class="" action="?act=view-type&run=edit" method="post">
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name Category</label>
              <div class="col-sm-12 col-md-7">
                <select name='TenDM' class="form-control selectric">
                  <?php
                  while ($row = mysqli_fetch_array($row_lietke)) {
                  ?>
                    <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name Type Product</label>
              <div class="col-sm-12 col-md-7">
                <input name='TenLSP' type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
              <div class="col-sm-12 col-md-7">
                <button class="btn btn-primary">Update</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>