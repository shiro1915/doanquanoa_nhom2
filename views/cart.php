<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <span>Shopping cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Cart Section Begin -->
    <section class="shop-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="" method="post">
                        <div class="shop__cart__table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>SẢN PHẨM</th>
                                        <th>GIÁ</th>
                                        <th>SỐ LƯỢNG</th>
                                        <th>TỔNG</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="cart__product__item">
                                            <img src="public/img/product/book-1.jpg" alt="">
                                            <div class="cart__product__item__title">
                                                <h6 class="text-truncate-1">Sách Zip-pockets </h6>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="cart__price">100.000đ</td>
                                        <td class="cart__quantity">
                                            <!-- <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div> -->
                                            <div class="input-group float-left">
                                                <div class="input-next-cart d-flex ">
                                                    <input type="button" value="-" class="button-minus" data-field="quantity">
                                                    <input type="number" step="1" max="" value="1" name="quantity" class="quantity-field-cart">
                                                    <input type="button" value="+" class="button-plus" data-field="quantity">
                                                </div>                                           
                                            </div>
                                        </td>
                                        <td class="cart__total">100.000đ</td>
                                        <td class="cart__close">
                                            <a href="">
                                                <span class="icon_close"></span>
                                            </a>
                                        </td>
                                    </tr>
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn">
                        <a href="#">Tiếp tục mua sắm</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn update__btn">
                        <!-- <a href="#"><span class="icon_loading"></span>Cập nhật giỏ hàng</a> -->
                        
                        <button type="submit"><span class="icon_loading"></span>Cập nhật giỏ hàng</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="discount__content">
                        <h6>MÃ GIẢM GIÁ</h6>
                        <form action="#">
                            <input type="text" placeholder="Nhập mã">
                            <button type="submit" class="site-btn">áp dụng</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-2">
                    <div class="cart__total__procced">
                        <h6>Tổng tiền</h6>
                        <ul>
                            <li>Số lượng <span>5 sản phẩm</span></li>
                            <li>Tổng <span>500.000.đ</span></li>
                        </ul>
                        <a href="checkout.html" class="primary-btn">TIẾN HÀNH THANH TOÁN</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Cart Section End -->