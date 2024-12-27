<?php
   class BaseModel extends Db {
    
    // Lấy tất cả sản phẩm từ kho (warehouse)
    public function getAllBase() {
        // Chuẩn bị câu truy vấn SELECT
        $sql = self::$connection->prepare("SELECT * FROM `warehouse`");

        // Thực thi câu truy vấn
        $sql->execute();

        // Lấy kết quả dưới dạng mảng kết hợp
        $wares = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        
        return $wares;
    }
    public function getOrderById($order_id) {
        // Chuẩn bị câu truy vấn SELECT
        $sql = self::$connection->prepare("SELECT * FROM `orders` WHERE `order_id` = ?");
    
        // Liên kết tham số với câu truy vấn
        $sql->bind_param("i", $order_id); // 'i' là kiểu dữ liệu integer (số nguyên)
    
        // Thực thi câu truy vấn
        $sql->execute();
    
        // Lấy kết quả dưới dạng mảng kết hợp
        $order = $sql->get_result()->fetch_assoc();  // Sử dụng fetch_assoc để lấy kết quả là mảng kết hợp
    
        return $order;
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
    
    
    // Kiểm tra tính hợp lệ của ảnh (có thể kiểm tra loại file, kích thước, v.v.)
    public function is_image_valid($image) {
        // Ví dụ: kiểm tra xem ảnh có đuôi file hợp lệ hay không
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
        $image_extension = pathinfo($image, PATHINFO_EXTENSION);
        
        if (in_array(strtolower($image_extension), $allowed_extensions)) {
            return true; // Ảnh hợp lệ
        } else {
            return false; // Ảnh không hợp lệ
        }
    }
}
