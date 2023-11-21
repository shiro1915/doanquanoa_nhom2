<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                <div class="tip">2</div>
            </a></li>
            <li><a href="#"><span class="icon_bag_alt"></span>
                <div class="tip">2</div>
            </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="index.php"><img src="public/img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <a href="#">Đăng nhập</a>
            <a href="#">Đăng ký</a>
        </div>
        <div class="offcanvas__auth acount">
            <a href="#"><img src="public/img/product/product-1.jpg" alt="">KHOA123456</a>
        </div>
        
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="index.php"><img style="max-height: 30px;" src="public/img/fahasa-logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="index.php">TRANG CHỦ</a></li>
                            
                            <li><a href="index.php?url=cua-hang">Cửa hàng</a></li>
                            
                            <li><a href="index.php?url=khoa-hoc">KHÓA HỌC</a></li>
                            <!-- <li><a href="./blog.html">bÀI viẾT</a></li> -->
                            <li><a href="index.php?url=lien-he">LIÊN HỆ</a></li>

                            <li><a href="#">Trang</a>
                                <ul class="dropdown">
                                    
                                    <li><a href="index.php?url=gio-hang">Giỏ hàng</a></li>
                                    <li><a href="index.php?url=thanh-toan">Thanh toán</a></li>
                                    <li><a href="index.php?url=don-hang">Đơn mua</a></li>
                                </ul>
                            </li>
                            
                            

                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        

                        <?php if(isset($_SESSION['user'])) { ?>
                            <div class="header__right__auth acount">
                                <a href="#"><img src="upload/<?=$_SESSION['user']['image']?>" alt=""><?=$_SESSION['user']['username']?></a>
                                
                            </div>
                        <?php 
                        } else {
                        ?>
                            <div class="header__right__auth">
                                <a href="index.php?url=dang-nhap">Đăng nhập</a>
                                <a href="index.php?url=dang-ky">Đăng ký</a>
                            </div>
                        <?php 
                        } 
                        ?>
                        <ul class="header__right__widget">
                            <li><span class="icon_search search-switch"></span></li>
                            
                            <li><a id="cart-mini" href="#"><span class="icon_bag_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    