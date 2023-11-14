<!-- LIST PRODUCTS -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Khóa học</h6>
            <a href="index.php?quanli=them-khoa-hoc" class="btn btn-custom"><i class="fa fa-plus"></i> Thêm khóa học</a>

        </div>

        


        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">

                        <th scope="col">#</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Tên</th>             
                        <th scope="col">Trạng Thái</th>
                        <th scope="col">Chỉnh sửa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td>1</td>
                        <td>
                            <img style="max-width: 50px;" src="./public_admin/img/book-1.jpg" alt="">
                        </td>
                        <td>Khóa học tiếng Anhh</td>
                        
                        <td> <a href="" class="btn btn-small btn-primary">Hoạt động</a> </td>
                        <td>

                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" class="fs-24 text-gray ">
                                    <i class="bi bi-three-dots-vertical text-dark"></i>
                                </a>
                                <div class="dropdown-menu p-0">
                                    <a class="dropdown-item" href="#">Xem</a>
                                    <a class="dropdown-item" href="index.php?quanli=cap-nhat-khoa-hoc">Sửa</a>
                                    <a class="dropdown-item text-danger" href="#xoatam">Xóa tạm</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>

                        <td>1</td>
                        <td>
                            <img style="max-width: 50px;" src="./public_admin/img/book-1.jpg" alt="">
                        </td>
                        <td>Khóa học tiếng Anhh</td>
                        
                        <td> <a href="" class="btn btn-small btn-danger">Tạm đừng</a> </td>
                        <td>

                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" class="fs-24 text-gray ">
                                    <i class="bi bi-three-dots-vertical text-dark"></i>
                                </a>
                                <div class="dropdown-menu p-0">
                                    <a class="dropdown-item" href="#">Xem</a>
                                    <a class="dropdown-item" href="index.php?quanli=cap-nhat-khoa-hoc">Sửa</a>
                                    <a class="dropdown-item text-danger" href="#xoatam">Xóa tạm</a>
                                </div>
                            </div>
                        </td>
                    </tr>





                </tbody>
            </table>
            <div class="col-12 mt-4">
                <nav>
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#">Prev</span></a></li>
                        <li class="page-item active">
                            <a class="page-link" href="#1">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#1">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#1">3</a>
                        </li>

                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- LIST PRODUCTS END -->