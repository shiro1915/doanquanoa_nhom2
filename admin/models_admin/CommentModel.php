<?php
    class CommentModel extends Db{
        public function getAllComment(){
            $sql = self::$connection->prepare("SELECT * FROM `comments`");
            $sql->execute();
            $comments = array();
            $comments = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $comments;
        }
        public function select_all_comments() {
            $sql = self::$connection->prepare("
                SELECT
                    products.name AS product_name,
                    users.full_name,
                    users.image AS user_image,
                    comments.comment_id,
                    comments.content,
                    comments.date AS comment_date,
                    comments.status
                FROM
                    comments
                JOIN
                    users ON comments.user_id = users.user_id
                JOIN
                    products ON comments.product_id = products.product_id
                ORDER BY comments.comment_id DESC
            ");
            $sql->execute();
            $comments = array();
            $comments = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $comments;
        }
        
        public function select_comment_by_id($comment_id) {
            $sql = self::$connection->prepare("
                SELECT
                    products.name AS product_name,
                    users.full_name,
                    users.image AS user_image,
                    comments.comment_id,
                    comments.content,
                    comments.date AS comment_date,
                    comments.status
                FROM
                    comments
                JOIN
                    users ON comments.user_id = users.user_id
                JOIN
                    products ON comments.product_id = products.product_id
                WHERE comments.comment_id = ?
            ");
            $sql->bind_param("i", $comment_id);
            $sql->execute();
            $comments = array();
            $comments = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $comments;
        }
        
        public function update_status_comment($status, $comment_id) {
            $sql = self::$connection->prepare("UPDATE comments SET status = ? WHERE comment_id = ?");
            $sql->bind_param("ii", $status, $comment_id);
            $sql->execute();
            $comments = array();
            $comments = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $comments;
        }
        
        public function delete_comment($comment_id) {
            $sql = self::$connection->prepare("DELETE FROM comments WHERE comment_id = ?");
            $sql->bind_param("i", $comment_id);
            $sql->execute();
            $comments = array();
            $comments = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $comments;
        }
        // public function getCommentById($id) {
        //     // Kiểm tra kết nối
        //     if (self::$connection->connect_error) {
        //         die("Kết nối thất bại: " . self::$connection->connect_error);
        //     }
        
        //     // Chuẩn bị câu lệnh SQL
        //     $sql = self::$connection->prepare("SELECT * FROM comments WHERE comment_id =  ?");
            
        //     // Kiểm tra nếu prepare không thành công
        //     if ($sql === false) {
        //         die("Lỗi trong câu lệnh SQL: " . self::$connection->error);
        //     }
        
        //     // Liên kết tham số
        //     $sql->bind_param("i", $id);
            
        //     // Thực thi câu lệnh
        //     $sql->execute();
            
        //     // Trả về kết quả
        //     return $sql->get_result()->fetch_object();
        // }
        public function getCommentById($id) {
            $sql = self::$connection->prepare("SELECT * FROM comments WHERE id = ?");
            $sql->bind_param("i", $id);
            $sql->execute();
            return $sql->get_result()->fetch_object();
        }
    }