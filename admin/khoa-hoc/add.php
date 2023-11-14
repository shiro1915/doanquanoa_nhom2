<!-- Form Start -->
<div class="container-fluid pt-4">


<form class="row g-4" action="" method="post" enctype="multipart/form-data">

    <div class="col-sm-12 col-xl-9">

        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">
                <a href="index.php?quanli=danh-sach-khoa-hoc" class="link-not-hover">Khóa học</a> 
                / Thêm khóa học
            </h6>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput"
                    placeholder="name@example.com">
                <label for="floatingInput">Tên khóa học</label>
            </div>
            
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Mô tả khóa học" id="floatingTextarea"
                    style="height: 210px;"></textarea>
                <label for="floatingTextarea text-dark">Mô tả khóa học</label>
            </div>
            


        </div>
    </div>
    <div class="col-sm-12 col-xl-3">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">
                <input type="submit" value="Đăng" class="btn btn-custom">
                <a href="" class="btn btn-custom">Xóa tạm</a>
            </h6>
            <div class="mb-3">
                <label for="formFileSm" class="form-label">Hình ảnh (JPG, PNG, )</label>
                <input style="background-color: #fff" class="form-control form-control-sm"
                    id="formFileSm" type="file">
                <div class="my-2">
                    <img src="./img/book-1.jpg" style="width: 100%; max-width: 200px;" class="img-fluid" alt="">
                </div>
            </div>

        </div>
    </div>
    




</form>
</div>
<!-- Form End -->