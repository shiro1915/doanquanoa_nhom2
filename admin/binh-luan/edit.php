<?php
    if(isset($_GET['id']) && $_GET['id'] >0) {
        $comment_id = $_GET['id'];
        $comment_details = $CommentModel->select_comment_by_id($comment_id);
        extract($comment_details);
        $date_formated = $BaseModel->date_format($comment_date, '');
    }

    

    // Cập nhật trạng thái
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_status_order"])) {
        $status = $_POST["status"];
        $order_id = $_POST["order_id"];
        $OrderModel->update_status_order($status, $order_id);
        header("Location: index.php?quanli=cap-nhat-don-hang&id=$order_id");
    }

?>

<div class="container pt-4">
    <article class="card">
        <header class="card-header text-dark">
                <h6 > 
                    <a href="index.php?quanli=binh-luan" class="link-not-hover">Bình luận</a> 
                    / Chi tiết bình luận
                </h6>
        </header>
        <div class="card-body mt-2">
            <div class="row">
                <div class="col-lg-12">
                    <h6 class="mb-1">
                        Nội dung bình luận: <span class="text-danger"></span>
                    </h6> 
                    <div class="rounded border" style="background-color: #ffff;">
                        
                        <p class="p-2 pt-4 text-dark"><?=$content?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body mt-2">
            <div class="row">
                <div class="col-lg-6">
                    <div class="bg-custom rounded border" style="background-color: #ffff;">
                        <div class="p-4">
                            <h6 class="mb-1">
                                Trạng thái bình luận: <span class="text-danger"></span>
                            </h6>        
                            <form action="" method="post">
                                <div class="form-floating mb-3">
                                    <select name="status" class="form-select" >
                                        <option value="">Hiển thị</option>
                                        <option value="">Tạm ẩn</option>
                                    </select>                                  
                                </div>
                                <input type="hidden" name="order_id" value="<?=$order_id?>">
                                <h6 class="mb-4">
                                    <input type="submit" name="update_status_order" value="Cập nhật" class="btn btn-custom">
                                    <a href="" name="update_status_order"class="btn btn-custom">Xóa bình luận</a>
                                </h6>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-4 bg-custom" style="background-color: #ffff;">
                        <div class="card-body text-dark">                          
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <p class="mb-0 text-right">Tên sản phẩm</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="mb-0 text-right text-danger"><?=$product_name?></p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <p class="mb-0 text-right">Họ tên</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="mb-0 text-right"><?=$full_name?></p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <p class="mb-0 text-right">Thời gian</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="mb-0 text-right"><?=$date_formated?></p>
                                </div>
                            </div>                          
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </article>
</div>