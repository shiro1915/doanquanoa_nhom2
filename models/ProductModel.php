<?php
class Product extends Db
{
    public function select_products_limit($limit) {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE status = 1 ORDER BY product_id DESC LIMIT ?");
        $sql->bind_param("i", $limit);
        $sql->execute();
        $updates = array();
        $updates = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $updates;
    }

    public function select_product_by_id($product_id) {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE product_id = ?");
        $sql->bind_param("i", $product_id);
        $sql->execute();
        $result = $sql->get_result();
        return $result->fetch_all(MYSQLI_ASSOC); // Trả về mảng sản phẩm
    }
    
    
    public function select_products_order_by($limit, $order_by) {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE status = 1 ORDER BY product_id $order_by LIMIT ?");
        $sql->bind_param("i", $limit);
        $sql->execute();
        $updates = array();
        $updates = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $updates;
    }
    
    public function select_cate_in_product($product_id) {
        $sql = self::$connection->prepare("SELECT category_id FROM products WHERE product_id = ?");
        $sql->bind_param("i", $product_id);
        $sql->execute();
        $updates = array();
        $updates = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $updates;
    }
    
    public function select_products_similar($category_id) {
        $sql = "SELECT * FROM products WHERE category_id = ? LIMIT 4"; // Câu truy vấn đơn giản
        $stmt = self::$connection->prepare($sql);
        
        // Kiểm tra xem câu lệnh chuẩn bị có thành công không
        if ($stmt === false) {
            error_log("Lỗi khi chuẩn bị câu lệnh: " . self::$connection->error);
            return []; // Trả về mảng rỗng nếu có lỗi
        }
    
        $stmt->bind_param("i", $category_id);
        
        // Thực thi câu lệnh
        if (!$stmt->execute()) {
            error_log("Lỗi khi thực thi câu lệnh: " . $stmt->error);
            return []; // Trả về mảng rỗng nếu có lỗi
        }
    
        $result = $stmt->get_result();
        
        // Kiểm tra xem $result có hợp lệ không
        if ($result === false) {
            error_log("Lỗi khi lấy kết quả: " . $stmt->error);
            return []; // Trả về mảng rỗng nếu có lỗi
        }
    
        return $result->fetch_all(MYSQLI_ASSOC); // Trả về mảng các sản phẩm
    }
    
    public function search_products($query) {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE name LIKE ?");
        $query = "%$query%";
        $sql->bind_param("s", $query);
        $sql->execute();
        $updates = array();
        $updates = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $updates;
    }
    
    public function search_products_by_price($from_price, $to_price) {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE sale_price BETWEEN ? AND ?");
        $sql->bind_param("ii", $from_price, $to_price);
        $sql->execute();
        $updates = array();
        $updates = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $updates;
    }
    
    public function get_min_max_prices() {
        $sql = self::$connection->prepare("SELECT MIN(sale_price) AS min_price, MAX(sale_price) AS max_price FROM products WHERE status = 1");
        $sql->execute();
        $updates = array();
        $updates = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $updates;
    }
    
    public function select_all_products() {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE status = 1 ORDER BY product_id DESC");
        $sql->execute();
        $updates = array();
        $updates = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $updates;
    }
    
    public function select_products_by_cate($category_id) {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE category_id = ?");
        $sql->bind_param("i", $category_id);
        $sql->execute();
        $updates = array();
        $updates = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $updates;
    }
    
    function select_list_products($page, $perPage) {
        $start = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM products WHERE status = 1 ORDER BY product_id DESC LIMIT ?, ?");
        $sql->bind_param("ii", $start, $perPage);
        $sql->execute();
        $updates = array();
        $updates = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $updates;
    }
    
    // Đếm sản phẩm
    public function count_products() {
        $sql = self::$connection->prepare("SELECT product_id FROM products");
        $sql->execute();
        $updates = array();
        $updates = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $updates;
    }
    
    public function discount_percentage($price, $sale_price) {
        // Kiểm tra nếu giá trị price hợp lệ
        if ($price <= 0) {
            throw new InvalidArgumentException("Price must be greater than zero.");
        }
    
        // Tính phần trăm giảm giá
        $discount_percentage = ($price - $sale_price) / $price * 100;
        return round($discount_percentage, 0) . "%";
    }
    
    
    public function formatted_price($price) {
        // Kiểm tra nếu giá trị price hợp lệ
        if ($price <= 0) {
            return "Giá không hợp lệ";
        }
        // Định dạng giá thành dạng VND (ví dụ: 745.000đ)
        return number_format($price, 0, ',', '.') . 'đ';
    }
    
    
    public function insert_product($category_id, $name, $image, $quantity, $price, $sale_price, $details, $short_description) {
        // Thực hiện câu lệnh INSERT vào cơ sở dữ liệu
        $sql = self::$connection->prepare("INSERT INTO products (category_id, name, image, quantity, price, sale_price, details, short_description) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $sql->bind_param("ssssssss", $category_id, $name, $image, $quantity, $price, $sale_price, $details, $short_description);
    
        // Kiểm tra nếu câu lệnh thực thi thành công
        if ($sql->execute()) {
            return true; // Thêm sản phẩm thành công
        } else {
            return false; // Thêm sản phẩm thất bại
        }
    }
    

    public function update_views($product_id) {
        // Câu lệnh UPDATE không cần gọi get_result() hay fetch_all()
        $sql = self::$connection->prepare("UPDATE products SET views = views + 1 WHERE product_id = ?");
        $sql->bind_param("i", $product_id);
    
        // Thực thi câu lệnh và kiểm tra xem có thành công không
        if ($sql->execute()) {
            return true; // Cập nhật thành công
        } else {
            return false; // Cập nhật thất bại
        }
    }
    
    public function update_quantity_product($product_id, $quantity) {
        // Sửa lại tên cột từ product_quantity thành quantity
        $sql = self::$connection->prepare("UPDATE products SET quantity = quantity - ? WHERE product_id = ?");
        $sql->bind_param("ii", $quantity, $product_id); 
        
        if ($sql->execute()) {
            return true;  // Thành công
        } else {
            return false; // Thất bại
        }
    }
    
    
    
    
    public function update_sell_quantity_product($product_id, $quantity) {
        // Chuẩn bị câu lệnh SQL
        $sql = self::$connection->prepare("UPDATE products SET sell_quantity = sell_quantity + ? WHERE product_id = ?");
        
        // Ràng buộc tham số
        $sql->bind_param("ii", $quantity, $product_id);
        
        // Thực thi câu lệnh
        if ($sql->execute()) {
            // Kiểm tra xem có bao nhiêu dòng bị ảnh hưởng (cập nhật thành công hay không)
            if ($sql->affected_rows > 0) {
                return true;  // Cập nhật thành công
            } else {
                return false; // Không có dòng nào bị ảnh hưởng
            }
        } else {
            return false; // Thực thi câu lệnh thất bại
        }
    }
    
}    
