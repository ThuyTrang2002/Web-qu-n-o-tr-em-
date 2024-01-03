
<div class="section-body">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Detail Bill</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            
            <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
              <thead>
                <tr>
                  <th>Name Product</th>
                  <th>Price</th>
                  <th>Amount</th>
                  <th>Promotion</th>
                  <th>Total</th>

                </tr>
              </thead>
              <tbody>
                <?php foreach ($data as $detail) { ?>
                  <tr>
                    <td><?= $detail['Ten'] ?></td>
                    <td><?= number_format($detail['DonGia']) ?>VND</td>
                    <td><?= $detail['SoLuong'] ?></td>
                    
                    <?php
                    // Giảm giá dựa trên giá trị khuyến mãi (VND)
                    $khuyenMai = $detail['GiaTriKM'];
                    $donGia = $detail['DonGia'];
                    $soLuong = $detail['SoLuong'];

                    // Tính tổng tiền sau khuyến mãi
                    $tongTien = ($detail['DonGia'] - $khuyenMai) * $detail['SoLuong'];
                    ?>
                    <td>-<?= number_format($khuyenMai) ?> VND</td>
                    <td><?= number_format($tongTien) ?> VND</td>
                    
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