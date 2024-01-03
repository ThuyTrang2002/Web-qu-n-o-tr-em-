<div class="section-body">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Edit Promotion</h4>
        </div>
        <div class="card-body">
          <form class="" action="?act=view-prm&run=edit" method="post">
          <input type="hidden" name="MaKM" value="<?=$data['MaKM']?>">
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name Promotion</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" name="TenKM" value="<?=$data['TenKM']?>" class="form-control">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Type Promotion</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" name="LoaiKM" value="<?=$data['LoaiKM']?>" class="form-control">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Value Promtion</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" name="GiaTriKM" value="<?=$data['GiaTriKM']?>" class="form-control">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Start Date</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" value="<?=$data['NgayBD']?>" name="NgayBD">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" value="<?=$data['TrangThai']?>" name="TrangThai">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <button class="btn btn-primary">Update Promotion</button>
            </div>
          </div>
        </form>
        </div>

      </div>
    </div>
  </div>
</div>
