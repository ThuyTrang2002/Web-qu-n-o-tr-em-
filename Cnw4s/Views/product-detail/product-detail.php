<style media="screen">
          @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
          fieldset{
            margin: 0;
            padding: 0;
          }

          /****** Style Star Rating Widget *****/

          .rating {
            border: none;
            float: left;
          }

          .rating>input {
            display: none;
          }

          .rating>label:before {
            margin: 5px;
            font-size: 1.25em;
            font-family: FontAwesome;
            display: inline-block;
            content: "\f005";
          }

          .rating>.half:before {
            content: "\f089";
            position: absolute;
          }

          .rating>label {
            color: #ddd;
            float: right;
          }


          /***** CSS Magic to Highlight Stars on Hover *****/

          .rating>input:checked~label,

          /* show gold star when clicked */

          .rating:not(:checked)>label:hover,

          /* hover current star */

          .rating:not(:checked)>label:hover~label {
            color: #FFD700;
          }


          /* hover previous stars in list */

          .rating>input:checked+label:hover,

          /* hover current star when changing rating */

          .rating>input:checked~label:hover,
          .rating>label:hover~input:checked~label,

          /* lighten current selection */

          .rating>input:checked~label:hover~label {
            color: #FFED85;
          }
          .product-price__price--compare-at {
           text-decoration: line-through;
        }
        .product-form__cart-submit {
        background-color: white;
        color: black;
        font-size: 18px;
        font-weight: bold;
        }
   
</style>
            <!--MainContent-->
            <div id="MainContent" class="main-content" role="main">
                <!--Breadcrumb-->
                <div class="bredcrumbWrap">
                    <div class="container breadcrumbs">
                        <a href="index.html" title="Back to the home page">Home</a><span aria-hidden="true">›</span><span><?= $data['TenSP'] ?></span>
                    </div>
                </div>
                <!--End Breadcrumb-->

                <div id="ProductSection-product-template" class="product-template__container prstyle2 container">
                    <!--#ProductSection-product-template-->
                    <div class="product-single product-single-1">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product-details-img product-single__photos bottom">
                                    <div class="zoompro-wrap product-zoom-right pl-20">
                                        <div class="zoompro-span">
                                            <img class="blur-up lazyload zoompro" data-zoom-image="assets/<?=$data['HinhAnh1']?>" alt="" src="assets/<?=$data['HinhAnh1']?>" />
                                        </div>
                                        <div class="product-labels"><span class="lbl on-sale">Sale</span><span class="lbl pr-label1">new</span></div>
                                        
                                    </div>
                                    <div class="product-thumb product-thumb-1">
                                        <div id="gallery" class="product-dec-slider-1 product-tab-left">
                                            <a data-image="assets/<?=$data['HinhAnh2']?>" data-zoom-image="assets/<?=$data['HinhAnh2']?>" class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" src="assets/<?=$data['HinhAnh2']?>" alt="" />
                                            </a>
                                              <a data-image="assets/<?=$data['HinhAnh1']?>" data-zoom-image="assets/<?=$data['HinhAnh1']?>" class="slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" tabindex="-1">
                                                  <img class="blur-up lazyload" src="assets/<?=$data['HinhAnh1']?>" alt="" />
                                              </a>
                                                <a data-image="assets/<?=$data['HinhAnh3']?>" data-zoom-image="assets/<?=$data['HinhAnh3']?>" class="slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1">
                                                    <img class="blur-up lazyload" src="assets/<?=$data['HinhAnh3']?>" alt="" />
                                                </a>
                                        </div>
                                    </div>
                                    <div class="lightboximages">
                                        <a href="assets/<?=$data['HinhAnh2']?>" data-size="1462x2048"></a>
                                        <a href="assets/<?=$data['HinhAnh1']?>" data-size="1462x2048"></a>
                                        <a href="assets/<?=$data['HinhAnh3']?>" data-size="1462x2048"></a>
                                    </div>

                                </div>
                                
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product-single__meta">
                                    <h1 class="product-single__title"><?= $data['TenSP'] ?></h1>
                                    <div class="product-nav clearfix">
                                        <a href="#" class="next" title="Next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="prInfoRow">
                                        <div class="product-stock"> <span class="instock ">In Stock</span> <span class="outstock hide">Available</span> </div>
                                        <div class="product-sku">SKU: <span class="variant-sku">ID<?=$data['MaSP']?></span></div>
                                        <div class="product-review"><a class="reviewLink" href="#tab2"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><span class="spr-badge-caption"></span></a></div>
                                    </div>
