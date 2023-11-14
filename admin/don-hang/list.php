<!-- LIST PRODUCTS -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Danh sách đơn hàng</h6>

        </div>


        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">

                        <th scope="col">#</th>
                        <th scope="col">Tên khách hàng</th> 
                        <th scope="col">Ngày đặt</th>   
                        <th scope="col">Số lượng</th>          
                        <th scope="col">Trạng Thái</th>
                        <th scope="col">Chỉnh sửa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td>1</td>
                        
                        <td>Nguyễn Văn A</td>
                        <td>
                            20-11-2023
                        </td>
                        <td>20</td>
                        <td> <a href="" class="btn btn-small btn-danger">Chờ xác nhận</a> </td>
                        <td>

                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" class="fs-24 text-gray ">
                                    <i class="bi bi-three-dots-vertical text-dark"></i>
                                </a>
                                <div class="dropdown-menu p-0">
                                    <a class="dropdown-item" href="index.php?quanli=cap-nhat-don-hang">Xem</a>
                                    <a class="dropdown-item" href="index.php?quanli=cap-nhat-don-hang">Sửa</a>
                                    
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>

                        <td>1</td>
                        
                        <td>Nguyễn Văn A</td>
                        <td>
                            20-11-2023
                        </td>
                        <td>20</td>
                        <td> <a href="" class="btn btn-small btn-success">Đang giao</a> </td>
                        <td>

                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" class="fs-24 text-gray ">
                                    <i class="bi bi-three-dots-vertical text-dark"></i>
                                </a>
                                <div class="dropdown-menu p-0">
                                    <a class="dropdown-item" href="index.php?quanli=cap-nhat-don-hang">Xem</a>
                                    <a class="dropdown-item" href="index.php?quanli=cap-nhat-don-hang">Sửa</a>
                                    
                                </div>
                            </div>
                        </td>
                    </tr>

                    
                    

                </tbody>
            </table>
            
        </div>
    </div>
</div>
<!-- LIST PRODUCTS END -->