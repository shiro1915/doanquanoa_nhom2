<?php
    class ProductModel {
        public function insert_product($category_id, $name, $image, $quantity, $price, $sale_price, $details, $short_description) {
           
           $sql = "INSERT INTO products 
           (category_id, name, image, quantity, price, sale_price, details, short_description)
            VALUES (?,?,?,?,?,?,?,?)";

            pdo_execute($sql, $category_id, $name, $image, $quantity, $price, $sale_price, $details, $short_description);
        }

        public function select_products() {
            $sql = "SELECT name FROM products";

            return pdo_query($sql);
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