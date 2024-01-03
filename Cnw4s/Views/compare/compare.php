<style>
.product-image-cell {
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.featured-image {
    /* Các thuộc tính CSS khác cho hình ảnh */
    max-width: 100%;
    /* Để hình ảnh không vượt quá kích thước của cột */
}

.heading-font {
    font-weight: bold;
}

.product-name {
    font-family: 'Helvetica';
}

.th-compare {
    font-family: 'Helvetica';
}
</style>


<!--Page Title-->
<div class="page section-header text-center">
    <div class="page-title">
        <div class="wrapper">
            <h1 class="h1 heading-font">Compare Product </h1>
        </div>
    </div>
</div>
<!--End Page Title-->

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
            <div class="compare-page">
                <div class="table-wrapper table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="th-compare">
                                <th valign="middle" class="product-name">Action</th>
                                <?php
                                if (isset($_SESSION['sanphamcp'])) {
                                    foreach ($_SESSION['sanphamcp'] as $value) { ?>
                                <td class="item-row text-center">
                                    <a type="button" href="?act=compare&xuli=deleteall&id=<?= $value['MaSP'] ?>"
                                        class="remove-compare"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                </td>
                                <?php }
                                } ?>
                            </tr>
                        </thead>
                        <tbody id="table-compare">
                            <tr>
                                <th valign="middle" class="product-name">Product Name</th>
                                <?php
                                if (isset($_SESSION['sanphamcp'])) {
                                    foreach ($_SESSION['sanphamcp'] as $value) { ?>
                                <td class="grid-link__title text-center"><?= $value['TenSP'] ?></td>
                                <?php }
                                } ?>
                            </tr>
                            <tr>
                                <th valign="middle" class="product-name">Product Image</th>
                                <?php
                                if (isset($_SESSION['sanphamcp'])) {
                                    foreach ($_SESSION['sanphamcp'] as $value) { ?>
                                <td valign="middle" class="item-row text-center "><img
                                        src="assets/<?= $value['HinhAnh1'] ?>" alt="" class="featured-image">
                                    <div class="product-price product_price text-center">
                                        <span><?= number_format($value['DonGia']) ?> VND</span></div>
                                    <div class="variants clearfix text-center">
                                        <input type="hidden">
                                        <a title="Add to cart" href="?act=cart&xuli=add&id=<?= $value['MaSP'] ?>"
                                            class="add-to-cart btn btn-solid">Add to Cart</a>
                                    </div>
                                    <p class="grid-link__title hidden">Cut Dress</p>
                                </td>
                                <?php }
                                } ?>
                            </tr>
                            <tr>
                                <th valign="middle" class="product-name">Product Description</th>
                                <?php
                                if (isset($_SESSION['sanphamcp'])) {
                                    foreach ($_SESSION['sanphamcp'] as $value) { ?>
                                <td valign="middle" class="item-row">
                                    <p class="description-compare"><?= $value['MoTa'] ?>.</p>
                                    <p class="description-compare"><?= $value['MotaCT'] ?>.</p>
                                </td>
                                <?php }
                                } ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>