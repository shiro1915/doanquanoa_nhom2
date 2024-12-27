<?php
include_once "../config/config.php";
include_once "models_admin/db.php";
include_once "models_admin/OrderModel.php";

$OrderModel = new OrderModel(); 
$statistics_category = $OrderModel->get_statistics();
?>

<!-- Thống kê danh mục -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Thống kê sản phẩm theo danh mục</h6>
        </div>

        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col">#</th>
                        <th scope="col">Tên danh mục</th> 
                        <th scope="col">Số lượng</th>   
                        <th scope="col">Giá thấp nhất</th>     
                        <th scope="col">Giá cao nhất</th>          
                        <th scope="col">Giá trung bình</th>     
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (empty($statistics_category)) {
                        echo "<tr><td colspan='6'>Không có dữ liệu thống kê.</td></tr>";
                    } else {
                        $i = 0; // Khởi tạo biến đếm
                        foreach ($statistics_category as $value) {
                            // Gán giá trị cho các biến từ mảng $value
                            $cate_name = $value['category_name'] ?? 'Chưa xác định'; // Gán tên danh mục
                            $count_products = $value['count_products'] ?? 0; // Gán số lượng sản phẩm
                            $min_price = $value['min_price'] ?? 0; // Gán giá thấp nhất
                            $max_price = $value['max_price'] ?? 0; // Gán giá cao nhất
                            $avg_product = $value['avg_product'] ?? 0; // Gán giá trung bình
                    ?>
                    <tr>
                        <td><?=$i++?></td>
                        <td style="min-width: 120px;"><?=$cate_name?></td>
                        <td><?=$count_products?></td>
                        <td><?=number_format($min_price)?>đ</td>
                        <td><?=number_format($max_price)?>đ</td>
                        <td><?=number_format($avg_product)?>đ</td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr class="text-dark">
                        <th scope="col">#</th>
                        <th scope="col">Tên danh mục</th> 
                        <th scope="col">Số lượng</th>   
                        <th scope="col">Giá thấp nhất</th>     
                        <th scope="col">Giá cao nhất</th>          
                        <th scope="col">Giá trung bình</th>     
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>