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
            $sql = self::$connection->prepare("SELECT * FROM categories WHERE status = 1 AND category_id > 1 ORDER BY category_id ASC LIMIT ?");
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
        
        public function select_name_categories() {
            $sql = self::$connection->prepare("SELECT category_id, name FROM categories");
            $sql->execute();
            $category = array();
            $category = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $category;
        }
    }        