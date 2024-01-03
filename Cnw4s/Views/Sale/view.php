<div class="section-body">
    <div class="row">
      <div class="col-12">
      <div class="buttons">
                </div>
                <div class="card">
                  <a href="?act=view-prm&run=add" class="btn btn-icon btn-success"  title="Add Promotion" data-toggle="tooltip" ><i class="fas fa-user-plus"></i></a>
                  <div class="card-header">
            <h4>Promotion View</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                <thead>
                  <tr>
                    <th>ID Promotion</th>
                    <th>Name Promotion</th>
                    <th>Type Promotion</th>
                    <th>Value</th>
                    <th>Start Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($data as $row){ ?>
                  <tr>
                    <td><?=$row['MaKM']?></td>
                    <td><?=$row['TenKM']?></td>
                    <td><?=$row['LoaiKM']?></td>
                    <td><?=$row['GiaTriKM']?></td>
                    <td><?=$row['NgayBD']?></td>
                    
                    <td>
                      
                        <a class="btn btn-primary btn-action mr-1" href="?act=view-prm&run=edit&id=<?=$value['MaKM']?>" data-toggle="tooltip" title="Edit"><i
                            class="fas fa-pencil-alt"></i></a>
                        <a class="btn btn-danger btn-action" href="?act=view-prm&run=delete&id=<?= $value['MaND'] ?>" data-toggle="tooltip" title="Delete"
                                data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                            </td>
                  </tr>
                <?php } ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
