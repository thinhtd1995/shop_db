<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
use frontend\views\widgets\MenuLeft;
?>
<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
      <div class="row">
        <!-- ============================================== SIDEBAR ============================================== -->
          
        <?= MenuLeft::widget() ?>
        <div class="col-md-9">
          <div id="hero">
            <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
              <div class="item" style="background-image: url(assets/images/products/slide1.jpg);">

                <!-- /.container-fluid -->
              </div>
              <!-- /.item -->

              <div class="item" style="background-image: url(assets/images/products/slide2.jpg);">

                <!-- /.container-fluid -->
              </div>
              <!-- /.item -->

            </div>
            <!-- /.owl-carousel -->
          </div>
          <!-- ============================================== INFO BOXES ============================================== -->
          <div class="info-boxes wow fadeInUp">
            <div class="info-boxes-inner">
              <div class="row">
                <div class="col-md-6 col-sm-4 col-lg-4">
                  <div class="info-box">
                    <div class="row">
                      <div class="col-xs-12">
                        <h4 class="info-box-heading green">money back</h4>
                      </div>
                    </div>
                    <h6 class="text">30 Days Money Back Guarantee</h6>
                  </div>
                </div>
                <!-- .col -->

                <div class="hidden-md col-sm-4 col-lg-4">
                  <div class="info-box">
                    <div class="row">
                      <div class="col-xs-12">
                        <h4 class="info-box-heading green">free shipping</h4>
                      </div>
                    </div>
                    <h6 class="text">Shipping on orders over $99</h6>
                  </div>
                </div>
                <!-- .col -->

                <div class="col-md-6 col-sm-4 col-lg-4">
                  <div class="info-box">
                    <div class="row">
                      <div class="col-xs-12">
                        <h4 class="info-box-heading green">Special Sale</h4>
                      </div>
                    </div>
                    <h6 class="text">Extra $5 off on all items </h6>
                  </div>
                </div>
                <!-- .col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.info-boxes-inner -->

          </div>
        </div>
      </div>
    </div>
    <div class="container-fuild">
      <div id="block-22" class="quytrinh col-md-12 col-xs-12  ">
        <div class="col-md-12">
          <h3>tính giá tự động</h3>


          <form id="payform" name="payform" method="post" action="gio-hang">


            <div class="quytrinhchitiet col-md-12">
              <div id="step1" class="qt ai col-xs-12 ">
                <div class="select">
                  <span>1</span>
                  <p>Chọn nhóm sản phẩm</p>
                  <select class="" name="idpro" id="idpro">
                    <option value="">---Chọn---</option>
                    <option value="19">LY DÙNG CHO ĐỒ UỐNG</option>
                    <option value="9">LY DÙNG CHO KEM</option>
                    <option value="26">TÔ CHỨA ĐỰNG THỰC PHẨM</option>
                    <option value="30">HỘP VÀ BAO GÓI BẰNG GIẤY</option>
                    <option value="33">HỘP VÀ BAO GÓI BẰNG NHỰA</option>
                    <option value="23">PHỤ KIỆN</option>

                  </select>

                </div>
              </div>
              <div id="step2" class="qt ai col-xs-12">
                <div class="select">
                  <span>2</span>
                  <p>Chọn sản phẩm</p>
                  <select name="oz-cat" id="oz-cat">
                    <option value="">---Chọn---</option>
                  </select>
                </div>
                <div id="pricepay">
                </div>
              </div>
              <div id="step3" class="qt ai col-xs-12">
                <div class="select">
                  <span>3</span>
                  <p>Chọn kích thước</p>
                  <select name="oz-pro" id="oz-pro">
                    <option value="">---Chọn---</option>
                  </select>
                </div>
              </div>
              <div id="step4" class="qt ai col-xs-12 ">
                <div class="select">
                  <span>4</span>
                  <p>Chọn số màu in</p>
                  <select id="color_oz" name="color">
                    <option value="">---Chọn---</option>
                    <option value="1">Không in</option>
                    <option value="2">In theo yêu cầu</option>
                  </select>
                </div>
              </div>
              <div id="step6" class="qt ai col-xs-12">
                <div class="select">
                  <span>5</span>
                  <p>Nhập số lượng</p>
                  <input type="" name="quantity" id="quantity93">
                </div>
                <div id="pricepay">
                </div>
              </div>
              <div id="step5" class="qt col-xs-12">
                <div>
                  <span>6</span>
                  <a id="submitpay" href="javascript:void(0)">
                    <img src="./assets/images/step5.png" alt="pay">
                    <!-- <p>Nhận báo giá</p> -->
                  </a>
                </div>
              </div>
            </div>
            <input type="hidden" name="module" value="product">
            <input type="hidden" name="view" value="cart">
            <input type="hidden" name="task" value="display">
          </form>
        </div>
        <style>
          #carousel-example-generic {
            margin-bottom: 40px;
          }

          .quytrinh {
            height: 210px;
            margin-bottom: 5px;
            background: #313a45;
            margin-bottom: 40px;
            padding-left: 35px;
          }

          .quytrinh .quytrinhchitiet {
            height: 112px;
          }

          .quytrinh h3:before {
            width: 30px;
            height: 50px;
            content: "";
            position: absolute;
            background-image: url(./assets/images/bg_apcpack.png);
            background-repeat: no-repeat;
            background-position: -26px -35px;
            margin-left: -55px;
            margin-top: -18px;
          }

          .quytrinh h3 {
            font-size: 18px !important;
            font-weight: bold !important;
            color: #ffffff !important;
            text-transform: uppercase !important;
            margin-bottom: 25px !important;
            margin-top: 25px !important;
            margin-left: 50px;
          }

          .quytrinh .quytrinhchitiet {
            height: 112px;
          }

          .quytrinh .quytrinhchitiet .qt .select select {
            height: 30px;
            border-radius: 15px;
            width: 90%;
            border: 1px solid #313A45;
            color: #313A45;
            padding: 5px;
            outline: none;
            bottom: 10px;
          }

          .quytrinh .quytrinhchitiet .qt .select select option {
            padding: 10px !important;
            font-size: 15px !important;
            background: #fff !important;
          }

          #step1 {
            background: #a20010;
            position: relative;
            width: 18%;
          }

          .quytrinh .quytrinhchitiet .ai {
            display: inline-block;
            padding-top: 10px;
            padding-bottom: 10px;
            height: 100%;
          }

          .quytrinh .quytrinhchitiet .qt {
            /* width: 20%; */
            float: left;
          }

          .quytrinh .quytrinhchitiet .qt .select {
            margin: 12px 25px;
          }

          .quytrinh .quytrinhchitiet .qt div span {
            color: #fff;
            font-weight: bold;
            font-size: 155px;
            top: -52px;
            left: -50px;
            position: absolute;
            z-index: 3;
            font-family: arial;
          }

          .quytrinh .quytrinhchitiet .qt div p {
            font-size: 13px;
            color: #ffffff;
            font-weight: bold;
            width: 100%;
          }

          .quytrinh .quytrinhchitiet .qt .select select {
            height: 30px;
            border-radius: 15px;
            width: 90%;
            /* border: 1px solid #313A45; */
            /* color: #313A45; */
            padding: 5px;
            outline: none;
            bottom: 10px;
          }

          #step1:after {
            position: absolute;
            right: -59px;
            top: -34px;
            width: 100px;
            height: 180px;
            z-index: 2;
            content: "";
            background: url(./assets/images/step1.png) center no-repeat;
          }

          #step2 {
            background: #ff8400;
            position: relative;
            width: 18%;
          }

          #step2:after {
            position: absolute;
            right: -59px;
            top: -34px;
            width: 100px;
            height: 180px;
            z-index: 2;
            content: "";
            background: url(./assets/images/step2.png) center no-repeat;
          }

          #step3 {
            background: #0076c1;
            position: relative;
            width: 18%;
          }

          #step3:after {
            position: absolute;
            right: -59px;
            top: -34px;
            width: 100px;
            height: 180px;
            z-index: 2;
            content: "";
            background: url(./assets/images/step3.png) center no-repeat;
          }

          #step4 {
            background: #450879;
            position: relative;
            width: 18%;
          }

          #step4:after {
            position: absolute;
            right: -59px;
            top: -34px;
            width: 100px;
            height: 180px;
            z-index: 2;
            content: "";
            background: url(./assets/images/step4.png) center no-repeat;
          }

          #step6 {
            background: #01869a;
            position: relative;
            width: 18%;
          }

          #step6:after {
            position: absolute;
            right: -59px;
            top: -34px;
            width: 100px;
            height: 180px;
            z-index: 2;
            content: "";
            background: url(./assets/images/step6.png) center no-repeat;
          }

          #step5 {
            height: 100%;
            width: 10%;
            background: #3c4652;
            border: 1px solid #536275;
            padding-right: 0;
          }
          .quytrinh .quytrinhchitiet .qt .select input {
    height: 30px;
    border-radius: 15px;
    width: 80%;
    border: none;
    border: 1px solid #313A45;
    color: #fff;
    padding: 5px;
    outline: none;
    bottom: 10px;
}
#submitpay img {
    height: 120px;
    position: absolute;
    right: -15px;
}
        </style>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <!-- ============================================== HOT DEALS ============================================== -->
          <div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
            <h3 class="section-title">hot deals</h3>
            <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
              <div class="item">
                <div class="products">
                  <div class="hot-deal-wrapper">
                    <div class="image"> <img src="images/products/p10.jpg" alt=""> </div>
                    <div class="sale-offer-tag"><span>49%<br>
                        off</span></div>
                    <div class="timing-wrapper">
                      <div class="box-wrapper">
                        <div class="date box"> <span class="key">120</span> <span class="value">DAYS</span> </div>
                      </div>
                      <div class="box-wrapper">
                        <div class="hour box"> <span class="key">20</span> <span class="value">HRS</span> </div>
                      </div>
                      <div class="box-wrapper">
                        <div class="minutes box"> <span class="key">36</span> <span class="value">MINS</span> </div>
                      </div>
                      <div class="box-wrapper hidden-md">
                        <div class="seconds box"> <span class="key">60</span> <span class="value">SEC</span> </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.hot-deal-wrapper -->

                  <div class="product-info text-left m-t-20">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="product-price"> <span class="price"> $600.00 </span> <span
                        class="price-before-discount">$800.00</span> </div>
                    <!-- /.product-price -->

                  </div>
                  <!-- /.product-info -->

                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <div class="add-cart-button btn-group">
                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                            class="fa fa-shopping-cart"></i> </button>
                        <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                      </div>
                    </div>
                    <!-- /.action -->
                  </div>
                  <!-- /.cart -->
                </div>
              </div>
            </div>
            <!-- /.sidebar-widget -->
          </div>
          <!-- ============================================== HOT DEALS: END ============================================== -->

          <!-- ============================================== SPECIAL OFFER ============================================== -->

          <div class="sidebar-widget outer-bottom-small wow fadeInUp">
            <h3 class="section-title">Special Offer</h3>
            <div class="sidebar-widget-body outer-top-xs">
              <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
                <div class="item">
                  <div class="products special-product">
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="#"> <img src="images/products/p10.jpg" alt=""> </a>
                              </div>
                              <!-- /.image -->

                            </div>
                            <!-- /.product-image -->
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> $450.99 </span> </div>
                              <!-- /.product-price -->

                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.product-micro-row -->
                      </div>
                      <!-- /.product-micro -->

                    </div>
               
                  </div>
                </div>
                <div class="item">
                  <div class="products special-product">
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="#"> <img src="images/products/p10.jpg" alt=""> </a>
                              </div>
                              <!-- /.image -->

                            </div>
                            <!-- /.product-image -->
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> $450.99 </span> </div>
                              <!-- /.product-price -->

                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.product-micro-row -->
                      </div>
                      <!-- /.product-micro -->

                    </div>
               
                  </div>
                </div>
        
              </div>
            </div>
            <!-- /.sidebar-widget-body -->
          </div>
          <!-- /.sidebar-widget -->
          <!-- ============================================== SPECIAL OFFER : END ============================================== -->
          <!-- ============================================== PRODUCT TAGS ============================================== -->

          <!-- /.sidebar-widget -->
          <!-- ============================================== PRODUCT TAGS : END ============================================== -->
          <!-- ============================================== SPECIAL DEALS ============================================== -->

          <div class="sidebar-widget outer-bottom-small wow fadeInUp">
            <h3 class="section-title">Special Deals</h3>
            <div class="sidebar-widget-body outer-top-xs">
              <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
                <div class="item">
                  <div class="products special-product">
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="#"> <img src="assets/images/products/p1.jpg" alt=""> </a>
                              </div>
                              <!-- /.image -->

                            </div>
                            <!-- /.product-image -->
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> $450.99 </span> </div>
                              <!-- /.product-price -->

                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.product-micro-row -->
                      </div>
                      <!-- /.product-micro -->

                    </div>
         
            
                  </div>
                </div>
                <div class="item">
                  <div class="products special-product">
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="#"> <img src="assets/images/products/p4.jpg" alt=""> </a>
                              </div>
                              <!-- /.image -->

                            </div>
                            <!-- /.product-image -->
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> $450.99 </span> </div>
                              <!-- /.product-price -->

                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.product-micro-row -->
                      </div>
                      <!-- /.product-micro -->

                    </div>
         
           
                  </div>
                </div>
           
              </div>
            </div>
            <!-- /.sidebar-widget-body -->
          </div>
          <!-- /.sidebar-widget -->
          <!-- ============================================== SPECIAL DEALS : END ============================================== -->
          <!-- ============================================== NEWSLETTER ============================================== -->
          <div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small">
            <h3 class="section-title">Newsletters</h3>
            <div class="sidebar-widget-body outer-top-xs">
              <p>Sign Up for Our Newsletter!</p>
              <form>
                <div class="form-group">
                  <label class="sr-only" for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1"
                    placeholder="Subscribe to our newsletter">
                </div>
                <button class="btn btn-primary">Subscribe</button>
              </form>
            </div>
            <!-- /.sidebar-widget-body -->
          </div>
          <!-- /.sidebar-widget -->
          <!-- ============================================== NEWSLETTER: END ============================================== -->

          <!-- ============================================== Testimonials============================================== -->


          <!-- ============================================== Testimonials: END ============================================== -->


        </div>
        <!-- /.sidemenu-holder -->
        <!-- ============================================== SIDEBAR : END ============================================== -->

        <!-- ============================================== CONTENT ============================================== -->
        <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
          <!-- ========================================== SECTION – HERO ========================================= -->



          <!-- ========================================= SECTION – HERO : END ========================================= -->


          <!-- /.info-boxes -->
          <!-- ============================================== INFO BOXES : END ============================================== -->
          <!-- ============================================== SCROLL TABS ============================================== -->
          <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
            <div class="more-info-tab clearfix ">
              <h3 class="new-product-title pull-left">New Products</h3>
              <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li>
                <li><a data-transition-type="backSlide" href="#smartphone" data-toggle="tab">Clothing</a></li>
                <li><a data-transition-type="backSlide" href="#laptop" data-toggle="tab">Electronics</a></li>
                <li><a data-transition-type="backSlide" href="#apple" data-toggle="tab">Shoes</a></li>
              </ul>
              <!-- /.nav-tabs -->
            </div>
            <div class="tab-content outer-top-xs">
              <div class="tab-pane in active" id="all">
                <div class="product-slider">
                  <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img src="assets/images/products/p1.jpg"
                                  alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag new"><span>new</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button data-toggle="tooltip" class="btn btn-primary icon" type="button"
                                    title="Add Cart"> <i class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart"
                                    href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html"
                                    title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->

                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->

                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img src="assets/images/products/p2.jpg"
                                  alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag hot"><span>hot</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                      class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i
                                      class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                      class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->

                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->

                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img src="assets/images/products/p4.jpg"
                                  alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag sale"><span>sale</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                      class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i
                                      class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                      class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->

                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->

                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img src="assets/images/products/p3.jpg"
                                  alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag sale"><span>sale</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                      class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i
                                      class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                      class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->

                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->

                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img src="assets/images/products/p2.jpg"
                                  alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag hot"><span>hot</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                      class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i
                                      class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                      class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->

                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->

                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img src="assets/images/products/p1.jpg"
                                  alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag new"><span>new</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                      class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i
                                      class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                      class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->

                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->
                  </div>
                  <!-- /.home-owl-carousel -->
                </div>
                <!-- /.product-slider -->
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="smartphone">
                <div class="product-slider">
                  <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img src="assets/images/products/p5.jpg"
                                  alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag sale"><span>sale</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                      class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i
                                      class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                      class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->

                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->

                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img src="assets/images/products/p6.jpg"
                                  alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag new"><span>new</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                      class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i
                                      class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                      class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->

                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->

                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img src="assets/images/products/p7.jpg"
                                  alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag sale"><span>sale</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                      class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i
                                      class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                      class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->

                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->

                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img src="assets/images/products/p8.jpg"
                                  alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag new"><span>new</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                      class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i
                                      class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                      class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->

                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->

                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img src="assets/images/products/p9.jpg"
                                  alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag hot"><span>hot</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                      class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i
                                      class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                      class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->

                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->

                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img src="assets/images/products/p10.jpg"
                                  alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag hot"><span>hot</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                      class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i
                                      class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                      class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->

                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->
                  </div>
                  <!-- /.home-owl-carousel -->
                </div>
                <!-- /.product-slider -->
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="laptop">
                <div class="product-slider">
                  <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img src="assets/images/products/p11.jpg"
                                  alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag new"><span>new</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                      class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i
                                      class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                      class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->

                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->

                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img src="assets/images/products/p12.jpg"
                                  alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag new"><span>new</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                      class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i
                                      class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                      class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->

                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->

                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img src="assets/images/products/p13.jpg"
                                  alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag sale"><span>sale</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                      class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i
                                      class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                      class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->

                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->

                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img src="assets/images/products/p14.jpg"
                                  alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag hot"><span>hot</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                      class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i
                                      class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                      class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->

                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->

                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img src="assets/images/products/p15.jpg"
                                  alt="image"></a> </div>
                            <!-- /.image -->

                            <div class="tag hot"><span>hot</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                      class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i
                                      class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                      class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->

                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->

                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img src="assets/images/products/p16.jpg"
                                  alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag sale"><span>sale</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Apple Iphone 5s 32GB</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                      class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i
                                      class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                      class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->

                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->
                  </div>
                  <!-- /.home-owl-carousel -->
                </div>
                <!-- /.product-slider -->
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="apple">
                <div class="product-slider">
                  <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img src="assets/images/products/p18.jpg"
                                  alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag sale"><span>sale</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                      class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i
                                      class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                      class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->

                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->

                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img src="assets/images/products/p18.jpg"
                                  alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag hot"><span>hot</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                      class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i
                                      class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                      class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->

                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->

                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img src="assets/images/products/p17.jpg"
                                  alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag sale"><span>sale</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                      class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i
                                      class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                      class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->

                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->

                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img src="assets/images/products/p16.jpg"
                                  alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag new"><span>new</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                      class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i
                                      class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                      class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->

                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->

                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img src="assets/images/products/p13.jpg"
                                  alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag new"><span>new</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                      class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i
                                      class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                      class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->

                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->

                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img src="assets/images/products/p14.jpg"
                                  alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag hot"><span>hot</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Samsung Galaxy S4</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                      class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i
                                      class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                      class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->

                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->
                  </div>
                  <!-- /.home-owl-carousel -->
                </div>
                <!-- /.product-slider -->
              </div>
              <!-- /.tab-pane -->

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.scroll-tabs -->
          <!-- ============================================== SCROLL TABS : END ============================================== -->
          <!-- ============================================== WIDE PRODUCTS ============================================== -->

          <!-- /.wide-banners -->

          <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
          <!-- ============================================== FEATURED PRODUCTS ============================================== -->
          <section class="section featured-product wow fadeInUp">
            <h3 class="section-title">Featured products</h3>
            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image"> <a href="detail.html"><img src="assets/images/products/p5.jpg" alt=""></a>
                      </div>
                      <!-- /.image -->

                      <div class="tag hot"><span>hot</span></div>
                    </div>
                    <!-- /.product-image -->

                    <div class="product-info text-left">
                      <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="description"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> <span
                          class="price-before-discount">$ 800</span> </div>
                      <!-- /.product-price -->

                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                class="fa fa-shopping-cart"></i> </button>
                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                          </li>
                          <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i
                                class="icon fa fa-heart"></i> </a> </li>
                          <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        </ul>
                      </div>
                      <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                  </div>
                  <!-- /.product -->

                </div>
                <!-- /.products -->
              </div>
              <!-- /.item -->

              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image"> <a href="detail.html"><img src="assets/images/products/p6.jpg" alt=""></a>
                      </div>
                      <!-- /.image -->

                      <div class="tag new"><span>new</span></div>
                    </div>
                    <!-- /.product-image -->

                    <div class="product-info text-left">
                      <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="description"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> <span
                          class="price-before-discount">$ 800</span> </div>
                      <!-- /.product-price -->

                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                class="fa fa-shopping-cart"></i> </button>
                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                          </li>
                          <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i
                                class="icon fa fa-heart"></i> </a> </li>
                          <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        </ul>
                      </div>
                      <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                  </div>
                  <!-- /.product -->

                </div>
                <!-- /.products -->
              </div>
              <!-- /.item -->

              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image"> <a href="detail.html"><img src="assets/images/blank.gif"
                            data-echo="assets/images/products/p7.jpg" alt=""></a> </div>
                      <!-- /.image -->

                      <div class="tag sale"><span>sale</span></div>
                    </div>
                    <!-- /.product-image -->

                    <div class="product-info text-left">
                      <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="description"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> <span
                          class="price-before-discount">$ 800</span> </div>
                      <!-- /.product-price -->

                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                class="fa fa-shopping-cart"></i> </button>
                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                          </li>
                          <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i
                                class="icon fa fa-heart"></i> </a> </li>
                          <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        </ul>
                      </div>
                      <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                  </div>
                  <!-- /.product -->

                </div>
                <!-- /.products -->
              </div>
              <!-- /.item -->

              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image"> <a href="detail.html"><img src="assets/images/products/p8.jpg" alt=""></a>
                      </div>
                      <!-- /.image -->

                      <div class="tag hot"><span>hot</span></div>
                    </div>
                    <!-- /.product-image -->

                    <div class="product-info text-left">
                      <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="description"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> <span
                          class="price-before-discount">$ 800</span> </div>
                      <!-- /.product-price -->

                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                class="fa fa-shopping-cart"></i> </button>
                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                          </li>
                          <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i
                                class="icon fa fa-heart"></i> </a> </li>
                          <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        </ul>
                      </div>
                      <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                  </div>
                  <!-- /.product -->

                </div>
                <!-- /.products -->
              </div>
              <!-- /.item -->

              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image"> <a href="detail.html"><img src="assets/images/products/p9.jpg" alt=""></a>
                      </div>
                      <!-- /.image -->

                      <div class="tag new"><span>new</span></div>
                    </div>
                    <!-- /.product-image -->

                    <div class="product-info text-left">
                      <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="description"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> <span
                          class="price-before-discount">$ 800</span> </div>
                      <!-- /.product-price -->

                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                class="fa fa-shopping-cart"></i> </button>
                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                          </li>
                          <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i
                                class="icon fa fa-heart"></i> </a> </li>
                          <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        </ul>
                      </div>
                      <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                  </div>
                  <!-- /.product -->

                </div>
                <!-- /.products -->
              </div>
              <!-- /.item -->

              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image"> <a href="detail.html"><img src="assets/images/products/p10.jpg" alt=""></a>
                      </div>
                      <!-- /.image -->

                      <div class="tag sale"><span>sale</span></div>
                    </div>
                    <!-- /.product-image -->

                    <div class="product-info text-left">
                      <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="description"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> <span
                          class="price-before-discount">$ 800</span> </div>
                      <!-- /.product-price -->

                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                class="fa fa-shopping-cart"></i> </button>
                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                          </li>
                          <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i
                                class="icon fa fa-heart"></i> </a> </li>
                          <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        </ul>
                      </div>
                      <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                  </div>
                  <!-- /.product -->

                </div>
                <!-- /.products -->
              </div>
              <!-- /.item -->
            </div>
            <!-- /.home-owl-carousel -->
          </section>
          <!-- /.section -->
          <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
          <!-- ============================================== WIDE PRODUCTS ============================================== -->
          <div class="wide-banners wow fadeInUp outer-bottom-xs">
            <div class="row">
              <div class="col-md-12">
                <div class="wide-banner cnt-strip">
                  <div class="image"> <img class="img-responsive" src="assets/images/product/banner3.jpg" alt=""> </div>
                  <div class="strip strip-text">
                    <div class="strip-inner">
                      <h2 class="text-right">New Mens Fashion<br>
                        <span class="shopping-needs">Save up to 40% off</span></h2>
                    </div>
                  </div>
                  <div class="new-label">
                    <div class="text">NEW</div>
                  </div>
                  <!-- /.new-label -->
                </div>
                <!-- /.wide-banner -->
              </div>
              <!-- /.col -->

            </div>
            <!-- /.row -->
          </div>
          <!-- /.wide-banners -->
          <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
          <!-- ============================================== BEST SELLER ============================================== -->

          <div class="best-deal wow fadeInUp outer-bottom-xs" style="margin-top: -30px">
            <h3 class="section-title">Best seller</h3>
            <div class="sidebar-widget-body outer-top-xs">
              <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
                <div class="item">
                  <div class="products best-product">
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="#"> <img src="assets/images/products/p1.jpg" alt=""> </a>
                              </div>
                              <!-- /.image -->

                            </div>
                            <!-- /.product-image -->
                          </div>
                          <!-- /.col -->
                          <div class="col2 col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> $450.99 </span> </div>
                              <!-- /.product-price -->

                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.product-micro-row -->
                      </div>
                      <!-- /.product-micro -->

                    </div>
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="#"> <img src="assets/images/products/p2.jpg" alt=""> </a>
                              </div>
                              <!-- /.image -->

                            </div>
                            <!-- /.product-image -->
                          </div>
                          <!-- /.col -->
                          <div class="col2 col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> $450.99 </span> </div>
                              <!-- /.product-price -->

                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.product-micro-row -->
                      </div>
                      <!-- /.product-micro -->

                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="products best-product">
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="#"> <img src="assets/images/products/p3.jpg" alt=""> </a>
                              </div>
                              <!-- /.image -->

                            </div>
                            <!-- /.product-image -->
                          </div>
                          <!-- /.col -->
                          <div class="col2 col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> $450.99 </span> </div>
                              <!-- /.product-price -->

                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.product-micro-row -->
                      </div>
                      <!-- /.product-micro -->

                    </div>
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="#"> <img src="assets/images/products/p4.jpg" alt=""> </a>
                              </div>
                              <!-- /.image -->

                            </div>
                            <!-- /.product-image -->
                          </div>
                          <!-- /.col -->
                          <div class="col2 col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> $450.99 </span> </div>
                              <!-- /.product-price -->

                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.product-micro-row -->
                      </div>
                      <!-- /.product-micro -->

                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="products best-product">
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="#"> <img src="assets/images/products/p5.jpg" alt=""> </a>
                              </div>
                              <!-- /.image -->

                            </div>
                            <!-- /.product-image -->
                          </div>
                          <!-- /.col -->
                          <div class="col2 col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> $450.99 </span> </div>
                              <!-- /.product-price -->

                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.product-micro-row -->
                      </div>
                      <!-- /.product-micro -->

                    </div>
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="#"> <img src="assets/images/products/p6.jpg" alt=""> </a>
                              </div>
                              <!-- /.image -->

                            </div>
                            <!-- /.product-image -->
                          </div>
                          <!-- /.col -->
                          <div class="col2 col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> $450.99 </span> </div>
                              <!-- /.product-price -->

                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.product-micro-row -->
                      </div>
                      <!-- /.product-micro -->

                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="products best-product">
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="#"> <img src="assets/images/products/p7.jpg" alt=""> </a>
                              </div>
                              <!-- /.image -->

                            </div>
                            <!-- /.product-image -->
                          </div>
                          <!-- /.col -->
                          <div class="col2 col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> $450.99 </span> </div>
                              <!-- /.product-price -->

                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.product-micro-row -->
                      </div>
                      <!-- /.product-micro -->

                    </div>
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="#"> <img src="assets/images/products/p8.jpg" alt=""> </a>
                              </div>
                              <!-- /.image -->

                            </div>
                            <!-- /.product-image -->
                          </div>
                          <!-- /.col -->
                          <div class="col2 col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> $450.99 </span> </div>
                              <!-- /.product-price -->

                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.product-micro-row -->
                      </div>
                      <!-- /.product-micro -->

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.sidebar-widget-body -->
          </div>
          <!-- /.sidebar-widget -->
          <!-- ============================================== BEST SELLER : END ============================================== -->

          <!-- ============================================== BLOG SLIDER ============================================== -->
          <section class="section latest-blog outer-bottom-vs wow fadeInUp">
            <h3 class="section-title">latest form blog</h3>
            <div class="blog-slider-container outer-top-xs">
              <div class="owl-carousel blog-slider custom-carousel">
                <div class="item">
                  <div class="blog-post">
                    <div class="blog-post-image">
                      <div class="image"> <a href="blog.html"><img src="assets/images/blog-post/post1.jpg" alt=""></a>
                      </div>
                    </div>
                    <!-- /.blog-post-image -->

                    <div class="blog-post-info text-left">
                      <h3 class="name"><a href="#">Voluptatem accusantium doloremque laudantium</a></h3>
                      <span class="info">By Jone Doe &nbsp;|&nbsp; 21 March 2016 </span>
                      <p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam
                        quaerat voluptatem.</p>
                      <a href="#" class="lnk btn btn-primary">Read more</a>
                    </div>
                    <!-- /.blog-post-info -->

                  </div>
                  <!-- /.blog-post -->
                </div>
                <!-- /.item -->

                <div class="item">
                  <div class="blog-post">
                    <div class="blog-post-image">
                      <div class="image"> <a href="blog.html"><img src="assets/images/blog-post/post2.jpg" alt=""></a>
                      </div>
                    </div>
                    <!-- /.blog-post-image -->

                    <div class="blog-post-info text-left">
                      <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                      <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                      <p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam
                        quaerat voluptatem.</p>
                      <a href="#" class="lnk btn btn-primary">Read more</a>
                    </div>
                    <!-- /.blog-post-info -->

                  </div>
                  <!-- /.blog-post -->
                </div>
                <!-- /.item -->

                <!-- /.item -->

                <div class="item">
                  <div class="blog-post">
                    <div class="blog-post-image">
                      <div class="image"> <a href="blog.html"><img src="assets/images/blog-post/post1.jpg" alt=""></a>
                      </div>
                    </div>
                    <!-- /.blog-post-image -->

                    <div class="blog-post-info text-left">
                      <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                      <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                      <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                      <a href="#" class="lnk btn btn-primary">Read more</a>
                    </div>
                    <!-- /.blog-post-info -->

                  </div>
                  <!-- /.blog-post -->
                </div>
                <!-- /.item -->

                <div class="item">
                  <div class="blog-post">
                    <div class="blog-post-image">
                      <div class="image"> <a href="blog.html"><img src="assets/images/blog-post/post2.jpg" alt=""></a>
                      </div>
                    </div>
                    <!-- /.blog-post-image -->

                    <div class="blog-post-info text-left">
                      <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                      <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                      <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                      <a href="#" class="lnk btn btn-primary">Read more</a>
                    </div>
                    <!-- /.blog-post-info -->

                  </div>
                  <!-- /.blog-post -->
                </div>
                <!-- /.item -->

                <div class="item">
                  <div class="blog-post">
                    <div class="blog-post-image">
                      <div class="image"> <a href="blog.html"><img src="assets/images/blog-post/post1.jpg" alt=""></a>
                      </div>
                    </div>
                    <!-- /.blog-post-image -->

                    <div class="blog-post-info text-left">
                      <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                      <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                      <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                      <a href="#" class="lnk btn btn-primary">Read more</a>
                    </div>
                    <!-- /.blog-post-info -->

                  </div>
                  <!-- /.blog-post -->
                </div>
                <!-- /.item -->

              </div>
              <!-- /.owl-carousel -->
            </div>
            <!-- /.blog-slider-container -->
          </section>
          <!-- /.section -->
          <!-- ============================================== BLOG SLIDER : END ============================================== -->

          <!-- ============================================== FEATURED PRODUCTS ============================================== -->

          <!-- /.section -->
          <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->

        </div>
        <!-- /.homebanner-holder -->
        <!-- ============================================== CONTENT : END ============================================== -->
      </div>
      <!-- /.row -->
      <!-- ============================================== BRANDS CAROUSEL ============================================== -->
      <div id="brands-carousel" class="logo-slider wow fadeInUp">
        <div class="logo-slider-inner">
          <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
            <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand1.png"
                  src="assets/images/blank.gif" alt=""> </a> </div>
            <!--/.item-->

            <div class="item m-t-10"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand2.png"
                  src="assets/images/blank.gif" alt=""> </a> </div>
            <!--/.item-->

            <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand3.png"
                  src="assets/images/blank.gif" alt=""> </a> </div>
            <!--/.item-->

            <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand4.png"
                  src="assets/images/blank.gif" alt=""> </a> </div>
            <!--/.item-->

            <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand5.png"
                  src="assets/images/blank.gif" alt=""> </a> </div>
            <!--/.item-->

            <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand6.png"
                  src="assets/images/blank.gif" alt=""> </a> </div>
            <!--/.item-->

            <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand2.png"
                  src="assets/images/blank.gif" alt=""> </a> </div>
            <!--/.item-->

            <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand4.png"
                  src="assets/images/blank.gif" alt=""> </a> </div>
            <!--/.item-->

            <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand1.png"
                  src="assets/images/blank.gif" alt=""> </a> </div>
            <!--/.item-->

            <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand5.png"
                  src="assets/images/blank.gif" alt=""> </a> </div>
            <!--/.item-->
          </div>
          <!-- /.owl-carousel #logo-slider -->
        </div>
        <!-- /.logo-slider-inner -->

      </div>
      <!-- /.logo-slider -->
      <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
    </div>
    <!-- /.container -->
  </div>