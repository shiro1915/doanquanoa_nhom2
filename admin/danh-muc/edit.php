<!-- Form Start -->
<div class="container-fluid pt-4" style="margin-bottom: 110px;">

    <form class="row g-4" action="" method="post">

        <div class="col-sm-12 col-xl-9">

            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4"> 
                    <a href="index.php?quanli=danh-sach-danh-muc" class="link-not-hover">Danh mục</a> 
                    / Cập nhật danh mục
                </h6>
                <div class="form-floating mb-4">
                    <input type="text" class="form-control" id="floatingInput"
                        placeholder="name@example.com">
                    <label for="floatingInput">Tên danh mục</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect"
                        aria-label="Floating label select example">
                        <option selected>Trạng thái</option>
                        <option value="1">Hiển thị</option>
                        <option value="0">Tạm ẩn</option>
                    </select>
                    <label for="floatingSelect">Trạng thái</label>
                </div>
                                        
            </div>
        </div>
        <div class="col-sm-12 col-xl-3">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">
                    <input type="submit" value="Cập nhật" class="btn btn-custom">
                    <a href="" class="btn btn-custom">Xóa tạm</a>
                </h6>
                <div class="mb-3">
                    <label for="formFileSm" class="form-label">Hình ảnh danh mục</label>
                    <input style="background-color: #fff" class="form-control form-control-sm"
                        id="formFileSm" type="file">
                    <div class="my-2">
                        <img src="./public_admin/img/book-1.jpg" width="100%" style="max-width: 200px;" class="img-thumbnail" alt="">
                    </div>
                </div>


            </div>
        </div>

        


    </form>
</div>
<!-- Form End -->