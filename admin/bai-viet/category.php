<!-- Form Start -->
<div class="container-fluid pt-4" style="margin-bottom: 110px;">
    <div class="row g-4">
        <div class="col-sm-8 col-xl-5">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">
                        <a href="index.php?quanli=danh-sach-bai-viet" class="link-not-hover">Bài viết</a>
                        / Thêm chuyên mục
                    </h6>

                    <label for="floatingInput">Tên chuyên mục</label>
                    <div class="form-floating mb-4">
                        <input name="name" type="text" class="form-control" id="floatingInput">
                        <span class="text-danger"></span>
                    </div>
                    <input type="submit" name="add_category" value="Thêm chuyên mục" class="btn btn-custom">           
                </div>
            </form>
        </div>

        <div class="col-sm-8 col-xl-7">
            <div class="bg-light rounded h-100 p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Danh sách chuyên mục</h6>
                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-dark">

                                <th scope="col">#</th>
                                <th scope="col">Tên</th>
                                <th scope="col">Chỉnh sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td>1</td>
                                <td>Các loại sách hay 2023</td>
                                <td>
                                    <a href="" class="btn-sm btn-success">Xem</a>
                                    <a href="" class="btn-sm btn-secondary">Sửa</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>

</div>
<!-- Form End -->