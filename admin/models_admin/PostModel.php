<?php
    class PostModel extends Db{
        public function getAllposts(){
            $sql = self::$connection->prepare("SELECT * FROM `posts`");
            $sql->execute();
            $posts = array();
            $posts = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $posts;
        }
        public function insert_category_post($name) {
            $sql = self::$connection->prepare("INSERT INTO post_categories(name) VALUES (?)");
            $sql->bind_param("s", $name);
            $sql->execute();
            $posts = array();
            $posts = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $posts;
        }
        
        public function select_all_cate_posts() {
            $sql = self::$connection->prepare("SELECT * FROM post_categories");
            $sql->execute();
            $posts = array();
            $posts = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $posts;
        }
        
        public function select_name_cate_post() {
            $sql = self::$connection->prepare("SELECT name FROM post_categories");
            $sql->execute();
            $posts = array();
            $posts = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $posts;
        }
        
        public function select_cate_post_by_id($id) {
            $sql = self::$connection->prepare("SELECT * FROM post_categories WHERE id= ?");
            $sql->bind_param("i", $id);
            $sql->execute();
            $posts = array();
            $posts = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $posts;
        }
        
        public function select_category_posts() {
            $sql = self::$connection->prepare("
                SELECT pc.id, pc.name, COUNT(p.post_id) AS post_count
                FROM 
                    post_categories pc
                LEFT JOIN 
                    posts p ON pc.id = p.category_id
                GROUP BY 
                    pc.id, pc.name
                ORDER BY 
                    pc.id ASC
            ");
            $sql->execute();
            $posts = array();
            $posts = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $posts;
        }
        
        public function update_cate($name, $cate_post_id) {
            $sql = self::$connection->prepare("UPDATE post_categories SET name = ? WHERE id = ?");
            $sql->bind_param("si", $name, $cate_post_id);
            $sql->execute();
            $posts = array();
            $posts = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $posts;
        }
        
        public function delete_category_posts($cate_post_id) {
            $sql = self::$connection->prepare("DELETE FROM post_categories WHERE id = ?");
            $sql->bind_param("i", $cate_post_id);
            $sql->execute();
            $posts = array();
            $posts = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $posts;
        }
        
        // Post
        public function select_all_posts() {
            $sql = self::$connection->prepare("
                SELECT posts.*, post_categories.name AS category_name
                FROM posts
                JOIN post_categories ON posts.category_id = post_categories.id
            ");
            $sql->execute();
            $posts = array();
            $posts = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $posts;
        }
        
        public function select_post_by_id($post_id) {
            $sql = self::$connection->prepare("SELECT * FROM posts WHERE post_id = ?");
            $sql->bind_param("i", $post_id);
            $sql->execute();
            $posts = array();
            $posts = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $posts;
        }
        
        public function insert_post($category_id, $title, $image, $author, $content) {
            $sql = self::$connection->prepare("
                INSERT INTO posts (category_id, title, image, author, content) 
                VALUES (?, ?, ?, ?, ?)
            ");
            $sql->bind_param("issss", $category_id, $title, $image, $author, $content);
            
            if ($sql->execute()) {
                // Return the ID of the newly inserted post or a success message
                return self::$connection->insert_id; 
            } else {
                // Handle errors (e.g., log the error or throw an exception)
                return "Error: " . $sql->error;
            }
        }
        
        
        public function update_posts($category_id, $title, $image, $content, $post_id) {
            $sql = "UPDATE posts SET category_id = ?, title = ?";
            
            if (!empty($image)) {
                $sql .= ", image = ?";
            }
            
            $sql .= ", content = ? WHERE post_id = ?";
            
            $stmt = self::$connection->prepare($sql);
            
            // Kiểm tra xem câu lệnh chuẩn bị có thành công không
            if ($stmt === false) {
                error_log("Lỗi khi chuẩn bị câu lệnh: " . self::$connection->error);
                return false; // Trả về false nếu có lỗi
            }
        
            // Ràng buộc tham số
            if (!empty($image)) {
                $stmt->bind_param("isssi", $category_id, $title, $image, $content, $post_id);
            } else {
                $stmt->bind_param("issi", $category_id, $title, $content, $post_id);
            }
        
            // Thực thi câu lệnh
            if (!$stmt->execute()) {
                error_log("Lỗi khi thực thi câu lệnh: " . $stmt->error);
                return false; // Trả về false nếu có lỗi
            }
        
            // Không cần gọi get_result() cho câu lệnh UPDATE
            return true; // Trả về true nếu cập nhật thành công
        }
        
        public function delete_post($post_id) {
            $sql = self::$connection->prepare("DELETE FROM posts WHERE post_id = ?");
            
            // Kiểm tra xem câu lệnh chuẩn bị có thành công không
            if ($sql === false) {
                error_log("Lỗi khi chuẩn bị câu lệnh: " . self::$connection->error);
                return false; // Trả về false nếu có lỗi
            }
        
            $sql->bind_param("i", $post_id);
            
            // Thực thi câu lệnh
            if (!$sql->execute()) {
                error_log("Lỗi khi thực thi câu lệnh: " . $sql->error);
                return false; // Trả về false nếu có lỗi
            }
        
            // Trả về true nếu xóa thành công
            return true;
        }
    }
