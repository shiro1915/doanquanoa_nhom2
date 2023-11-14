<!-- Form Start -->
<div class="container-fluid pt-4">



<form class="row g-4" action="" method="post" enctype="multipart/form-data">

    <div class="col-sm-12 col-xl-9">

        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">
                <a href="index.php?quanli=danh-sach-san-pham" class="link-not-hover">Sản phẩm</a>
                / Cập nhật sản phẩm
            </h6>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput"
                    placeholder="name@example.com">
                <label for="floatingInput">Tên sản phẩm</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput"
                    placeholder="name@example.com">
                <label for="floatingInput">Giá bán thường (đ)</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput"
                    placeholder="name@example.com">
                <label for="floatingInput">Giá khuyến mãi (đ)</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInput"
                    placeholder="">
                <label for="floatingInput">Số lượng (nhập số)</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Mô tả ngắn" id="floatingTextarea"
                    style="height: 210px;"></textarea>
                <label for="floatingTextarea text-dark">Mô tả ngắn</label>
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Mô tả" id="floatingTextarea"
                    style="height: 300px;"></textarea>
                <label for="floatingTextarea">Chi tiết</label>
            </div>


        </div>
    </div>
    <div class="col-sm-12 col-xl-3">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">
                <input type="submit" value="Cập nhật" class="btn btn-custom">
                <!-- <a href="" class="btn btn-custom">Ẩn</a> -->
                <a href="" class="btn btn-custom">Xóa tạm</a>
            </h6>
            <div class="mb-3">
                <label for="formFileSm" class="form-label">Hình ảnh (JPG, PNG, a)</label>
                <input style="background-color: #fff" class="form-control form-control-sm"
                    id="formFileSm" type="file">
                <div class="my-2">
                    <img src="./public_admin/img/book-1.jpg" style="width: 100%; max-width:200px;" class="img-fluid" alt="">
                </div>
            </div>

            <div class="form-floating mb-3">
                <select class="form-select" id="floatingSelect"
                    aria-label="Floating label select example">
                    <option selected>Danh mục</option>
                    <option value="1">Tiểu thuyết</option>
                    <option value="1">Thiếu nhi</option>
                </select>
                <label for="floatingSelect">Chọn danh mục</label>
            </div>
            
            

        </div>
    </div>




</form>
</div>
<!-- Form End -->