<style>
.product-image-cell {
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.featured-image {
    /* Các thuộc tính CSS khác cho hình ảnh */
    max-width: 100%; /* Để hình ảnh không vượt quá kích thước của cột */
}
    
    .order-title{
        font-family: 'Helvetica';
    }
    .login-title {
        font-family: 'Helvetica';
    }
    .page-width{
        font-family: 'Helvetica';
    }
	.text-left {
        font-family: 'Helvetica';
    }
	.payment-title{
        font-family: 'Helvetica';
    }
	.card-link{
        font-family: 'Helvetica';
    }

</style>

<!--Page Title-->
<div class="page section-header text-center">
    	    <div class="page-title">
    	        <div class="wrapper">
    	            <h1 class="page-width">Checkout</h1>
    	        </div>
    	    </div>
    	</div>
    	<!--End Page Title-->

    	<div class="container">
    	    <div class="row">
    	        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3">
    	            <form>
    	                <div class="row">
    	                    <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">

    	                    </div>
    	                    <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">

    	                    </div>
    	                </div>
    	                <div class="row">
    	                    <div class="col-md-12">
    	                        <div class="form-check width-100 margin-20px-bottom">

    	                        </div>
    	                    </div>
    	                </div>
    	            </form>
    	        </div>
    	    </div>
    	</div>
    	</div>


    	<div class="row billing-fields">
    	    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 sm-margin-30px-bottom">
    	        <div class="create-ac-content bg-light-gray padding-20px-all">
    	            <form action="?act=checkout&xuli=oder" method="post">
    	                <fieldset>
    	                    <h2 class="login-title mb-3">Billing details</h2>
    	                    <div class="row">

    	                        <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
    	                            <label for="input-lastname">Receiver <span class="required-f">*</span></label>
    	                            <input name="NguoiNhan" value="<?php echo $_SESSION['login']['Ten']  ?>" id="input-lastname" type="text">
    	                        </div>
    	                        <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
    	                            <label for="input-email">E-Mail <span class="required-f">*</span></label>
    	                            <input name="Email" value="<?php echo $_SESSION['login']['Email']  ?>" id="input-email" type="email">
    	                        </div>
    	                    </div>
    	                    <div class="row">

    	                        <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
    	                            <label for="input-telephone">Telephone <span class="required-f">*</span></label>
    	                            <input name="SDT" value="<?php echo $_SESSION['login']['SDT']  ?>" id="input-telephone" type="tel">
    	                        </div>
    	                        <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
    	                            <label for="input-address-1">Address <span class="required-f">*</span></label>
    	                            <input name="DiaChi" value="<?php echo $_SESSION['login']['DiaChi']  ?>" id="input-address-1" type="text">
    	                        </div>
    	                    </div>
    	                </fieldset>



    	                <div class="order-button-payment">
    	                    <input type="submit" name="" value="Place order" class="btn">
    	                </div>
    	            </form>
    	        </div>
    	    </div>

    	    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
    	        <div class="your-order-payment">
    	            <div class="your-order">
    	                <h2 class="order-title mb-4">Your Order</h2>

    	                <div class="table-responsive-sm order-table">
    	                    <table class="bg-white table table-bordered table-hover text-center">
    	                        <thead>
    	                            <tr>
    	                                <th class="text-left">Product Name</th>
    	                                <th class="text-left">Price</th>
    	                                <th class="text-left">Promotion</th>
    	                                <th class="text-left">Qty</th>
    	                                <th class="text-left">Subtotal</th>
    	                            </tr>
    	                        </thead>
    	                        <tbody>
    	                            <?php if (isset($_SESSION['sanpham'])) {
                                        foreach ($_SESSION['sanpham'] as $value) { ?>
    	                                    <tr>
    	                                        <td class="text-left"><?= $value['TenSP'] ?></td>
    	                                        <td><?= number_format($value['DonGia'])?></td>
    	                                        <td><?= number_format(-($value['KM'] * $value['SoLuong'])) ?></td>
    	                                        <td><?= $value['SoLuong'] ?></td>
    	                                        <td><?= number_format($value['ThanhTien']) ?></td>
    	                                    </tr>
    	                            <?php }
                                    } ?>
    	                        </tbody>
    	                        <tfoot class="font-weight-600">
    	                            <!-- <tr>
    	                                <td colspan="4" class="text-right">SALE</td>
    	                                <td></td>
    	                            </tr> -->
    	                            <tr>
    	                                <td colspan="4" class="text-right">Total</td>
    	                                <td><?= number_format($count) ?> VND</td>
    	                            </tr>
    	                        </tfoot>
    	                    </table>
    	                </div>
    	            </div>

    	            <hr />

    	            <div class="your-payment">
    	                <h2 class="payment-title mb-3">payment method</h2>
    	                <div class="payment-method">
    	                    <div class="payment-accordion">
    	                        <div id="accordion" class="payment-section">
    	                            <div class="card mb-2">
    	                                <div class="card-header">
    	                                    <a class="card-link" data-toggle="collapse" href="#collapseOne">Payment on Delivery </a>
    	                                </div>
    	                                <div id="collapseOne" class="collapse" data-parent="#accordion">
    	                                    <div class="card-body">
    	                                        <p class="no-margin font-15">COD</p>
    	                                    </div>
    	                                </div>
    	                            </div>


    	                        </div>
    	                    </div>
    	                </div>
    	            </div>
    	        </div>
    	    </div>
    	</div>
    	</div>