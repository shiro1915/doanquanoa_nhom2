<div class="container-fluid pt-4" style="margin-bottom: 110px;">

    <form class="row g-4" action="" method="post" enctype="multipart/form-data">

        <div class="col-sm-12 col-xl-9">

            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">
                    <a href="index.php?quanli=danh-sach-khach-hang" class="link-not-hover">Tài khoản</a> 
                    / Thêm tài khoản
                </h6>
                <!-- <?=$html_alert?> -->
                <label for="">Email</label>
                <div class="form-floating mb-4">
                    <input name="email" type="text" class="form-control" required>   
                    <span class="text-danger" ></span>
                </div>
                <label for="">Họ và tên</label>
                <div class="form-floating mb-4">
                    <input name="full_name" type="text" class="form-control" required>   
                    <span class="text-danger" ></span>
                </div>
                <label for="">Tên đăng nhập</label>
                <div class="form-floating mb-4">
                    <input name="username" type="text" class="form-control">   
                    <span class="text-danger" ></span>
                </div>
                <label for="">Mật khẩu</label>
                <div class="form-floating mb-4">
                    <input name="password" type="text" class="form-control">   
                    <span class="text-danger" ></span>
                </div>
                <label for="">Xác nhận mật khẩu</label>
                <div class="form-floating mb-4">
                    <input name="confirm_password" type="text" class="form-control">   
                    <span class="text-danger" ></span>
                </div>
                <label for="">Số điện thoại</label>
                <div class="form-floating mb-4">
                    <input name="phone" type="text" class="form-control">   
                    <span class="text-danger" ></span>
                </div>
                <label for="">Địa chỉ</label>
                <div class="form-floating mb-4">
                    <input name="address" type="text" class="form-control" required>   
                    <span class="text-danger" ></span>
                </div>
                
                <label for="floatingSelect">Vai trò</label>
                <div class="form-floating mb-3">
                    <select name="status" class="form-select" id="floatingSelect"
                        aria-label="Floating label select example">
                        <option selected value="0">Khách hàng</option>
                        <option value="1">Nhân viên</option>
                    </select>
                    
                </div>
                                        
            </div>
        </div>
        <div class="col-sm-12 col-xl-3">
            <div class="bg-light rounded h-100 p-4">
                <div class="mb-3">
                    <label for="formFileSm" class="form-label">Avatar (JPG, PNG)</label><br>
                    <span class="text-danger" ></span>
                    <input style="background-color: #fff" name="image" class="form-control form-control-sm"
                        id="formFileSm" type="file">
                    <!-- <div class="my-2">
                        <img src="./img/book-1.jpg" width="100%" class="img-thumbnail" alt="">
                    </div> -->
                </div>
                <h6 class="mb-4">
                    <input type="submit" name="add_user" value="Thêm tài khoản" class="btn btn-custom">
                    
                </h6>

            </div>
        </div>

    </form>
</div>
<!-- Form End -->