<p class="product-single__price product-single__price-product-template">
    <span class="visually-hidden">Regular price</span>
    <?php
    $detailModel = new Detail();
    $GiaTriKM = $detailModel->getGiaTriKM($data['MaSP']);
    $GiaSauKhuyenMai = $data['DonGia'] - $GiaTriKM;
    ?>
    <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
        <span id="ProductPrice-product-template">
            <span class="money"><?= number_format($GiaSauKhuyenMai) ?>VND</span>
        </span>
    </span>
    <span class="product-price__price product-price__price--compare-at" id="ComparePrice-product-template" data-money-convertible="">
        <span class="money"><?= number_format($data['DonGia']) ?>VND</span>
    </span>
</p>


                                <div class="product-single__description rte">
                                    <p><?= $data['MoTa'] ?></p>
                                </div>
                                <form method="post" action="?act=cart&xuli=add&id=<?=$data['MaSP']?>" id="product_form_10508262282" accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data">
                                    <div class="swatch clearfix swatch-0 option1" data-option-index="0">
                                        
                                    </div>
                                    <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                        <div class="product-form__item">
                                          <label class="header">Size: <span class="slVariant"></span></label>
                                          <div data-value="60" class="swatch-element 60 available">
                                            <input class="swatchInput" id="swatch-1-60" type="radio" name="size" value="60" >
                                            <label class="swatchLbl small" for="swatch-1-60" title="60">60</label>
                                          </div>
                                          <div data-value="70" class="swatch-element 70 available">
                                            <input class="swatchInput" id="swatch-1-70" type="radio" name="size" value="70" >
                                            <label class="swatchLbl small" for="swatch-1-70" title="70">70</label>
                                          </div>
                                          <div data-value="90" class="swatch-element 90 available">
                                            <input class="swatchInput" id="swatch-1-90" type="radio" name="size" value="90" >
                                            <label class="swatchLbl small" for="swatch-1-90" title="90">90</label>
                                          </div>
                                          <div data-value="100" class="swatch-element 100 available">
                                            <input class="swatchInput" id="swatch-1-100" type="radio" name="size" value="100">
                                            <label class="swatchLbl small" for="swatch-1-100" title="100">100</label>
                                          </div>
                                          <div data-value="110" class="swatch-element 110 available">
                                            <input class="swatchInput" id="swatch-1-110" type="radio" name="size" value="110">
                                            <label class="swatchLbl small" for="swatch-1-110" title="110">110</label>
                                         
                                        </div>
                                    </div>
                                    <p class="infolinks"><a href="#sizechart" class="sizelink btn"> Size Guide</a></p>
                                    <!-- Product Action -->
                                    <div class="product-action clearfix">
                                        <div class="product-form__item--quantity">
                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                    <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-form__item--submit">
                                            <button type="button" name="add" class="btn product-form__cart-submit">
                                                <span><input type="submit" value="ADD TO CART"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- End Product Action -->
                                </form>
                                <div class="display-table shareRow">
                                        
                                        <div class="display-table-cell text-right">
                                            <div class="social-sharing">
                                                <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-facebook" title="Share on Facebook">
                                                    <i class="fa fa-facebook-square" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Share</span>
                                                </a>
                                                <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-twitter" title="Tweet on Twitter">
                                                    <i class="fa fa-twitter" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Tweet</span>
                                                </a>
                                                <a href="#" title="Share on google+" class="btn btn--small btn--secondary btn--share" >
                                                    <i class="fa fa-google-plus" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Google+</span>
                                                </a>
                                                <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-pinterest" title="Pin on Pinterest">
                                                    <i class="fa fa-pinterest" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Pin it</span>
                                                </a>
                                                <a href="#" class="btn btn--small btn--secondary btn--share share-pinterest" title="Share by Email" target="_blank">
                                                    <i class="fa fa-envelope" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Email</span>
                                                </a>
                                             </div>
                                        </div>
                                    </div>
                            </div>
                            	<!--Product Tabs-->
                                <div class="tabs-listing">
                                    <div class="tab-container">
                                    	<h3 class="acor-ttl active" rel="tab1">Product Details</h3>
                                        <div id="tab1" class="tab-content">
                                            <div class="product-description rte">
                                                <p><?= $data['TenSP'] ?></p>
                                                <ul>
                                                  <li><?= $data['MoTa'] ?></li>
                                                  <li><?= $data['MotaCT'] ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h3 class="acor-ttl" rel="tab2">Product Reviews</h3>
                                        <div id="tab2" class="tab-content">
                                            <div id="shopify-product-reviews">
                                                <div class="spr-container">
                                                    <div class="spr-header clearfix">
                                                        <div class="spr-summary">
                                                            <span class="product-review"><a class="reviewLink"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i> </a><span class="spr-summary-actions-togglereviews">Based on 6 reviews456</span></span>
                                                            <span class="spr-summary-actions">
                                                                <a href="#" class="spr-summary-actions-newreview btn">Write a review</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="spr-content">
                                                        <div class="spr-form clearfix">
                                                            <form method="post" action="?act=detail&xuli=comment" id="new-review-form" class="new-review-form">
                                                                <h3 class="spr-form-title">Write a review</h3>
                                                                <input type="hidden" name="Masp" value="<?= $data['MaSP']?>">
                                                                <fieldset class="spr-form-contact">
                                                                    <div class="spr-form-contact-name">
                                                                      <label class="spr-form-label" for="review_author_10508262282">Name</label>
                                                                      <input class="spr-form-input spr-form-input-text " id="review_author_10508262282" type="text" name="namebinhluan" value="" placeholder="Enter your name">
                                                                    </div>
                                                                    <div class="spr-form-contact-email">
                                                                      <label class="spr-form-label" for="review_email_10508262282">Email</label>
                                                                      <input class="spr-form-input spr-form-input-email " id="review_email_10508262282" type="email" name="emailbinhluan" value="" placeholder="john.smith@example.com">
                                                                    </div>
                                                                </fieldset>
                                                                <fieldset class="spr-form-review">
                                                                  <div class="spr-form-review-rating">
                                                                    <label class="spr-form-label">Rating</label>
                                                                    <div class="spr-form-input spr-starrating">
                                                                      <fieldset class="rating" require>
                                                                        <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label>
                                                                        <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                                                        <input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                                                        <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                                                        <input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>
                                                                        <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                                                        <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                                                        <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                                                        <input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                                                        <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                                                      </fieldset>
                                                                     </div>
                                                                  </div>
                                                                  <br>
                                                                  <div class="spr-form-review-title">
                                                                    <input class="spr-form-input spr-form-input-text " id="review_title_10508262282" type="text" name="vande" value="" placeholder="Give your review a title">
                                                                  </div>

                                                                  <div class="spr-form-review-body">
                                                                    <label class="spr-form-label" for="review_body_10508262282">Body of Review <span class="spr-form-review-body-charactersremaining">(1500)</span></label>
                                                                    <div class="spr-form-input">
                                                                      <textarea class="spr-form-input spr-form-input-textarea " id="review_body_10508262282" data-product-id="10508262282" name="chitietvande" rows="10" placeholder="Write your comments here"></textarea>
                                                                    </div>
                                                                  </div>
                                                                </fieldset>
                                                                <fieldset class="spr-form-actions">
                                                                    <input type="submit" class="spr-button spr-button-primary button button-primary btn btn-primary" name="" value="Submit Review">
                                                                </fieldset>
                                                            </form>

                                                        </div>
                                                        <div class="spr-reviews">


                                                            <div class="spr-review">
                                                              <?php
                                                                    for ($i = 0; $i < (count($data_cm)); $i++) {
                                                                        ?>
                                                                <div class="spr-review-header">
                                                                    <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink">
                                                                      <?php for($n=1;$n<=$data_cm[$i]['Star'];$n++){?>
                                                                      <i class="font-13 fa fa-star"></i>
                                                                    <?php } ?>
                                                                    </span></span>
                                                                    <h3 class="spr-review-header-title"><?= $data_cm[$i]['Tomtat'] ?></h3>
                                                                    <span class="spr-review-header-byline"><strong><?= $data_cm[$i]['TenUser'] ?></strong> on <strong><?= $data_cm[$i]['NgayCom'] ?></strong></span>
                                                                </div>
                                                                <div class="spr-review-content">
                                                                    <p class="spr-review-content-body"><?= $data_cm[$i]['Noidung'] ?>.</p>
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
                                <!--End Product Tabs-->
                        	</div>
                    	</div>
                    <!--End-product-single-->

                    </div>
                	<!--#ProductSection-product-template-->
            	</div>
            <!--MainContent-->
        </div>
