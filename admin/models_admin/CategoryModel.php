<?php
    class CategoryModel extends Db{
        public function getAllCategory(){
            $sql = self::$connection->prepare("SELECT * FROM `categories`");
            $sql->execute();
            $category = array();
            $category = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $category;
        }
    
        public function select_categories_limit($limit) {
            $sql = self::$connection->prepare("SELECT * FROM categories WHERE status = 1 ORDER BY category_id DESC LIMIT ?");
            $sql->bind_param("i", $limit);
            $sql->execute();
            $category = array();
            $category = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $category;
        }
        
        public function select_all_categories() {
            $sql = self::$connection->prepare("SELECT * FROM categories ORDER BY category_id");
            $sql->execute();
            $category = array();
            $category = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $category;
        }
        
        public function select_category_by_id($category_id) {
            $sql = self::$connection->prepare("SELECT * FROM categories WHERE category_id = ?");
            $sql->bind_param("i", $category_id);
            $sql->execute();
            $category = array();
            $category = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $category;
        }
        
        public function select_name_categories() {
            $sql = self::$connection->prepare("SELECT name FROM categories");
            $sql->execute();
            $category = array();
            $category = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $category;
        }
        
        // Danh sách danh mục hiển số số lượng sản phẩm mỗi danh mục
        public function getCategoryProductCount() {
            $sql = self::$connection->prepare("
                SELECT c.name AS category_name, c.status AS category_status,
                       c.image AS category_image, c.category_id AS cate_id, 
                       COUNT(p.product_id) AS qty_product
                FROM categories c
                LEFT JOIN products p ON c.category_id = p.category_id
                GROUP BY c.category_id
            ");
            $sql->execute();
            $category = array();
            $category = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $category;
        }
        
        public function insert_categories($name, $image, $status) {
            $sql = self::$connection->prepare("INSERT INTO categories 
                   (name, image, status)
                   VALUES (?,?,?)");
            $sql->bind_param("ssi", $name, $image, $status);
            $sql->execute();
            $category = array();
            $category = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $category;
        }
        public function update_category($name, $image, $status, $category_id) {
            if ($image != '') {
                // Nếu có hình ảnh, sử dụng câu lệnh với 4 tham số
                $sql = self::$connection->prepare("UPDATE categories SET name = ?, image = ?, status = ? WHERE category_id = ?");
                $sql->bind_param("ssii", $name, $image, $status, $category_id);
            } else {
                // Nếu không có hình ảnh, sử dụng câu lệnh với 3 tham số
                $sql = self::$connection->prepare("UPDATE categories SET name = ?, status = ? WHERE category_id = ?");
                $sql->bind_param("sii", $name, $status, $category_id);
            }
        
            // Thực thi câu lệnh
            if ($sql->execute()) {
                return true; // Trả về true nếu cập nhật thành công
            } else {
                return false; // Trả về false nếu có lỗi
            }
        }
        
        public function delete_category($category_id) {
            $sql = self::$connection->prepare("DELETE FROM categories WHERE category_id = ?");
            $sql->bind_param("i", $category_id);
            
            // Thực thi câu lệnh
            if ($sql->execute()) {
                return true; // Trả về true nếu xóa thành công
            } else {
                // Ghi lại lỗi nếu có
                error_log("Lỗi khi xóa danh mục: " . $sql->error);
                return false; // Trả về false nếu có lỗi
            }
        }
    }