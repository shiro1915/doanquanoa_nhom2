<!-- LIST PRODUCTS -->
<div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Danh sách sản phẩm</h6>
                        <a href="them-san-pham" class="btn btn-custom"><i class="fa fa-plus"></i> Thêm sản phẩm</a>
                        
                    </div>
                    
                    <div class="row align-items-center">
                        <div class="col-lg-7 d-flex mb-3">
                            
                            <a class="link-hover" href="">Tất cả (10) </a><div class="mx-2">|</div>
                            <a class="link-not-hover" href="">Đã xuất bản (10) </a><div class="mx-2">|</div>
                            <a class="link-not-hover" href="index.php?quanli=thung-rac-san-pham">Thùng rác (10) </a>
                        </div> 
                        <div class="col-lg-5 d-flex mb-3 justify-content-end">
                            <div class="form-group ">
                                <input type="search" class="form-control" placeholder="Tìm sản phẩm">
                            </div>
                            <div class="form-group mx-2">
                                <select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option selected>Danh mục</option>
                                    <option value="1">Tiểu thuyết</option>
                                    <option value="1">Thiếu nhi</option>
                                </select>
                            </div>   
                            
                            <input type="submit" class="btn btn-custom" value="Lọc">
                        
                        </div>
                    </div>    
                    
                    
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    
                                    <th scope="col">#</th>
                                    <th scope="col">Tên</th>
                                    <th scope="col">Ảnh</th>
                                    <th scope="col">Danh Mục</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Sale</th>
                                    <th scope="col">Trạng Thái</th>
                                    <th scope="col">Chỉnh sửa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    
                                    <td>1</td>
                                    <td>Sách Conan</td>
                                    <td>
                                        <img style="max-width: 50px;" src="./public_admin/img/book-1.jpg" alt="">
                                    </td>
                                    <td>Truyện tranh</td>
                                    <td>50.000đ</td>
                                    <td>10%</td>
                                    <td>Còn hàng</td>
                                    <td>
                                        <!-- <a class="btn btn-sm btn-primary" href=""><i class="fa fa-eye"></i></a>
                                        <a class="btn btn-sm btn-secondary" href=""><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-sm btn-danger" href=""><i class="fa fa-trash"></i></a> -->
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown" class="fs-24 text-gray">
                                                <i class="bi bi-three-dots-vertical text-dark"></i>
                                            </a>
                                            <div class="dropdown-menu p-0">
                                                <a class="dropdown-item" href="#">Xem</a>
                                                <a class="dropdown-item" href="index.php?quanli=cap-nhat-san-pham">Sửa</a>
                                                <a class="dropdown-item text-danger" href="#xoatam">Xóa tạm</a>
                                            </div>
                                        </div>                                                                         
                                    </td>
                                </tr>
                                <tr>
                                    
                                    <td>1</td>
                                    <td>Sách Conan</td>
                                    <td>
                                        <img style="max-width: 50px;" src="./public_admin/img/book-1.jpg" alt="">
                                    </td>
                                    <td>Truyện tranh</td>
                                    <td>50.000đ</td>
                                    <td>10%</td>
                                    <td>Còn hàng</td>
                                    <td>
                                        
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown" class="fs-24 text-gray ">
                                                <i class="bi bi-three-dots-vertical text-dark"></i>
                                            </a>
                                            <div class="dropdown-menu p-0">
                                                <a class="dropdown-item" href="#">Xem</a>
                                                <a class="dropdown-item" href="#">Sửa</a>
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