<?php
    $list_catgories = $CategoryModel->getCategoryProductCount();

?>

<!-- LIST PRODUCTS -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Danh mục</h6>
            <a href="them-danh-muc" class="btn btn-custom"><i class="fa fa-plus"></i> Thêm danh mục</a>

        </div>

        


        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">

                        <th scope="col">#</th>
                        <th scope="col">Tên</th> 
                        <th scope="col">Ảnh</th>   
                        <th scope="col">Sản phẩm</th>          
                        <th scope="col">Trạng Thái</th>
                        <th scope="col">Chỉnh sửa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $i = 0;
                    foreach ($list_catgories as $value) {
                    $i++;
                    extract($value);
                    ?>
                    <tr>
                        <td><?=$i?></td>
                        
                        <td><?=$category_name?></td>
                        <td>
                            <img style="max-width: 50px;" src="../upload/<?=$category_image?>" alt="">
                        </td>
                        <td><?=$qty_product?></td>
                        <td> 
                            <?php 
                            $trangThai = 'Tạm ẩn';
                            if($category_status == 1) {
                                $trangThai = 'Hiển thị';
                                echo '<span class="btn-sm btn-success">'.$trangThai.'</span>';
                            }else {
                                echo '<span class="btn-sm btn-danger">'.$trangThai.'</span>';
                            }
                            ?>
                            
                        </td>
                        <td>

                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" class="fs-24 text-gray ">
                                    <i class="bi bi-three-dots-vertical text-dark"></i>
                                </a>
                                <div class="dropdown-menu p-0">
                                    <a class="dropdown-item" href="index.php?quanli=cap-nhat-danh-muc&id=<?=$cate_id?>">Sửa</a>
                                    <a class="dropdown-item text-danger" href="#xoatam">Xóa tạm</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php 
                    } 
                    ?>

                </tbody>
            </table>
            
        </div>
    </div>
</div>
<!-- LIST PRODUCTS END -->