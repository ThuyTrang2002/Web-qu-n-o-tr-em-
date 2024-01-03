<style>
.heading-font {
    font-weight: bold;
}
</style>
<!--Collection Banner-->
<div class="collection-header">
    <div class="collection-hero">
    </div>
</div>
<!--End Collection Banner-->
<!--Home slider-->

<div class="section imgBanners pt-0">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 pl-0">
                <div class="imgBnrOuter">
                    <div class="inner btmright">
                        <img data-src="assets/images/home1.jpg" src="assets/images/home1.jpg" alt=""
                            class="blur-up lazyload" />
                        <div class="ttl">from 50.000 VND<h5>Trendy Bags</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 pr-0">
                <div class="imgBnrOuter">
                    <div class="inner btmright">
                        <img data-src="assets/images/home2.jpg" src="assets/images/home2.jpg" alt=""
                            class="blur-up lazyload" />
                        <div class="ttl">from 130.000 VND<h5>Dress Beauty</h5>
                        </div>
                    </div>
                </div>
                <div class="imgBnrOuter mt-4">
                    <div class="inner btmright">
                        <img data-src="assets/images/home3.jpg" src="assets/images/home3.jpg" alt=""
                            class="blur-up lazyload" />
                        <div class="ttl">from 100.000 VND<h5>Shoes Collection</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Small Banners-->

<!--Collection Tab slider-->

