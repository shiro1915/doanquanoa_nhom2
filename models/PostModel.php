<?php
    class PostModel extends Db{
        public function getAllposts(){
            $sql = self::$connection->prepare("SELECT * FROM `posts`");
            $sql->execute();
            $posts = array();
            $posts = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $posts;
        }
    
        public function select_all_posts() {
            $sql = self::$connection->prepare("SELECT * FROM posts ORDER BY post_id DESC");
            $sql->execute();
            $posts = array();
            $posts = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $posts;
        }
        
        public function select_post_by_id($post_id) {
            $sql = self::$connection->prepare("SELECT p.title, p.content, p.image, p.author, p.created_at, c.name AS cate_name
                    FROM posts p
                    LEFT JOIN post_categories c ON c.id = p.category_id
                    WHERE p.post_id = ? AND p.status = 1");
            $sql->bind_param("i", $post_id);
            $sql->execute();
            $posts = array();
            $posts = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $posts;
        }
        
        public function select_post_by_catgory($category_id) {
            $sql = self::$connection->prepare("SELECT * FROM posts WHERE category_id = ? ORDER BY post_id DESC");
            $sql->bind_param("i", $category_id);
            $sql->execute();
            $posts = array();
            $posts = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $posts;
        }
        
        public function select_post_category() {
            $sql = self::$connection->prepare("
                SELECT cate.name, cate.id, COUNT(p.category_id) AS qty_post
                FROM post_categories cate
                LEFT JOIN posts p ON cate.id = p.category_id
                GROUP BY cate.id, cate.name
            ");
            $sql->execute();
            $posts = array();
            $posts = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $posts;
        }
    }