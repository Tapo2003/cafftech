<?php

    // print_r($_SESSION['brands']);
    // exit;
    // session_start();
    // echo $_SESSION['accesstag'];
    
?>

<!-- Loader -->
    <div id="cr-overlay">
        <span class="loader"></span>
    </div>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-header">
                        <a href="index.html" class="cr-logo">
                            <img src="<?php echo base_url() .'assets/img/logo/logo.png'; ?>" alt="logo" class="logo">
                            <img src="<?php echo base_url() .'assets/img/logo/dark-logo.png'; ?>" alt="logo" class="dark-logo">
                        </a>
                        <form class="cr-search">
                            <input class="search-input" type="text" placeholder="Search For items...">
                            <select class="form-select" onchange="getProductByBrand(this.value)" aria-label="Default select example">
                                <option value='---'>All brands</option>
                                <?php
                                    foreach($_SESSION['brands'] as $row){?>
                                        <option value="<?= $row->brand_code; ?>"><?= $row->brand_name; ?></option>
                                <?php }?>
                            </select>
                            <a href="javascript:void(0)" class="search-btn">
                                <i class="ri-search-line"></i>
                            </a>
                        </form>
                        <div class="cr-right-bar">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle cr-right-bar-item" href="javascript:void(0)">
                                        <i class="ri-user-3-line"></i>
                                        <span>
                                            <?php
                                                if(isset($_SESSION['accesstag']) && $_SESSION['accesstag'] == "AG"){
                                                    echo "Welcome " . $_SESSION['customer_account_information']->customer_account_username;
                                                }else{
                                                    echo "Account";
                                                }
                                            ?>
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php
                                            if(isset($_SESSION['accesstag']) && $_SESSION['accesstag'] == "AG"){?>
                                                <li>
                                                    <a class="dropdown-item" href="<?php echo base_url(). 'home/logout'; ?>">Logout</a>
                                                </li>
                                            <?php }else{?>
                                                <li>
                                                    <a class="dropdown-item" href="<?php echo base_url(). 'home/login'; ?>">Login</a>
                                                </li>
                                            <?php }
                                        ?>
                                        <li>
                                            <a class="dropdown-item" href="<?php echo base_url(). 'home/checkout'; ?>">Checkout</a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                            <!-- <a href="#" class="cr-right-bar-item">
                                <i class="ri-heart-3-line"></i>
                                <span>Wishlist</span>
                            </a> -->
                            <a href="#" class="cr-right-bar-item Shopping-toggle" onclick="loadCart()">
                                <i class="ri-shopping-cart-line"></i>
                                <span>Cart</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="cr-fix" id="cr-main-menu-desk">
            <div class="container">
                <div class="cr-menu-list">
                    <div class="cr-category-icon-block">
                        <div class="cr-category-menu">
                            <div class="cr-category-toggle">
                                <i class="ri-menu-2-line"></i>
                            </div>
                        </div>
                        <div class="cr-cat-dropdown">
                            <div class="cr-cat-block">
                                <div class="cr-cat-tab">
                                    <div class="cr-tab-list nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                        aria-orientation="vertical">
                                        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-home" type="button" role="tab"
                                            aria-controls="v-pills-home" aria-selected="true">
                                            Microtik </button>
                                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-profile" type="button" role="tab"
                                            aria-controls="v-pills-profile" aria-selected="false" tabindex="-1">
                                            MegaRack</button>
                                        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-messages" type="button" role="tab"
                                            aria-controls="v-pills-messages" aria-selected="false" tabindex="-1">
                                            Cisco</button>
                                        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-settings" type="button" role="tab"
                                            aria-controls="v-pills-settings" aria-selected="false" tabindex="-1">
                                            Ubiquiti </button>
                                        <a class="nav-link" href="#">
                                            View All </a>
                                    </div>
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                            aria-labelledby="v-pills-home-tab">
                                            <div class="tab-list row">
                                                <div class="col">
                                                    <h6 class="cr-col-title">Microtik</h6>
                                                    <ul class="cat-list">
                                                        <li><a href="#">Cambium PL-E600PUKA-RW</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col">
                                                    <h6 class="cr-col-title">Microtik</h6>
                                                    <ul class="cat-list">
                                                        <li><a href="#">Cambium PL-E600PUKA-RW</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                            aria-labelledby="v-pills-profile-tab">
                                            <div class="tab-list row">
                                                <div class="col">
                                                    <h6 class="cr-col-title">Microtik</h6>
                                                    <ul class="cat-list">
                                                        <li><a href="#">Cambium PL-E600PUKA-RW</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col">
                                                    <h6 class="cr-col-title">Microtik</h6>
                                                    <ul class="cat-list">
                                                        <li><a href="#">Cambium PL-E600PUKA-RW</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                            aria-labelledby="v-pills-messages-tab">
                                            <div class="tab-list row">
                                                <div class="col">
                                                    <h6 class="cr-col-title">Microtik</h6>
                                                    <ul class="cat-list">
                                                        <li><a href="#">Cambium PL-E600PUKA-RW </a></li>
                                                    </ul>
                                                </div>
                                                <div class="col">
                                                    <h6 class="cr-col-title">Microtik</h6>
                                                    <ul class="cat-list">
                                                        <li><a href="#">Cambium PL-E600PUKA-RW</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                            aria-labelledby="v-pills-settings-tab">
                                            <div class="tab-list row">
                                                <div class="col">
                                                    <h6 class="cr-col-title">Microtik</h6>
                                                    <ul class="cat-list">
                                                        <li><a href="#">Cambium PL-E600PUKA-RW</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col">
                                                    <h6 class="cr-col-title">Microtik</h6>
                                                    <ul class="cat-list">
                                                        <li><a href="#">Cambium PL-E600PUKA-RW</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg">
                        <a href="javascript:void(0)" class="navbar-toggler shadow-none">
                            <i class="ri-menu-3-line"></i>
                        </a>
                        <div class="cr-header-buttons">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="javascript:void(0)">
                                        <i class="ri-user-3-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#">Register</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Checkout</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Login</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <a href="wishlist.html" class="cr-right-bar-item">
                                <i class="ri-heart-line"></i>
                            </a>
                            <a href="javascript:void(0)" class="cr-right-bar-item Shopping-toggle">
                                <i class="ri-shopping-cart-line"></i>
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(). 'home'; ?>">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)">
                                        Brand
                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php
                                            foreach($_SESSION['brands'] as $row){?>
                                                <li><a href="<?php echo base_url(). 'home/productdetails?brandcode=' . $row->brand_code; ?>"><?php echo substr($row->brand_name, 0, 12); ?></a></li>                                    
                                        <?php }?>   
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(). 'home/shop'; ?>">
                                        Shop
                                    </a>
                                </li>                                
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(). 'home/product'; ?>">
                                        Product
                                    </a>
                                </li>                                
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(). 'home/aboutus'; ?>">
                                        About Us
                                    </a>
                                </li>                                
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(). 'home/contact'; ?>">
                                        Contact
                                    </a>
                                </li>                                
                                <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)">
                                        Shop
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="product-left-sidebar.html">product
                                                Left
                                                sidebar </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="product-right-sidebar.html">product
                                                Right
                                                sidebar </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="product-full-width.html">Product
                                                Full
                                                Width
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)">
                                        Pages
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="about.html">About Us</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="contact-us.html">Contact Us</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="cart.html">Cart</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="checkout.html">Checkout</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="track-order.html">Track Order</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="wishlist.html">Wishlist</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="faq.html">Faq</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="login.html">Login</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="register.html">Register</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="policy.html">Policy</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)">
                                        Blog
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="blog-left-sidebar.html">Left
                                                Sidebar</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="blog-right-sidebar.html">Right
                                                Sidebar</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="blog-full-width.html">Full
                                                Width</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="blog-detail-left-sidebar.html">Detail
                                                Left
                                                Sidebar</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="blog-detail-right-sidebar.html">Detail
                                                Right
                                                Sidebar</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="blog-detail-full-width.html">Detail
                                                Full
                                                Width</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)">
                                        Elements
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="elements-products.html">Products</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="elements-typography.html">Typography</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="elements-buttons.html">Buttons</a>
                                        </li>
                                    </ul>
                                </li> -->
                            </ul>
                        </div>
                    </nav>
                    <div class="cr-calling">
                        <i class="ri-phone-line"></i>
                        <a href="javascript:void(0)">+234 806 837 3694</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile menu -->
    <div class="cr-sidebar-overlay"></div>
    <div id="cr_mobile_menu" class="cr-side-cart cr-mobile-menu">
        <div class="cr-menu-title">
            <span class="menu-title">Mobile</span>
            <button type="button" class="cr-close">×</button>
        </div>
        <div class="cr-menu-inner">
            <div class="cr-menu-content">
                <ul>
                    <li class="dropdown drop-list">
                        <a href="#">Home</a>
                    </li>
                    <li class="dropdown drop-list">
                        <span class="menu-toggle"></span>
                        <a href="javascript:void(0)" class="dropdown-list">Brand</a>
                        <ul class="sub-menu">
                            <?php
                                foreach($_SESSION['brands'] as $row){?>
                                    <li><a href="<?php echo base_url(). 'home/productdetails?brandcode=' . $row->brand_code; ?>"><?= $row->brand_name; ?></a></li>                                    
                            <?php }?>                            


                        </ul>
                    </li>
                    <li class="dropdown drop-list">
                        <a href="#">Shop</a>
                    </li>                    
                    <li class="dropdown drop-list">
                        <a href="#">Product</a>
                    </li>                    
                    <li class="dropdown drop-list">
                        <a href="#">Contact</a>
                    </li>                    
                    <li class="dropdown drop-list">
                        <a href="#">About Us</a>
                    </li>                    
                </ul>
            </div>
        </div>
    </div>