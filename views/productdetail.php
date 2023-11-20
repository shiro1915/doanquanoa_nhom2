<?php
   if(isset($_GET['id_sp'])) {
        $id_sp = $_GET['id_sp'];
        $id_danhmuc = $_GET['id_dm'];

        $product_details = $ProductModel->select_products_by_id($id_sp);
        $similar_product = $ProductModel->select_products_similar($id_danhmuc);
    } 

    
?>

<?php
    extract($product_details);

?>
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Trang chủ</a>
                        <a href="#">Sản phẩm </a>
                        <span><?=$name?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    
    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__left product__thumb nice-scroll">
                            <a class="pt active" href="#product-1">
                                <img src="upload/<?=$image?>" alt="">
                            </a>
                            <a class="pt" href="#product-2">
                                <img src="upload/<?=$image?>" alt="">
                            </a>
                            <!-- <a class="pt" href="#product-3">
                                <img src="img/product/conan-1.jpg" alt="">
                            </a> -->
                            
                        </div>
                        <div class="product__details__slider__content">
                            <div class="product__details__pic__slider owl-carousel">
                                <img data-hash="product-1" class="product__big__img" src="upload/<?=$image?>" alt="">
                                <img data-hash="product-2" class="product__big__img" src="upload/<?=$image?>" alt="">
                                <img data-hash="product-3" class="product__big__img" src="upload/<?=$image?>" alt="">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text">
                        <h3><?=$name?><span>Danh mục: Sách hay</span></h3>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span>( 138 bình luận )</span>
                        </div>
                        <div class="product__details__price">
                            <?=$ProductModel->formatted_price($sale_price); ?> 
                            <span>
                                <?=$ProductModel->formatted_price($price); ?>
                            </span>
                        </div>
                        <p class="text-truncate-2-pd-details"><?=$short_description?></p>

                        
                        <div class="product__details__button">
                            <form action="" method="post">
                                
                                <div class="input-group d-flex align-items-center">
                                    <span class="text-dark">Số lượng</span>
                                    <div class="input-next d-flex mx-4">
                                        <input type="button" value="-" class="button-minus" data-field="quantity">
                                        <input type="number" step="1" max="" value="1" name="quantity" class="quantity-field">
                                        <input type="button" value="+" class="button-plus" data-field="quantity">
                                    </div>
                                    <span class="text-dark"><?=$quantity?> sản phẩm có sẵn</span>

                                </div>
                            
                            </form>
                              
                            <div class="quantity">

                                <button style="border: none;" type="submit" class="cart-btn btn-primary"><span class="icon_bag_alt"></span> Thêm vào giỏ</button>
                                <button type="submit" style="background-color: #ca1515; border: none;" class="cart-btn"><span class="icon_bag_alt"></span>Mua ngay</button>
                            </div>
                            <ul>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_adjust-horiz"></span></a></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Mô tả</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Bình luận ( 2 )</a>
                            </li>
                            
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <h6>Mô tả</h6>
                                <p><?=$details?></p>
                                <p></p>
                            </div>
                            
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <h6>Bình luận ( 2 )</h6>
                                
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 class="mb-4">1 bình luận cho "Sách kế toán vỉa hè"</h4>
                                            <div class="media mb-4">
                                                <img src="img/product/product-1.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                                <div class="media-body">
                                                    <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                                    
                                                    <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="media mb-4">
                                                <img src="img/product/product-1.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                                <div class="media-body">
                                                    <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                                    
                                                    <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h4 class="mb-4">Để lại bình luận</h4>
                                            
                                            
                                            <form>
                                                <div class="form-group">
                                                    <label class="text-dark" for="message">Nội dung *</label>
                                                    <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                                </div>
                                                
                                                
                                                <div class="form-group mb-0">
                                                    <input type="submit" value="Gửi bình luận" class="btn btn-primary px-3">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="related__title">
                        <h5>SẢM PHẨM TƯƠNG TỰ</h5>
                    </div>
                </div>
                <?php
                    foreach ($similar_product as $key => $value) {
                        if(is_array($value)) {
                            extract($value);
                            $discount_percentage = $ProductModel->discount_percentage($price, $sale_price);
                        }
                    
                ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="product__item sale">
                        <div class="product__item__pic set-bg" data-setbg="upload/<?=$image?>">
                            <div class="label sale">New</div>
                            <div class="label_right sale">-<?=$discount_percentage?></div>
                            <ul class="product__hover">
                                <li><a href="upload/<?=$image?> " class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li>
                                    <a href="index.php?url=chitietsanpham&id_sp=<?=$product_id?>&id_dm=<?=$category_id?>"><span class="icon_search_alt"></span></a>
                                </li>
                                
                                <li>
                                    <form action="blog.html" method="post">
                                        <input type="hidden" name="product_id">
                                        <input type="hidden" name="user_id">
                                        <input type="hidden" name="name">
                                        <input type="hidden" name="price">
                                        <input type="hidden" name="quantity">
                                        <input type="hidden" name="image">
                                        <button type="submit" name="add_to_cart">
                                            <a href="#"><span class="icon_bag_alt"></span></a>
                                        </button>
                                    </form>
                                </li>
                                
                            </ul>
                            
                        </div>
                        <div class="product__item__text">
                            <h6 class="text-truncate-1">
                                <a href="index.php?url=chitietsanpham&id_sp=<?=$product_id?>&id_dm=<?=$category_id?>">
                                <?=$name?>
                                </a>
                            </h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price"><?=$ProductModel->formatted_price($sale_price); ?>  <span><?=$ProductModel->formatted_price($price); ?> </span></div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
                
                
                
                
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->