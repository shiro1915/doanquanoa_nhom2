<div class="container-fluid pt-4">

    <div class="alert alert-success" role="alert">
        Thêm thành công
    </div>
    <form class="row g-4" action="" method="post" enctype="multipart/form-data">

        <div class="col-sm-12 col-xl-9">

            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">
                    <a href="index.php?quanli=video-khoa-hoc" class="link-not-hover">Danh sách video</a>   
                    / Thêm video
                </h6>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Tên video</label>
                </div>

                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Danh mục</option>
                        <option value="1">Tiếng Anh</option>
                        <option value="1">Pháp luật</option>
                    </select>
                    <label for="floatingSelect">Danh mục</label>
                </div>


                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Mô tả khóa học" id="floatingTextarea" style="height: 210px;"></textarea>
                    <label for="floatingTextarea text-dark">Mô tả video</label>
                </div>

                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Trạng thái</option>
                        <option value="1">Hiển thị</option>
                        <option value="1">Tạm ẩn</option>
                    </select>
                    <label for="floatingSelect">Trạng thái</label>
                </div>

                
            </div>
        </div>
        <div class="col-sm-12 col-xl-3">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">
                    <input type="submit" value="Đăng" class="btn btn-custom">

                </h6>
                <div class="mb-3">
                    <label for="formFileSm" class="form-label">Video (mp4)</label>
                    <input style="background-color: #fff" class="form-control form-control-sm" id="formFileSm" type="file">

                </div>

            </div>
        </div>





    </form>
</div>
<!-- Form End -->