<!-- LIST PRODUCTS -->
<div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">
                            <a href="index.php?quanli=danh-sach-san-pham" class="link-not-hover">Danh sách sản phẩm</a>
                            / Thùng rác
                        </h6>
                        <a href="them-san-pham" class="btn btn-custom"><i class="fa fa-plus"></i> Thêm sản phẩm</a>
                        
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
                                        <a class="btn btn-sm btn-secondary" href=""><i class="fa fa-undo"></i> Phục hồi</a>
                                        <a class="btn btn-sm btn-danger" href=""><i class="fa fa-trash"></i> Xóa vĩnh viễn</a>
                                                                                                              
                                    </td>
                                </tr>
                                                         
                                
                            </tbody>
                        </table>
                        <div class="col-12 mt-4">
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled"><a class="page-link" href="#">Prev</span></a></li>
                                    <li class="page-item active">
                                        <a class="page-link" href="index.php?quanli=list_product&page=">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="index.php?quanli=list_product&page=">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="index.php?quanli=list_product&page=">3</a>
                                    </li>
                                    
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- LIST PRODUCTS END -->