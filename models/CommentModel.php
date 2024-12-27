<?php
    class CommentModel extends Db{
        public function getAllComment(){
            $sql = self::$connection->prepare("SELECT * FROM `comments`");
            $sql->execute();
            $comments = array();
            $comments = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $comments;
        }
    
        public function insert_comment($user_id, $product_id, $content) {
            $sql = self::$connection->prepare("INSERT INTO comments(user_id, product_id, content) VALUES (?,?,?)");
            $sql->bind_param("iis", $user_id, $product_id, $content);
            
            // Kiểm tra câu lệnh có thành công không
            if ($sql->execute()) {
                return true;  // Nếu thành công, trả về true
            } else {
                return false;  // Nếu thất bại, trả về false
            }
        }
        
        
        public function select_comments_by_id($product_id){
            $sql = self::$connection->prepare("
                SELECT *
                FROM comments
                JOIN users ON comments.user_id = users.user_id
                WHERE comments.product_id = ? AND status = 1
                ORDER BY comments.date DESC
            ");
            $sql->bind_param("i", $product_id);
            $sql->execute();
            $comments = array();
            $comments = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $comments;
        }
    }