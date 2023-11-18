<?php
    class CategoryModel {
        public function select_categories_limit($limit) {
            $sql = "SELECT * FROM categories WHERE status = 1 ORDER BY category_id DESC LIMIT $limit";

            return pdo_query($sql);
        }

        public function select_all_categories() {
            
        }
    }

    $CategoryModel = new CategoryModel();
?>