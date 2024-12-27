<?php
    class AddressModel extends Db{
        public function getAllAdd(){
            $sql = self::$connection->prepare("SELECT * FROM `address`");
            $sql->execute();
            $Add = array();
            $Add = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $Add;
        }
        public function select_address_user($user_id) {
            $sql = self::$connection->prepare("SELECT * FROM address WHERE user_id = ?");
            $sql->bind_param("i", $user_id);
            $sql->execute();
            
            // Lấy dữ liệu kết quả
            $add = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        
            // Kiểm tra xem có dữ liệu không
            if (!empty($add)) {
                return $add; // Trả về mảng dữ liệu nếu có
            } else {
                return []; // Trả về mảng rỗng nếu không có dữ liệu
            }
        }
        
        
        public function insert_address($user_id, $address) {
            $sql = self::$connection->prepare("INSERT INTO address (user_id, address) VALUES (?,?)");
            $sql->bind_param("is", $user_id, $address);
            $sql->execute();
            $add = array();
            $add = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $add;
        }
        
        public function delete_address($id) {
            $sql = self::$connection->prepare("DELETE FROM address WHERE id = ?");
            $sql->bind_param("i", $id);
            $sql->execute();
            $add = array();
            $add = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $add;
        }
    }        