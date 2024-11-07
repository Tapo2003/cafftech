<?php
    $csrf = array(
        'name' => $this->security->get_csrf_token_name(),
        'hash' => $this->security->get_csrf_hash()
    );
?>

<footer class="footer padding-t-100 bg-off-white">
    <div class="container">
        <div class="row footer-top padding-b-100">
            <div class="col-xl-4 col-lg-6 col-sm-12 col-12 cr-footer-border">
                <div class="cr-footer-logo">
                    <div class="image">
                        <img src="<?php echo base_url() .'assets/img/logo/logo.png'; ?>" alt="logo" class="logo">
                        <img src="<?php echo base_url() .'assets/img/logo/dark-logo.png'; ?>" alt="logo" class="dark-logo">
                    </div>
                    <p>Janok is a comany that deals in networking devices.</p>
                </div>
                <div class="cr-footer">
                    <!-- <h4 class="cr-sub-title cr-title-hidden">
                        Contact us
                        <span class="cr-heading-res"></span>
                    </h4> -->
                    <ul class="cr-footer-links cr-footer-dropdown">
                        <li class="location-icon">
                            Lagos, Nigeria.
                        </li>
                        <li class="mail-icon">
                            <a href="javascript:void(0)">help@janok.com.ng</a>
                        </li>
                        <li class="phone-icon">
                            <a href="javascript:void(0)"> +234 806 837 3694</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-sm-12 col-12 cr-footer-border">
                <div class="cr-footer">
                    <h4 class="cr-sub-title">
                        Company
                        <span class="cr-heading-res"></span>
                    </h4>
                    <ul class="cr-footer-links cr-footer-dropdown">
                        <li><a href="about.html">About Us</a></li>
                        <!-- <li><a href="track-order.html">Delivery Information</a></li> -->
                        <!-- <li><a href="policy.html">Privacy Policy</a></li> -->
                        <!-- <li><a href="terms.html">Terms & Conditions</a></li> -->
                        <li><a href="#">contact Us</a></li>
                        <li><a href="#">Support Center</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-sm-12 col-12 cr-footer-border">
                <div class="cr-footer">
                    <h4 class="cr-sub-title">
                        Customer
                        <span class="cr-heading-res"></span>
                    </h4>
                    <ul class="cr-footer-links cr-footer-dropdown">
                        <li><a href="shop-left-sidebar.html">Account</a></li>
                        <li><a href="shop-left-sidebar.html">Track orders</a></li>
                        <li><a href="shop-left-sidebar.html">Order history</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-sm-12 col-12 cr-footer-border">
                <div class="cr-footer cr-newsletter">
                    <h4 class="cr-sub-title">
                        Subscribe Our Newsletter
                        <span class="cr-heading-res"></span>
                    </h4>
                    <div class="cr-footer-links cr-footer-dropdown">
                        <form class="cr-search-footer" id="formSubscribe">
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <input class="search-input" type="email" id="subscriptionemail" name="subscriptionemail"  placeholder="Enter your email...">
                            <a href="javascript:void(0)" class="search-btn" id="aSubscribe" onclick="aSubscribe()">
                                <i class="ri-send-plane-fill"></i>
                            </a>
                        </form>
                    </div>
                    <div class="cr-social-media">
                        <span><a href="javascript:void(0)"><i class="ri-facebook-line"></i></a></span>
                        <span><a href="javascript:void(0)"><i class="ri-twitter-x-line"></i></a></span>
                        <span><a href="javascript:void(0)"><i class="ri-dribbble-line"></i></a></span>
                        <span><a href="javascript:void(0)"><i class="ri-instagram-line"></i></a></span>
                    </div>
                    <div class="cr-payment">
                        <div class="cr-insta-slider swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="#" class="cr-payment-image">
                                        <img src="<?php echo base_url() .'assets/img/insta/1.jpg'; ?>" alt="insta">
                                        <div class="payment-overlay"></div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="cr-payment-image">
                                        <img src="<?php echo base_url() .'assets/img/insta/2.jpg'; ?>" alt="insta">
                                        <div class="payment-overlay"></div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="cr-payment-image">
                                        <img src="<?php echo base_url() .'assets/img/insta/3.jpg'; ?>" alt="insta">
                                        <div class="payment-overlay"></div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="cr-payment-image">
                                        <img src="<?php echo base_url() .'assets/img/insta/4.jpg'; ?>" alt="insta">
                                        <div class="payment-overlay"></div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="cr-payment-image">
                                        <img src="<?php echo base_url() .'assets/img/insta/5.jpg'; ?>" alt="insta">
                                        <div class="payment-overlay"></div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="cr-payment-image">
                                        <img src="<?php echo base_url() .'assets/img/insta/6.jpg'; ?>" alt="insta">
                                        <div class="payment-overlay"></div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="cr-payment-image">
                                        <img src="<?php echo base_url() .'assets/img/insta/7.jpg'; ?>" alt="insta">
                                        <div class="payment-overlay"></div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="cr-payment-image">
                                        <img src="<?php echo base_url() .'assets/img/insta/8.jpg'; ?>" alt="insta">
                                        <div class="payment-overlay"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cr-last-footer">
            <p>&copy; <span id="copyright_year">  </span> All Rights Reserved  |  Developed by  <a href="#">Jay Technologies and Innovations</a> | +234 814 373 7391.</p>

        </div>
    </div>