<div class="tab-slider-product section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="section-header text-center">
                    <h2 class="h2 heading-font">BUY NOW!</h2>
                </div>
                <div class="tabs-listing">
                    <ul class="tabs clearfix">
                        <li class="active" rel="tab1">Girl</li>
                        <li rel="tab2">Boy</li>
                    </ul>
                    <div class="tab_container">

                        <!--Wmen-->
                        <div id="tab1" class="tab_content grid-products style3">
                            <div class="productSlider">

                                <?php foreach ($data_sanpham1 as $value) {
                                            $detailModel = new Home();
                                            $GiaTriKM = $detailModel->getGiaTriKM($value['MaSP']);
                                            $GiaSauKhuyenMai = $value['DonGia'] - $GiaTriKM;?>

                                <div class="col-12 item">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a
                                            href="?act=detail&xuli=detail&id=<?=$value['MaSP']?>"><?= $value['TenSP'] ?></a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="?act=detail&xuli=detail&id=<?=$value['MaSP']?>">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src=""
                                                src="assets/<?=$value['HinhAnh1']?>" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src=""
                                                src="assets/<?=$value['HinhAnh2']?>" alt="image" title="product">
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels rectangular"><span
                                                    class="lbl pr-label2">Girl</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->
                                    </div>
                                    <!-- end product image -->

                                    <div class="button-set button-style2">
                                        <div class="variants add btn-style2">
                                            <a href="?act=cart&xuli=add&id=<?=$value['MaSP']?>"
                                                class="btn cartIcon btn-addto-cart" id="add-cart" type="button"
                                                tabindex="0" style="width:100%"><i class="icon anm anm-bag-l"></i></a>
                                        </div>

                                        <a href="javascript:void(0)" title="Quick View"
                                            class="btn-style2 quick-view-popup quick-view" data-toggle="modal"
                                            data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn btn-style2">
                                            <a class="wishlist add-to-wishlist"
                                                href="?act=wishlist&xuli=add&id=<?=$value['MaSP']?>">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                        <div class="compare-btn btn-style2">
                                            <a class="compare add-to-compare"
                                                href="?act=compare&xuli=add&id=<?=$value['MaSP']?>"
                                                title="Add to Compare">
                                                <i class="icon anm anm-random-r"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span
                                                class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                                <span id="ProductPrice-product-template">
                                                    <span class="money"><?= number_format($GiaSauKhuyenMai) ?>VND</span>
                                                </span>
                                            </span>
                                            <span class="product-price__price product-price__price--compare-at"
                                                id="ComparePrice-product-template" data-money-convertible="">
                                                <del><span
                                                        class="money"><?= number_format($value['DonGia']) ?>VND</span></del>
                                            </span>
                                        </div>
                                        <!-- End product price -->

                                        <div class="product-review">
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <?php } ?>


                            </div>
                        </div>

                        <!--BABY BOY-->

                        <div id="tab2" class="tab_content grid-products style3">
                            <div class="productSlider">
                                <?php foreach ($data_sanpham2 as $value) {
                                            $detailModel = new Home();
                                            $GiaTriKM = $detailModel->getGiaTriKM($value['MaSP']);
                                            $GiaSauKhuyenMai = $value['DonGia'] - $GiaTriKM;
                                            ?>
                                <div class="col-12 item">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a
                                            href="?act=detail&xuli=detail&id=<?=$value['MaSP']?>"><?= $value['TenSP'] ?></a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="?act=detail&xuli=detail&id=<?=$value['MaSP']?>">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src=""
                                                src="assets/<?=$value['HinhAnh1']?>" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src=""
                                                src="assets/<?=$value['HinhAnh2']?>" alt="image" title="product">
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels round"><span class="lbl pr-label1">Boy</span>
                                            </div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->
                                    </div>
                                    <!-- end product image -->

                                    <div class="button-set button-style2">
                                        <div class="variants add btn-style2">
                                            <a href="?act=cart&xuli=add&id=<?=$value['MaSP']?>"
                                                class="btn cartIcon btn-addto-cart" id="add-cart" type="button"
                                                tabindex="0" style="width:100%"><i class="icon anm anm-bag-l"></i></a>
                                        </div>

                                        <a href="javascript:void(0)" title="Quick View"
                                            class="btn-style2 quick-view-popup quick-view" data-toggle="modal"
                                            data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn btn-style2">
                                            <a class="wishlist add-to-wishlist"
                                                href="?act=wishlist&xuli=add&id=<?=$value['MaSP']?>">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                        <div class="compare-btn btn-style2">
                                            <a class="compare add-to-compare"
                                                href="?act=compare&xuli=add&id=<?=$value['MaSP']?>"
                                                title="Add to Compare">
                                                <i class="icon anm anm-random-r"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span
                                                class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                                <span id="ProductPrice-product-template">
                                                    <span class="money"><?= number_format($GiaSauKhuyenMai) ?>VND</span>
                                                </span>
                                            </span>
                                            <span class="product-price__price product-price__price--compare-at"
                                                id="ComparePrice-product-template" data-money-convertible="">
                                                <del><span
                                                        class="money"><?= number_format($value['DonGia']) ?>VND</span></del>
                                            </span>
                                        </div>
                                        <!-- End product price -->

                                        <div class="product-review">
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star-o"></i>
                                            <i class="font-13 fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <!-- End product details -->

                                </div>

                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Collection Tab slider-->

<!--Feature Content-->
<div class="section feature-content">
    <div class="container">
        <div class="row">
            <div class="feature-row">
                <div class="col-12 col-sm-12 col-md-6 feature-row__item">
                    <img src="assets/images/begaimodel.jpeg" title="Fast Fashion Only available at BElle" />
                </div>
                <div
                    class="col-12 col-sm-12 col-md-6 feature-row__item feature-row__text feature-row__text--left text-left">
                    <div class="row-text">
                        <h2 class="h2">Fast Fashion </h2>
                        <div class="rte-setting featured-row__subtext">
                            <p>Trang Anh Kids Shop là nhãn hiệu thời trang trẻ em cao cấp đã được đăng ký bảo hộ nhãn
                                hiệu hàng hóa tại Cục Sở Hữu Trí Tuệ Việt Nam.</p>
                            <p>Với mong muốn mang đến những sản phẩm may mặc hàng Việt Nam chất lượng, đặc biệt là an
                                toàn cho sức khỏe của trẻ nhỏ.</p>
                            <p>Lấy cảm hứng từ nhu cầu thực tế của người tiêu dùng Việt Nam, TA Kids Shop cho ra những
                                mẫu sản phẩm vừa lạ, vừa độc đáo vừa hợp thời trang phù hợp với xu hướng thời trang
                                trong nước và quốc tế,dành cho các bé từ 1-12 tuổi.</p>
                        </div>
                        <a href="#" class="btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Feature Content-->

<!--Instagram Section-->
<div class="section instagram-feed-section">
    <div class="section-header text-center">
        <h2 class="h2 heading-font">Follow us On Instagram</h2>
        <a href="https://www.instagram.com/_iam.sauu/">@_iam.sauu</a>
        <a href="https://www.instagram.com/thwi.gnuart/">@thwi.gnuart</a>
    </div>
    <!--Instagram ID-->
    <div id="instafeed" class="imlow_resolution"></div>
    <!--End Instagram ID-->
</div>
</div>
<!--End Instagram Section-->

<!--End Body Content-->