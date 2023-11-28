<?php
    class PostModel {
        public function insert_category_post($name) {
            $sql = "INSERT INTO post_categories(name) VALUES (?)";
 
            pdo_execute($sql, $name);
        }

        public function select_name_cate_post() {
            $sql = "SELECT name FROM post_categories";

            return pdo_query($sql);
        }

        public function select_cate_post_by_id($id) {
            $sql = "SELECT * FROM post_categories WHERE id= ?";

            return pdo_query_one($sql, $id);
        }

        public function select_category_posts() {
            // $sql = "
            // SELECT * FROM post_categories ORDER BY id DESC
            // ";
            $sql = "
                    SELECT pc.id,pc.name, COUNT(p.post_id) AS post_count
                FROM 
                    post_categories pc
                LEFT JOIN 
                    posts p ON pc.id = p.post_id
                GROUP BY 
                    pc.id
                ORDER BY 
                    pc.id DESC
            ";
            

            return pdo_query($sql);
        }

        public function update_cate($name, $cate_post_id) {
            $sql = "UPDATE post_categories SET name = '".$name."' WHERE id =".$cate_post_id;

            return pdo_execute($sql);
        }

        public function delete_category_posts($cate_post_id) {
            $sql = "DELETE FROM post_categories WHERE id = ?";
            pdo_execute($sql, $cate_post_id);
        }
         

    }

    $PostModel = new PostModel();
?>