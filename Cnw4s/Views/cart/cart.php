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

.text-center {
    font-family: 'Helvetica';
}

.page-width {
    font-family: 'Helvetica';
}
</style>
<?php $total = 0;
$khuyenMai = 0; ?>

<!--Page Title-->
<div class="page section-header text-center">
    <div class="page-title">
        <div class="wrapper">
            <h1 class="page-width">CART</h1>
        </div>
    </div>
</div>
<!--End Page Title-->

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
            <div class="alert alert-success text-uppercase" role="alert">
                <i class="icon anm anm-truck-l icon-large"></i> Congratulations! You've got free shipping
            </div>
            <form action="#" method="post" class="cart style2">
                <table>
                    <thead class="cart__row cart__header">
                        <tr>
                            <th colspan="2" class="text-center">Product</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Qty</th>
                            <th class="text-right">Total</th>
                            <th class="action">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        if (isset($_SESSION['sanpham'])) {
                            foreach ($_SESSION['sanpham'] as $value) { ?>

                        <tr class="cart__row border-bottom line1 cart-flex border-top">
                            <td class="cart__image-wrapper cart-flex-item">
                                <a href="?act=detail&id=<?= $value['MaSP'] ?>"><img class="cart__image"
                                        src="assets/<?= $value['HinhAnh1'] ?>" alt=""></a>
                            </td>
                            <td class="cart__meta small--text-left cart-flex-item">
                                <div class="list-view-item__title">
                                    <a href="?act=detail&id=<?= $value['MaSP'] ?>"><?= $value['TenSP'] ?> </a>

                            </td>
                            <td class="cart__price-wrapper cart-flex-item">
                                <span class="money"><?= number_format($value['DonGia']) ?>VND</span>
                            </td>
                            <td class="cart__update-wrapper cart-flex-item text-right">
                                <div class="cart__qty text-center">
                                    <div class="qtyField">
                                        <a class="qtyBtn minus" href="?act=cart&xuli=delete&id=<?= $value['MaSP'] ?>"><i
                                                class="icon icon-minus"></i></a>
                                        <input class="cart__qty-input qty" type="number" name="updates[]" id="qty"
                                            value="<?= $value['SoLuong'] ?>" min="0">
                                        <a class="qtyBtn plus" href="?act=cart&xuli=update&id=<?= $value['MaSP'] ?>"><i
                                                class="icon icon-plus"></i></a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-right small--hide cart-price">
                                <div><span class="money"><?= number_format($value['SoLuong'] * $value['DonGia']);
                                                                    $total += $value['SoLuong'] * $value['DonGia'];
                                                                    $khuyenMai += $value['KM'] * $value['SoLuong']; ?>
                                        VND</span></div>
                            </td>

                            <td class="text-center small--hide"><a
                                    href="?act=cart&xuli=deleteall&id=<?= $value['MaSP'] ?>"
                                    class="btn btn--secondary cart__remove" title="Remove tem"><i
                                        class="icon icon anm anm-times-l"></i></a></td>
                        </tr>
                        <?php }
                        } ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" class="text-left"><a href="?act=home"
                                    class="btn btn-secondary btn--small cart-continue">Continue shopping</a></td>
                            <td colspan="3" class="text-right">
                                <button type="submit" name="delete"
                                    class="btn btn-secondary btn--small  small--hide">Delete Cart</button>
                                <button type="submit" name="update"
                                    class="btn btn-secondary btn--small cart-continue ml-2">Update Cart</button>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </form>
        </div>

        <div class="actionRow">
            <div><input type="button" class="btn btn-secondary btn--small" value="Calculate shipping"></div>
        </div>
        </form>
    </div>

    <div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer">
        <div class="solid-border">
            <form class="" action="?act=checkout" method="post">
                <div class="row border-bottom pb-2">
                    <span class="col-12 col-sm-6 cart__subtotal-title">Cost Product</span>
                    <span class="col-12 col-sm-6 text-right"><span class="money"><?= number_format($total) ?>
                            VND</span></span>
                </div>
                <div class="row border-bottom pb-2 pt-2">
                    <span class="col-12 col-sm-6 cart__subtotal-title">SALE</span>
                    <span class="col-12 col-sm-6 text-right"><span class="money"><?= number_format(-$khuyenMai) ?>
                            VND</span></span>
                </div>
                <div class="row border-bottom pb-2 pt-2">Free ship<span class="col-12 col-sm-6 text-right"></span>
                </div>
                <div class="row border-bottom pb-2 pt-2">
                    <span class="col-12 col-sm-6 cart__subtotal-title"><strong>Total Payment:</strong></span>
                    <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span
                            class="money"><?= number_format($count) ?> VND</span></span>
                </div>
                <div class="cart__shipping"></div>
                <?php if ($_SESSION['sanpham'] != null) { ?>
                <p class="cart_tearm">

                    <a type="submit" name="checkout" id="cartCheckout" class="btn btn--small-wide checkout"
                        href="?act=checkout" value="Proceed To Checkout" disabled="disabled">CONDUCT INSPECT</a>
                <div class="paymnet-img"><img src="assets/images/payment-img.jpg" alt="Payment"></div>
                <?php } ?>
            </form>
        </div>

    </div>
</div>
</div>

</div>
</div>