</footer>

<!-- Tab to top -->
<a href="#Top" class="back-to-top result-placeholder">
    <i class="ri-arrow-up-line"></i>
    <div class="back-to-top-wrap">
        <svg viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
</a>

<!-- Model -->
<div class="modal fade quickview-modal" id="quickview" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered cr-modal-dialog">
        <div class="modal-content">
            <button type="button" class="cr-close-model btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="zoom-image-hover modal-border-image">
                            <img id="modalImage" src="" alt="product-tab-2" class="product-image">
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="cr-size-and-weight-contain">
                            <h2 class="heading" id="modalName">Janok</h2>
                            <p id="modalModel">Some text about Janok</p>
                        </div>
                        <div class="cr-size-and-weight">
                            <div class="cr-review-star">
                                <div class="cr-star">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                                <p>( 75 Review )</p>
                            </div>
                            <div class="cr-product-price">
                                <input type="hidden" value="1" id="newPriceInput">
                                <span class="new-price" id="newPrice"></span>
                                <span class="old-price" id="oldPrice"></span>
                            </div>
                            <!-- <div class="cr-size-weight">
                                <h5><span>Size</span>/<span>Weight</span> :</h5>
                                <div class="cr-kg">
                                    <ul>
                                        <li class="active-color">500gm</li>
                                        <li>1kg</li>
                                        <li>2kg</li>
                                        <li>5kg</li>
                                    </ul>
                                </div>
                            </div> -->
                            <div>
 
                                <input type="hidden" value="" id="productCode">
                            </div>
                            <div class="cr-add-card">
                                <div class="cr-qty-main">
                                    <input type="text" placeholder="." value="1" minlength="1" id="quantity" maxlength="20"
                                        class="quantity">
                                    <button type="button" id="add_model" onclick="" class="plus">+</button>
                                    <button type="button" id="sub_model" onclick="" class="minus">-</button>
                                </div>
                                <div class="cr-add-button">
                                    <button type="button" class="cr-button" id="btnAddToCart">Add to cart</button>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade alertModel-modal" id="alertModel" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered cr-modal-dialog">
        <div class="modal-content">
            <button type="button" class="cr-close-model btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="zoom-image-hover modal-border-image">
                            <img id="modalImage" src="" alt="product-tab-2" class="product-image">
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="cr-size-and-weight-contain">
                            <h2 class="heading" id="modalName">Janok</h2>
                            <p id="modalModel">Some text about Janok</p>
                        </div>
                        <div class="cr-size-and-weight">
                            <div class="cr-review-star">
                                <div class="cr-star">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                                <p>( 75 Review )</p>
                            </div>
                            <div class="cr-product-price">
                                <input type="hidden" value="1" id="newPriceInput">
                                <span class="new-price" id="newPrice"></span>
                                <span class="old-price" id="oldPrice"></span>
                            </div>
                            <!-- <div class="cr-size-weight">
                                <h5><span>Size</span>/<span>Weight</span> :</h5>
                                <div class="cr-kg">
                                    <ul>
                                        <li class="active-color">500gm</li>
                                        <li>1kg</li>
                                        <li>2kg</li>
                                        <li>5kg</li>
                                    </ul>
                                </div>
                            </div> -->
                            <div>
 
                                <input type="hidden" value="" id="productCode">
                            </div>
                            <div class="cr-add-card">
                                <div class="cr-qty-main">
                                    <input type="text" placeholder="." value="1" minlength="1" id="quantity" maxlength="20"
                                        class="quantity">
                                    <button type="button" id="add_model" onclick="" class="plus">+</button>
                                    <button type="button" id="sub_model" onclick="" class="minus">-</button>
                                </div>
                                <div class="cr-add-button">
                                    <button type="button" class="cr-button" id="btnAddToCart">Add to cart</button>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<button type="button" class="cr-button cr-shopping-bag" href="#alertModel" id="btnAlertModal" ></button>

<!-- <a class="model-oraganic-product" data-bs-toggle="modal" id="btnAlertModal" href="#alertModel" role="button">
    <i class="ri-eye-line"></i>
</a> -->

