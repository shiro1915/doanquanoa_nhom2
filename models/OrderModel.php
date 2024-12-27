<?php
    class OrderModel extends Db{
        public function getAllOrder(){
            $sql = self::$connection->prepare("SELECT * FROM `orders`");
            $sql->execute();
            $orders = array();
            $orders = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $orders;
        }
    
        public function select_order_id() {
            $sql = self::$connection->prepare("SELECT order_id FROM orders ORDER BY date DESC LIMIT 1");
            $sql->execute();
            $orders = array();
            $orders = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $orders;
        }
        
        
        public function select_list_orders($user_id) {
            $sql = self::$connection->prepare("SELECT * FROM orders WHERE user_id = ? ORDER BY order_id DESC");
            $sql->bind_param("i", $user_id);
            $sql->execute();
            $orders = array();
            $orders = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $orders;
        }
        
        public function select_orderdetails_and_products($order_id) {
            $sql = self::$connection->prepare("
                SELECT
                    products.product_id,
                    products.name AS product_name,
                    products.image,
                    orderdetails.quantity,
                    orderdetails.price AS product_price
                FROM
                    products
                JOIN
                    orderdetails ON products.product_id = orderdetails.product_id
                WHERE order_id = ?;
            ");
            $sql->bind_param("i", $order_id);
            $sql->execute();
            $orders = array();
            $orders = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $orders;
        }
        
        public function getFullOrderInformation($user_id, $order_id) {
            $sql = self::$connection->prepare("
                SELECT
                    orders.order_id,
                    orders.user_id,
                    orders.date AS order_date,
                    orders.total,
                    orders.address AS order_address,
                    orders.phone AS order_phone,
                    orders.note,
                    orders.status,
                    users.full_name,
                    users.email,
                    users.phone AS user_phone,
                    orderdetails.product_id,
                    orderdetails.quantity,
                    orderdetails.price,
                    products.name AS product_name,
                    products.image AS product_image
                FROM
                    orders
                JOIN
                    users ON orders.user_id = users.user_id
                JOIN
                    orderdetails ON orders.order_id = orderdetails.order_id
                JOIN
                    products ON orderdetails.product_id = products.product_id
                WHERE orders.user_id = ? AND orders.order_id = ?;
            ");
            $sql->bind_param("ii", $user_id, $order_id);
            $sql->execute();
            $orders = array();
            $orders = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $orders;
        }
        
        public function insert_orders($user_id, $total, $address, $phone, $note) {
            $sql = self::$connection->prepare("INSERT INTO orders(user_id, total, address, phone, note) VALUES(?,?,?,?,?)");
            $sql->bind_param("issss", $user_id, $total, $address, $phone, $note);
            $sql->execute();
        }
        
        public function get_last_inserted_order_id() {
            return self::$connection->insert_id; // Lấy ID của bản ghi vừa được insert
        }
        
        
        
        public function insert_orderdetails($order_id, $product_id, $quantity, $price) {
            $sql = self::$connection->prepare("INSERT INTO orderdetails(order_id, product_id, quantity, price) VALUES(?,?,?,?)");
            $sql->bind_param("iiii", $order_id, $product_id, $quantity, $price);
            if ($sql->execute()) {
                return true;  // Thêm thành công
            } else {
                return false; // Thêm không thành công
            }
        }
        
        
        public function delete_cart_by_user_id($user_id) {
           
            $sql = self::$connection->prepare("DELETE FROM carts WHERE user_id = ?");
            $sql->bind_param("i", $user_id);
            if ($sql->execute()) {
                
                if ($sql->affected_rows > 0) {
                    return true;  
                } else {
                    return false; 
                }
            } else {
                return false; 
            }
        }
        
    }
        