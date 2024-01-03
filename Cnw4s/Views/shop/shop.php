<!--Collection Banner-->

  <style>
    /* Đổi font chữ cho phần "TRANG ANH KIDS SHOP" */
    .collection-hero__title {
        font-family: 'Helvetica'; /* Thay 'Tên Font Chữ' bằng tên font chữ mà bạn muốn sử dụng */
        /* Các thuộc tính khác nếu bạn muốn điều chỉnh kiểu chữ như kích thước, màu sắc, ... */
    }

</style>

<div class="collection-header">
<div class="collection-hero">
      <div class="collection-hero__image"><img class="blur-up lazyload" data-src="assets/images/banner2.jpg" src="assets/images/bannerkid.jpg" alt="Women" title="Women" /></div>
      <div class="collection-hero__title-wrapper"><h1 class="collection-hero__title page-width">TRANG ANH KIDS SHOP</h1></div>
    </div>
</div>
  <!--End Collection Banner-->

  <div class="container" style="padding-top : 55px;">
    <div class="row">
        <!--Sidebar-->

        <?php require_once('category.php'); ?>

          <!--Main Content-->
          <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
          <h2 class="h2 heading-font">LIST PRODUCT</h2>
              <hr>
            <div class="productList">
              

                  <?php require_once('list-products.php'); ?>


              </div>
              <hr class="clear">
              <div class="pagination">
                <ul>
                <?php if ($data_tong > 9 and isset($test)) {
                  for ($i = 1; $i <= $data_tong/5 ; $i++) { ?>
                  <li><a href="?act=shop&trang=<?= $i ?>"><?= $i ?></a></li>
                <?php }
                  }
                ?>
                  <li class="next"><a href=""><i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                </ul>
              </div>
          </div>
          <!--End Main Content-->
      </div>
  </div>
