<?php
    class ProductModel extends Db{
        public function getAllBase(){
            $sql = self::$connection->prepare("SELECT * FROM `products`");
            $sql->execute();
            $products = array();
            $products = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $products;
        }
        
        public function insert_product($category_id, $name, $image, $quantity, $price, $sale_price, $details, $short_description) {
            $sql = self::$connection->prepare("INSERT INTO products 
            (category_id, name, image, quantity, price, sale_price, details, short_description)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            
            // Kiểm tra xem câu lệnh chuẩn bị có thành công không
            if ($sql === false) {
                error_log("Lỗi khi chuẩn bị câu lệnh: " . self::$connection->error);
                return false; // Hoặc xử lý lỗi theo cách khác
            }
        
            // Liên kết tham số
            $sql->bind_param("isssddss", $category_id, $name, $image, $quantity, $price, $sale_price, $details, $short_description);
            
            // Thực thi câu lệnh
            if ($sql->execute()) {
                return true; // Trả về true nếu thêm sản phẩm thành công
            } else {
                error_log("Lỗi khi thêm sản phẩm: " . $sql->error);
                return false; // Trả về false nếu có lỗi
            }
        }
        
        public function select_products() {
            $sql = self::$connection->prepare("SELECT name FROM products WHERE status = 1");
            $sql->execute();
            $products = array();
            $products = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $products;
        }
        
        public function update_product_not_active($product_id) {
            $sql = self::$connection->prepare("UPDATE products SET status = 0 WHERE product_id = ?");
            $sql->bind_param("i", $product_id);
            $sql->execute();
            $products = array();
            $products = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $products;
        }
        
        public function update_product_active($product_id) {
            $sql = self::$connection->prepare("UPDATE products SET status = 1 WHERE product_id = ?");
            $sql->bind_param("i", $product_id);
            $sql->execute();
            $products = array();
            $products = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $products;
        }
        
        public function select_list_products($keyword, $id_danhmuc, $page, $perPage) {
            $start = ($page - 1) * $perPage;
            $sql = self::$connection->prepare("
                SELECT * FROM products WHERE 1
                ".($keyword != '' ? "AND name LIKE ? " : "")."
                ".($id_danhmuc > 0 ? "AND category_id = ? " : "")."
                AND status = 1 ORDER BY product_id DESC LIMIT ?, ?
            ");
            
            if ($keyword != '' && $id_danhmuc > 0) {
                $keyword = "%" . $keyword . "%";
                $sql->bind_param("siii", $keyword, $id_danhmuc, $start, $perPage);
            } elseif ($keyword != '') {
                $keyword = "%" . $keyword . "%";
                $sql->bind_param("sii", $keyword, $start, $perPage);
            } elseif ($id_danhmuc > 0) {
                $sql->bind_param("iii", $id_danhmuc, $start, $perPage);
            } else {
                $sql->bind_param("ii", $start, $perPage);
            }
            
            $sql->execute();
            $products = array();
            $products = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $products;
        }
        
        public function select_recycle_products() {
            $sql = self::$connection->prepare("SELECT * FROM products WHERE status = 0 ORDER BY product_id DESC");
            $sql->execute();
            $products = array();
            $products = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $products;
        }
        
        public function select_product_by_id($product_id) {
            $sql = self::$connection->prepare("SELECT * FROM products WHERE product_id = ?");
            $sql->bind_param("i", $product_id);
            $sql->execute();
            $products = array();
            $products = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $products;
        }
        
        public function delete_product($product_id) {
            $sql = self::$connection->prepare("DELETE FROM products WHERE product_id = ?");
            $sql->bind_param("i", $product_id);
            $sql->execute();
            $products = array();
            $products = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $products;
        }
        
        public function update_product($category_id, $name, $image, $quantity, $price, $sale_price, $details, $short_description, $product_id) {
            // Chuẩn bị câu lệnh SQL
            $sql = self::$connection->prepare("
                UPDATE products 
                SET category_id = ?, name = ?, ".($image != '' ? "image = ?, " : "")." quantity = ?, price = ?, sale_price = ?, details = ?, short_description = ? 
                WHERE product_id = ?
            ");
            
            // Kiểm tra xem câu lệnh chuẩn bị có thành công không
            if ($sql === false) {
                error_log("Lỗi khi chuẩn bị câu lệnh: " . self::$connection->error);
                return false; // Hoặc xử lý lỗi theo cách khác
            }
        
            // Liên kết tham số
            if ($image != '') {
                $sql->bind_param("isssddssi", $category_id, $name, $image, $quantity, $price, $sale_price, $details, $short_description, $product_id);
            } else {
                $sql->bind_param("issddssi", $category_id, $name, $quantity, $price, $sale_price, $details, $short_description, $product_id);
            }
        
            // Thực thi câu lệnh
            if ($sql->execute()) {
                return true; // Trả về true nếu cập nhật thành công
            } else {
                error_log("Lỗi khi cập nhật sản phẩm: " . $sql->error);
                return false; // Trả về false nếu có lỗi
            }
        }
        
    }
