<?php
    class OrderModel{

        // Select thông tin đon hàng
        public function select_list_orders_admin() {
            $sql = "
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
                    users.phone AS user_phone
                FROM
                    orders
                JOIN
                    users ON orders.user_id = users.user_id
                ORDER BY orders.order_id DESC
            ";

            return pdo_query($sql);
        }

        public function getFullOrderInformation($order_id) {
            $sql = "
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
                WHERE orders.order_id = ?
                
            ";

            return pdo_query($sql, $order_id);
        }

        public function update_status_order($status, $order_id) {
            $sql = "UPDATE orders SET status = ? WHERE order_id = ?";

            pdo_execute($sql, $status, $order_id);
        }


    }

    $OrderModel = new OrderModel();
?>