<!-- Cart -->
<div class="cr-cart-overlay"></div>
<div class="cr-cart-view">
    <div class="cr-cart-inner">
        <div class="cr-cart-top">
            <div class="cr-cart-title">
                <h6>My Cart</h6>
                <button type="button" class="close-cart">×</button>
            </div>
            <ul class="crcart-pro-items">
                <div id="cartSection">
                    <li>
                        <a href="#" class="crside_pro_img">
                            <!-- <img name="cartProductImage[]" src="<?php echo base_url() .'assets/img/product/4.jpg'; ?>" alt="product-1"> -->
                            <img name="cartProductImage[]" src="" alt="image">
                        </a>
                        <div class="cr-pro-content">
                            <input type="hidden" value="" name="cartPrductCode[]">
                            <a href="" name='cartPrductName[]' class="cart_pro_title"></a>
                            <span class="cart-price"><span name='cartAmt[]'>00</span> x <span name="oldQty[]">1</span></span>
                            <div class="cr-cart-qty">
                                <div class="cart-qty-plus-minus">
                                    <button type="button" class="plus" name="cartBtnPlus[]">+</button>
                                    <input type="text" placeholder="." value="1" name='newtQty[]' minlength="1" maxlength="20"
                                        class="quantity">
                                    <button type="button" class="minus" id="cartBtnMinus">-</button>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>                    
            </ul>
        </div>
        <div class="cr-cart-bottom">
            <div class="cart-sub-total">
                <table class="table cart-table">
                    <tbody id="tblCustomerCart">
                        <tr>
                            <td class="text-left">Sub-Total :</td>
                            <td class="text-right" id="subTotal">00</td>
                        </tr>
                        <tr>
                            <td class="text-left">VAT (2%) :</td>
                            <td class="text-right" id="vat">00</td>
                        </tr>
                        <tr>
                            <td class="text-left">Total :</td>
                            <td class="text-right primary-color" id="total">00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="cart_btn">
                <a href="<?php echo base_url(). 'home/viewcart'; ?>" class="cr-button">View Cart</a>
                <a href="<?php echo base_url(). 'home/checkout'; ?>" class="cr-btn-secondary">Checkout</a>
            </div>
        </div>
        
    </div>
</div>

<!-- Side-tool -->
<!-- <div class="cr-tool-overlay"></div>
<div class="cr-tool">
    <div class="cr-tool-btn">
        <a href="javascript:void(0)" class="btn-cr-tool result-placeholder">
            <i class="ri-settings-line"></i>
        </a>
        <div class="color-variant">
            <div class="cr-bar-title">
                <h6>Tools</h6>
                <a href="javascript:void(0)" class="close-tools">
                    <i class="ri-close-line"></i>
                </a>
            </div>
            <div class="cr-tools-detail">
                <div class="heading">
                    <h2>Select Color</h2>
                </div>
                <ul class="cr-color">
                    <li class="colors c1 active-colors">
                    </li>
                    <li class="colors c2">
                    </li>
                    <li class="colors c3">
                    </li>
                    <li class="colors c4">
                    </li>
                    <li class="colors c5">
                    </li>
                    <li class="colors c6">
                    </li>
                    <li class="colors c7">
                    </li>
                    <li class="colors c8">
                    </li>
                    <li class="colors c9">
                    </li>
                    <li class="colors c10">
                    </li>
                </ul>
            </div>
            <div class="cr-tools-detail">
                <div class="heading">
                    <h2>Dark mode</h2>
                </div>
                <ul class="dark-mode">
                    <li class="dark">
                    </li>
                    <li class="white active-dark-mode">
                    </li>
                </ul>
            </div>
            <div class="cr-tools-detail">
                <div class="heading">
                    <h2>Backgrounds</h2>
                </div>
                <ul class="bg-panel">
                    <li class="bg-1">
                        <img src="<?php echo base_url() .'assets/img/shape/bg-shape-1.png'; ?>" alt="bg-shape-1">
                    </li>
                    <li class="bg-2">
                        <img src="<?php echo base_url() .'assets/img/shape/bg-shape-2.png'; ?>" alt="bg-shape-2">
                    </li>
                    <li class="bg-3">
                        <img src="<?php echo base_url() .'assets/img/shape/bg-shape-3.png'; ?>" alt="bg-shape-3">
                    </li>
                    <li class="bg-4">
                        <img src="<?php echo base_url() .'assets/img/shape/bg-shape-4.png'; ?>" alt="bg-shape-4">
                    </li>
                    <li class="bg-5">
                        <img src="<?php echo base_url() .'assets/img/shape/bg-shape-5.png'; ?>" alt="bg-shape-5">
                    </li>
                    <li class="bg-6 active-bg-panel">
                        <img src="<?php echo base_url() .'assets/img/shape/bg-shape-6.png'; ?>" alt="bg-shape-6">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div> -->