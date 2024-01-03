<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Webpage</title>
</head>
<body>
<style> 
/* Áp dụng cho thanh dropdown */
.custom-dropdown {
    width: 100%; /* Đặt chiều rộng của dropdown */
    max-height: 200px; /* Đặt chiều cao tối đa của dropdown */
    overflow-y: auto; /* Sử dụng thanh cuộn nếu nội dung vượt quá kích thước */
    padding: 8px; /* Đặt khoảng cách giữa nội dung và viền */
    font-size: 14px; /* Đặt kích thước chữ */
    border: 1px solid #ccc; /* Đặt đường viền */
    border-radius: 4px; /* Đặt góc cong của dropdown */
    background-color: #fff; /* Đặt màu nền */
    color: #333; /* Đặt màu chữ */
}

/* Áp dụng cho từng mục trong dropdown */
.custom-dropdown option {
    padding: 8px; /* Đặt khoảng cách giữa các mục */
    font-size: 14px; /* Đặt kích thước chữ */
    background-color: #fff; /* Đặt màu nền */
    color: #333; /* Đặt màu chữ */
}

/* Hover effect cho các mục trong dropdown */
.custom-dropdown option:hover {
    background-color: #f0f0f0; /* Đặt màu nền khi hover */
}

</style>
<?php
// Tạo hàm tính tổng số tiền
function calculateTotalRevenue($searchedData) {
    $totalRevenue = 0;
    foreach ($searchedData as $row) {
        $totalRevenue += $row['TongTien'];
    }
    return $totalRevenue;
}

// Gọi hàm để tính tổng số tiền từ dữ liệu tìm kiếm
$totalRevenue = calculateTotalRevenue($data);
?>
<div class="section-body">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Order Data</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                <thead>
                  <tr>
                    <th>Name Customer</th>
                    <th>Date Order</th>
                    <th>Total Price</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th>Order Status</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                    $totalRevenue = 0;
                    if ($data != 0) { 
                      foreach($data as $row) { 
                        $totalRevenue += $row['TongTien'];
                  ?>
                  
                  <tr>
                    <td><?=$row['NguoiNhan']?></td>
                    <td><?=$row['NgayLap']?></td>
                    <td><?= number_format($row['TongTien'])?> VND</td>
                    <td><?=$row['DiaChi']?></td>
                    <td><?=$row['SDT']?></td>
                    <td><?php if($row['TrangThai']==0){
                      echo 'Unapproved';
                      }else{
                        echo 'Approved';
                        }?></td>                 
                    <td>

                
                      <?php if($row['TrangThai']==0){ ?>
                      <a class="btn btn-success btn-action mr-1" data-toggle="tooltip" href="?act=order&run=acp&id=<?= $row['MaHD'] ?>" title="Accept"><i
                          class="fas fa-check"></i></a>
                        <?php } ?>
                        <?php if($row['TrangThai']==1){ ?>
                        <a class="btn btn-warning btn-action mr-1" data-toggle="tooltip" href="?act=order&run=unacp&id=<?= $row['MaHD'] ?>" title="UnAccept"><i
                            class="fas fa-times"></i></a>
                          <?php } ?>
                      <a class="btn btn-info btn-action mr-1" data-toggle="tooltip" href="?act=order&run=detail&id=<?= $row['MaHD'] ?>" title="Detail"><i
                          class="fas fa-info-circle"></i></a>
                      <a class="btn btn-danger btn-action" data-toggle="tooltip" href="?act=order&run=delete&id=<?= $row['MaHD'] ?>" title="Delete"
                        data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                        data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                    </td>
                    <td>
                    <?php
                    $statusOptions = [
                        'Đang chuẩn bị hàng',
                        'Đang giao hàng',
                        'Đã giao hàng'
                    ];

                    echo '<select name="orderStatus_' . $row['MaHD'] . '" class="custom-dropdown">';
                    foreach ($statusOptions as $status) {
                        echo '<option value="' . $status . '">' . $status . '</option>';
                    }
                    echo '</select>';
                    
                    ?>
                    </td>
                  </tr>
                <?php } ?>
              <?php }else {
                  echo '<div class="card-header">
                    <h4>Order is empty</h4>
                  </div>';
              }?>
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="2">Total</td>
                    <td><?= number_format($totalRevenue) ?> VND</td>
                    
                    <td></td>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<script>
    // Mã JavaScript của bạn sẽ ở đây
    console.log('Hello, this is JavaScript!');
</script>

</body>
</html>