<!-- Form Start -->
<div class="container-fluid pt-4">

                
<form class="row g-4" action="" method="post" enctype="multipart/form-data">

    <div class="col-sm-12 col-xl-9">

        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">
                <a href="index.php?quanli=video-khoa-hoc" class="link-not-hover">Danh sách video</a> 
                / Cập nhật video
            </h6>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput"
                    placeholder="name@example.com">
                <label for="floatingInput">Tên video</label>
            </div>
            
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Mô tả khóa học" id="floatingTextarea"
                    style="height: 210px;"></textarea>
                <label for="floatingTextarea text-dark">Mô tả video</label>
            </div>
            
            

        </div>
    </div>
    <div class="col-sm-12 col-xl-3">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">
                <input type="submit" value="Cập nhật" class="btn btn-custom">
                <a href="" class="btn btn-custom">Tạm ẩn</a>
            </h6>
            
            <div class="form-floating mb-3">
                <select class="form-select" id="floatingSelect"
                    aria-label="Floating label select example">
                    <option value="0" selected>Chưa có danh mục</option>
                    <option value="1">Tiểu thuyết</option>
                    <option value="1">Thiếu nhi</option>
                </select>
                <label for="floatingSelect">Danh mục khóa học</label>
            </div>              

        </div>
    </div>
    
    <div class="col-sm-12">
        <div class="bg-light rounded h-100 p-4 video-courses">
            <div style="width: 50%;" class="mb-3">
                <label for="formFileSm" class="form-label">Chọn video thay thế (định dạng mp4)</label>
                <input style="background-color: #fff" class="form-control form-control-sm"
                    id="formFileSm" type="file">
                
            </div>
            <div class="box-video" style="width: 100%; height: 600px">
                <!-- <iframe style="width: 100%; height: 100%;" src="https://www.youtube.com/embed/HqUl2Q74eSI?si=BXf_jedUkGj6Or5Y"></iframe> -->
                <video controls>
                    <source src="video-courses/eng-1.mp4" type="video/mp4">
                    
                   
                </video>
            </div>

        </div>
    </div>




</form>
</div>
<!-- Form End -->