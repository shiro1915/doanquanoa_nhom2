<?php
    class BaseModel extends Db{
        public function getAllBase(){
            $sql = self::$connection->prepare("SELECT * FROM `warehouse`");
            $sql->execute();
            $wares = array();
            $wares = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $wares;
        }
     // Thêm một sản phẩm vào cơ sở dữ liệu (phương thức này chỉ chèn dữ liệu)
     public function alert_error_success($error = '', $success = '') {
        // Nếu có lỗi, chỉ thông báo lỗi
        if (!empty($error)) {
            echo "Error: " . $error;
        }
    
        // Nếu có thành công, chỉ thông báo thành công
        if (!empty($success)) {
            echo "Success: " . $success;
        }
    
        // Nếu không có gì, có thể chỉ trả về true hoặc false
        return true;
    }
    
        
    public function is_image_valid($image) {
        // Kiểm tra xem tệp có được gửi lên không
        if (!isset($_FILES["image"])) {
            error_log("Không có tệp nào được gửi lên.");
            return false; // Trả về false nếu không có tệp
        }
    
        // Đường dẫn thư mục để lưu hình ảnh
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($image);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
        // Kiểm tra định dạng tệp
        if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
            error_log("Chỉ cho phép tệp JPG hoặc PNG.");
            return false; // Trả về false nếu định dạng không hợp lệ
        }
    
        // Kiểm tra kích thước tệp (ví dụ: tối đa 2MB)
        if ($_FILES["image"]["size"] > 2 * 1024 * 1024) {
            error_log("Kích thước tệp vượt quá giới hạn cho phép.");
            return false; // Trả về false nếu kích thước tệp quá lớn
        }
    
        return true; // Trả về true nếu tệp hợp lệ
    }
    // Định dạng lại ngày và thêm số ngày vào
    public function date_format($date = null, $format = 'Y-m-d H:i') {
        if ($date === null) {
            // Nếu không có ngày được truyền vào, sử dụng ngày hiện tại
            $date = date($format);
        }
        
        $timestamp = strtotime($date);
        
        if ($timestamp === false) {
            return 'Invalid date format'; // Thông báo lỗi nếu ngày không hợp lệ
        }
        
        return date($format, $timestamp); // Trả về ngày đã định dạng
    }
    
    }