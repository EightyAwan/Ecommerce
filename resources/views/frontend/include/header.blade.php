
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row menu-wrapper align-items-center justify-content-between">
                        <div class="header-left d-flex align-items-center">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <!-- Logo-2 -->
                            <div class="logo2">
                                <a href="index.html"><img src="assets/img/logo/logo2.png" alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{ route('home') }}">Home</a></li> 
                                        <li><a href="{{ route('home') }}">Product</a></li>
                                        <li><a href="{{ route('home') }}">About</a></li>
                                        <li><a href="{{ route('home') }}">Page</a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('home') }}">Login</a></li>
                                                <li><a href="{{ route('home') }}">Card</a></li>
                                                <li><a href="{{ route('home') }}">Categories</a></li>
                                                <li><a href="{{ route('home') }}l">Checkout</a></li>
                                                <li><a href="{{ route('home') }}">Product Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('home') }}">Blog</a></li>
                                                <li><a href="{{ route('home') }}">Blog Details</a></li>
                                                <li><a href="{{ route('home') }}">Elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('home') }}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>   
                        </div>
                        <div class="header-right1 d-flex align-items-center">
                            <div class="search">
                                <ul class="d-flex align-items-center">
                                    <li>
                                        <!-- Search Box -->
                                        <form action="#" class="form-box f-right ">
                                            <input type="text" name="Search" placeholder="Search products">
                                            <div class="search-icon">
                                                <i class="ti-search"></i>
                                            </div>
                                        </form>
                                    </li>
                                    <li>
                                        <a href="login.html" class="account-btn" target="_blank">My Account</a>
                                    </li>
                                    <li>
                                        <div class="card-stor">
                                            <img src="assets/img/icon/card.svg" alt="">
                                            <span>0</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>