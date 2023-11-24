<?php
    class BaseModel{
        public function alert_error_success($error, $success) {
            $html = '';
            if($error != '') {
                $html = '
                    <div class="alert alert-danger p-2"> 
                        '.$error.'
                    </div> 
                ';
            }
            elseif($success != '') {
                $html = '
                <div class="alert alert-success p-2"> 
                    '.$success.'
                </div> 
            ';
            }
        
            return $html;
        }

        public function is_image_valid($image)
        {
            $allowedExtensions = ['jpg', 'jpeg', 'png'];

            // Lấy thông tin về file
            $pathInfo = pathinfo($image);

            // Kiểm tra phần mở rộng của file
            $extension = strtolower($pathInfo['extension']);

            return in_array($extension, $allowedExtensions);
        }


    }

    $BaseModel = new BaseModel();
?>