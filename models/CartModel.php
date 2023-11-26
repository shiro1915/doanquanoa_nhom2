<?php
    class CartModel{
        public function select_all_carts($user_id) {
            $sql = "SELECT * FROM carts WHERE user_id = $user_id ORDER BY cart_id DESC";

            return pdo_query($sql);
        }

        public function select_cart_by_id($product_id, $user_id) {
            $sql = "SELECT * FROM carts WHERE product_id = $product_id AND user_id = $user_id";

            return pdo_query_one($sql);
        }

        public function insert_cart($product_id, $user_id, $product_name, $product_price, $product_quantity, $product_image) {
            $sql = "INSERT INTO carts 
           (product_id, user_id, product_name, product_price, product_quantity, product_image)
            VALUES (?,?,?,?,?,?)";

            pdo_execute($sql, $product_id, $user_id, $product_name, $product_price, $product_quantity, $product_image);
        }

        public function update_cart($product_qty, $product_id, $user_id) {
            $sql = "UPDATE carts SET 
            product_quantity = $product_qty 
            WHERE product_id = $product_id AND user_id = $user_id";

            pdo_execute($sql);
        }
    }

    $CartModel = new CartModel();
?>