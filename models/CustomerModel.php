<?php
    class CustomerModel extends Db{
        public function getAllCustomer(){
            $sql = self::$connection->prepare("SELECT * FROM `users`");
            $sql->execute();
            $users = array();
            $users = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $users;
        }
    

        public function select_users() {
            $sql = self::$connection->prepare("SELECT username, full_name, email, phone FROM users");
            $sql->execute();
            $users = array();
            $users = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $users;
        }
        
        public function select_email_in_users($email) {
            $sql = self::$connection->prepare("SELECT * FROM users WHERE email = ?");
            $sql->bind_param("s", $email);
            $sql->execute();
            $users = array();
            $users = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $users;
        }
        
        public function user_insert($username, $password, $full_name, $image, $email, $phone, $address) {
            $sql = self::$connection->prepare("INSERT INTO users(username, password, full_name, image, email, phone, address) VALUES (?, ?, ?, ?, ?, ?, ?)");
            if (!$sql) {
                die("SQL Error: " . self::$connection->error);
            }
            $sql->bind_param("sssssss", $username, $password, $full_name, $image, $email, $phone, $address);
            $sql->execute();
        }
        
        
        
        
        public function get_user_by_username($username) {
            $sql = self::$connection->prepare("SELECT * FROM users WHERE username = ?");
            $sql->bind_param("s", $username);
            $sql->execute();
            $users = array();
            $users = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $users;
        }
        
        public function update_password($new_password, $user_id) {
            $sql = self::$connection->prepare("UPDATE users SET password = ? WHERE user_id = ?");
            $sql->bind_param("si", $new_password, $user_id);
            $sql->execute();
            $users = array();
            $users = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $users;
        }
        
        public function reset_password($new_password, $email) {
            $sql = self::$connection->prepare("UPDATE users SET password = ? WHERE email = ?");
            $sql->bind_param("ss", $new_password, $email);
            $sql->execute();
            $users = array();
            $users = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $users;
        }
        public function update_user($full_name, $address, $phone, $image, $user_id) {
            // Chuẩn bị câu lệnh SQL
            $sql = self::$connection->prepare("UPDATE users SET full_name = ?, image = ?, address = ?, phone = ? WHERE user_id = ?");
            
            // Nếu có ảnh, bind tham số
            if ($image != '') {
                $sql->bind_param("ssssi", $full_name, $image, $address, $phone, $user_id);
            } else {
                // Nếu không có ảnh, bind tham số mà không cần phần ảnh
                $sql->bind_param("sssi", $full_name, $address, $phone, $user_id);
            }
        
            // Thực thi câu lệnh
            $result = $sql->execute();
        
            // Kiểm tra kết quả thực thi
            if ($result) {
                // Nếu cập nhật thành công, trả về true hoặc thông báo thành công
                return true;
            } else {
                // Nếu có lỗi trong quá trình thực thi, trả về lỗi
                return 'Lỗi cập nhật: ' . self::$connection->error;
            }
        }
        
    }        