<?php
    class CartModel extends Db{
        public function getAllCart(){
            $sql = self::$connection->prepare("SELECT * FROM `carts`");
            $sql->execute();
            $carts = array();
            $carts = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $carts;
        }
    
        public function select_all_carts($user_id) {
            $sql = self::$connection->prepare("SELECT * FROM carts WHERE user_id = ? ORDER BY cart_id DESC");
            $sql->bind_param("i", $user_id);
            $sql->execute();
            $carts = array();
            $carts = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $carts;
        }
        
        public function select_cart_by_id($product_id, $user_id) {
            $sql = self::$connection->prepare("SELECT * FROM carts WHERE product_id = ? AND user_id = ?");
            $sql->bind_param("ii", $product_id, $user_id);
            $sql->execute();
            $result = $sql->get_result();
            
            if ($result->num_rows > 0) {
                return $result->fetch_assoc();  // Trả về mảng đơn nếu có dữ liệu
            }
            
            return [];  // Trả về mảng rỗng nếu không có sản phẩm nào
        }
        
        
        public function select_mini_carts($user_id, $limit) {
            $sql = self::$connection->prepare("SELECT * FROM carts WHERE user_id = ? ORDER BY cart_id DESC LIMIT ?");
            $sql->bind_param("ii", $user_id, $limit);
            $sql->execute();
            $carts = array();
            $carts = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $carts;
        }
        
        public function count_cart($user_id) {
            $sql = self::$connection->prepare("SELECT cart_id FROM carts WHERE user_id = ?");
            $sql->bind_param("i", $user_id);
            $sql->execute();
            $carts = array();
            $carts = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $carts;
        }
        public function insert_cart($product_id, $user_id, $product_name, $product_price, $product_quantity, $product_image) {
            $sql = self::$connection->prepare("INSERT INTO carts 
                (product_id, user_id, product_name, product_price, product_quantity, product_image)
                VALUES (?,?,?,?,?,?)");
        
            if (!$sql) {
                die('Lỗi câu lệnh SQL: ' . self::$connection->error);  // Kiểm tra lỗi chuẩn bị câu lệnh
            }
        
            $sql->bind_param("iisdss", $product_id, $user_id, $product_name, $product_price, $product_quantity, $product_image);
        
            // Kiểm tra việc thực thi câu lệnh SQL
            if ($sql->execute()) {
                return true;
            } else {
                return 'Lỗi trong quá trình thêm giỏ hàng: ' . self::$connection->error;
            }
        }
        
        
        
        public function update_cart($product_qty, $product_id, $user_id) {
            // Chuẩn bị câu lệnh SQL
            $sql = self::$connection->prepare("UPDATE carts SET 
                    product_quantity = ? 
                    WHERE product_id = ? AND user_id = ?");
            
            // Kiểm tra lỗi câu lệnh SQL
            if (!$sql) {
                die('Lỗi câu lệnh SQL: ' . self::$connection->error);
            }
            
            // Liên kết tham số với câu lệnh SQL
            $sql->bind_param("iii", $product_qty, $product_id, $user_id);
            
            // Thực thi câu lệnh SQL
            if ($sql->execute()) {
                return true; // Trả về true nếu cập nhật thành công
            } else {
                return false; // Trả về false nếu có lỗi khi thực thi câu lệnh
            }
        }
        
        
        public function delete_product_in_cart($product_id, $user_id) {
            $sql = self::$connection->prepare("DELETE FROM carts WHERE product_id = ? AND user_id = ?");
            $sql->bind_param("ii", $product_id, $user_id);
            $sql->execute();
            $carts = array();
            $carts = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $carts;
        }
        
        public function delete_cart_by_id($cart_id) {
            $sql = self::$connection->prepare("DELETE FROM carts WHERE cart_id = ?");
            $sql->bind_param("i", $cart_id);
            
            // Kiểm tra xem câu lệnh DELETE có thực thi thành công không
            if ($sql->execute()) {
                return true;  // Nếu xóa thành công
            } else {
                return false; // Nếu có lỗi xảy ra
            }
        }
        
    }        