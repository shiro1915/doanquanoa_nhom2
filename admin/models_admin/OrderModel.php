<?php
    class OrderModel extends Db
    {
        public function getAllOrder(){
            $sql = self::$connection->prepare("SELECT * FROM `orders`");
            $sql->execute();
            $orders = array();
            $orders = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $orders;
        }
       // Select thông tin đon hàng
public function select_list_orders_admin() {
    $sql = self::$connection->prepare("SELECT orders.order_id, orders.user_id, orders.date AS order_date, orders.total, orders.address AS order_address, orders.phone AS order_phone, orders.note, orders.status, users.full_name, users.email, users.phone AS user_phone FROM orders JOIN users ON orders.user_id = users.user_id ORDER BY orders.order_id DESC");
    $sql->execute();
    $orders = array();
    $orders = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $orders;
}

public function select_orders_unconfirmed() {
    $sql = self::$connection->prepare("SELECT orders.order_id, orders.user_id, orders.date AS order_date, orders.total, orders.address AS order_address, orders.phone AS order_phone, orders.note, orders.status, users.full_name, users.email, users.phone AS user_phone FROM orders JOIN users ON orders.user_id = users.user_id WHERE orders.status = 1 ORDER BY orders.order_id DESC");
    $sql->execute();
    $orders = array();
    $orders = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $orders;
}

public function getFullOrderInformation($order_id) {
    $sql = self::$connection->prepare("SELECT orders.order_id, orders.user_id, orders.date AS order_date, orders.total, orders.address AS order_address, orders.phone AS order_phone, orders.note, orders.status, users.full_name, users.email, users.phone AS user_phone, orderdetails.product_id, orderdetails.quantity, orderdetails.price, products.name AS product_name, products.image AS product_image FROM orders JOIN users ON orders.user_id = users.user_id JOIN orderdetails ON orders.order_id = orderdetails.order_id JOIN products ON orderdetails.product_id = products.product_id WHERE orders.order_id = ?");
    $sql->bind_param("i", $order_id);
    $sql->execute();
    $orders = array();
    $orders = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $orders;
}

// Tổng doanh thu thống kê
public function total_revenue_orders() {
    $sql = self::$connection->prepare("SELECT SUM(total) AS tong_doanh_thu FROM orders WHERE status = 4");
    $sql->execute();
    $result = array();
    $result = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $result;
}
public function update_status_order($status, $order_id) {
    // Chuẩn bị câu lệnh SQL
    $sql = self::$connection->prepare("UPDATE orders SET status = ? WHERE order_id = ?");

    // Kiểm tra xem prepare có thành công không
    if ($sql === false) {
        // Ghi lại lỗi
        error_log("Prepare failed: " . self::$connection->error);
        return false; // Trả về false nếu có lỗi
    }

    // Liên kết tham số
    $sql->bind_param("si", $status, $order_id); // "si" cho biết status là string và order_id là integer

    // Thực thi câu lệnh
    if (!$sql->execute()) {
        // Ghi lại lỗi nếu execute không thành công
        error_log("Execute failed: " . $sql->error);
        return false; // Trả về false nếu có lỗi
    }

    // Trả về true nếu cập nhật thành công
    return true;
}
  
  // Hàm đếm số đơn hàng chưa xác nhận
  public function count_unconfirmed() {
    // Sử dụng self::$connection để truy vấn
    $sql = self::$connection->prepare("SELECT COUNT(*) as don_cho FROM orders WHERE status = 'unconfirmed'");
    
    // Thực thi câu lệnh
    $sql->execute();
    
    // Lấy kết quả
    $result = $sql->get_result()->fetch_assoc();
    
    // Trả về số lượng đơn hàng chưa xác nhận
    return $result ? $result : ['don_cho' => 0]; // Nếu có lỗi, trả về 0
}
 // Phương thức đếm số sản phẩm
 public function count_products() {
    // Sử dụng self::$connection để truy vấn
    $sql = self::$connection->prepare("SELECT COUNT(*) as total_products FROM products");
    
    // Thực thi câu lệnh
    $sql->execute();
    
    // Lấy kết quả
    $result = $sql->get_result()->fetch_assoc();
    
    // Trả về số lượng sản phẩm
    return $result ? $result : ['total_products' => 0]; // Nếu có lỗi, trả về 0
}
// Phương thức lấy số đơn hàng bán theo ngày
public function get_order_sold_by_day($limit_day) {
    // Sử dụng self::$connection để truy vấn
    $sql = self::$connection->prepare("SELECT DATE(order_date) as order_date, COUNT(*) as total_orders FROM orders WHERE order_date >= NOW() - INTERVAL ? DAY GROUP BY DATE(order_date)");

    // Kiểm tra xem prepare có thành công không
    if ($sql === false) {
        // Ghi lại lỗi
        error_log("Prepare failed: " . self::$connection->error);
        return []; // Trả về mảng rỗng nếu có lỗi
    }

    // Liên kết tham số
    $sql->bind_param("i", $limit_day);
    
    // Thực thi câu lệnh
    $sql->execute();
    
    // Lấy kết quả
    $result = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    
    // Trả về kết quả
    return $result;
}
public function get_statistics() {
    // Thực hiện truy vấn để lấy thống kê cho từng danh mục
    $sql = "
        SELECT 
            c.category_name, 
            COUNT(p.product_id) AS count_products, 
            MIN(p.price) AS min_price, 
            MAX(p.price) AS max_price, 
            AVG(p.price) AS avg_product 
        FROM 
            categories c 
        LEFT JOIN 
            products p ON c.category_id = p.category_id 
        GROUP BY 
            c.category_name
    ";

    $result = self::$connection->query($sql);

    // Kiểm tra xem truy vấn có thành công không
    if ($result) {
        return $result->fetch_all(MYSQLI_ASSOC); // Trả về mảng các kết quả
    } else {
        return []; // Trả về mảng rỗng nếu có lỗi
    }
}


    // Các thuộc tính và phương thức khác của lớp

    public function get_order_product_statistics() {
        $sql = self::$connection->prepare("SELECT product_id, COUNT(*) as total_orders FROM `orders` GROUP BY product_id");
    
        // Kiểm tra xem $sql có phải là false không
        if ($sql === false) {
            // Lấy thông tin lỗi
            $error = self::$connection->error;
            die("Error preparing statement: " . $error);
        }
    
        $sql->execute();
        $statistics = array();
        $statistics = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $statistics;
    }
    }