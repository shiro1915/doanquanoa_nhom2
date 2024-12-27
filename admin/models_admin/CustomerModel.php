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
        
        public function select_all_users() {
            $sql = self::$connection->prepare("SELECT * FROM users ORDER BY user_id DESC");
            $sql->execute();
            $users = array();
            $users = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $users;
        }
        
        public function user_insert($username, $password, $full_name, $image, $email, $phone, $address, $role) {
            $sql = self::$connection->prepare("
                INSERT INTO users (username, password, full_name, image, email, phone, address, role) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)
            ");
            $sql->bind_param("ssssssss", $username, $password, $full_name, $image, $email, $phone, $address, $role);
        
            if ($sql->execute()) {
                // Return the ID of the newly inserted user or a success indicator
                return self::$connection->insert_id;
            } else {
                // Return an error message or false if something went wrong
                return "Error: " . $sql->error;
            }
        }
        
        public function get_user_admin($username) {
            $sql = self::$connection->prepare("SELECT * FROM users WHERE username = ? AND role = 1");
            $sql->bind_param("s", $username);
            $sql->execute();
            $users = array();
            $users = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $users;
        }
    }        