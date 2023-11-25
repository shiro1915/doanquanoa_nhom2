<!-- Form Start -->
<div class="container-fluid pt-4" style="margin-bottom: 110px;">

    <form class="row g-4" action="" method="post" enctype="multipart/form-data">

        <div class="col-sm-12 col-xl-9">

            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">
                    <a href="index.php?quanli=danh-sach-bai-viet" class="link-not-hover">Bài viết</a> 
                    / Cập nhật bài viết
                </h6>
                
                <label for="floatingInput">Tiêu đề bài viết</label>
                <div class="form-floating mb-4">
                    <input name="title" type="text" class="form-control" id="floatingInput">   
                    <span class="text-danger" ></span>
                </div>
                
                <label for="text-dark">Nội dung bài viết</label>
                <div class="form-floating mb-3">
                    <textarea name="content" class="form-control" placeholder="Nội dung" id="short_description">
                        
                    </textarea>

                </div>
                                        
            </div>
        </div>
        <div class="col-sm-12 col-xl-3">
            <div class="bg-light rounded h-100 p-4">
                <div class="mb-3">
                    <label for="formFileSm" class="form-label">Hình ảnh (JPG, PNG)</label><br>
                    <span class="text-danger" ></span>
                    <input style="background-color: #fff" name="image" class="form-control form-control-sm"
                        id="formFileSm" type="file">
                    <div class="my-2">
                        <img src="../upload/default-product.jpg" width="100%" class="img-thumbnail" alt="">
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <select name="category_id" class="form-select" id="floatingSelect" required>
                        <option value="">Chuyên mục 1</option>'
                    </select>
                    <label for="floatingSelect">Chọn chuyên mục</label>
                </div>
                <h6 class="mb-4">
                    <input type="submit" name="update_post" value="Cập nhật" class="btn btn-custom">
                    
                </h6>

            </div>
        </div>

    </form>
</div>
<!-- Form End -->

<style>
    .ck-editor__editable[role="textbox"]:first-child {
        /* editing area */
        min-height: 300px;
    }


    .ck-content .image {
        /* block images */
        max-width: 80%;
        margin: 20px auto;
    }
</style>