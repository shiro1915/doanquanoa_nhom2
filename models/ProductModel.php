<?php
    class ProductModel {
        public function select_products_limit($limit) {
           $sql = "SELECT * FROM products ORDER BY product_id DESC LIMIT $limit";

           return pdo_query($sql);
        }

        public function select_products_by_id($id) {
            $sql = "SELECT * FROM products WHERE product_id = ?";
 
            return pdo_query_one($sql, $id);
        }

        public function select_products_similar($id) {
            $sql = "SELECT * FROM products WHERE category_id = ? ORDER BY product_id LIMIT 4";
 
            return pdo_query($sql, $id);
        }

        public function select_all_products() {
           
        }

        public function discount_percentage($price, $sale_price) {
            $discount_percentage = ($price - $sale_price) / $price * 100;

            $round__percentage = round($discount_percentage, 0)."%";
            return $round__percentage;
        }

        public function formatted_price($price) {
            $format = number_format($price, 0, ',', '.') . 'đ';
            return $format;
        }

    }

    $ProductModel = new ProductModel();
?>