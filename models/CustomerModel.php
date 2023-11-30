<?php
    class CustomerModel {

        public function select_users() {
            $sql = "SELECT username, full_name, email, phone FROM users";

            return pdo_query($sql);
        }

        public function user_insert($username, $password, $full_name, $image, $email, $phone, $address) {
            $sql = "INSERT INTO users(username, password, full_name, image, email, phone, address) VALUES(?,?,?,?,?,?,?)";

            pdo_execute($sql, $username, $password, $full_name, $image, $email, $phone, $address);
        }

        public function get_user_by_username($username) {
            $sql = "SELECT * FROM users WHERE username = ?";

            return pdo_query($sql, $username);
        }

        public function update_user($full_name, $address, $phone, $image, $user_id) {
            $sql = "UPDATE users SET 
            full_name = '".$full_name."',";

            if ($image != '') {
                $sql .= " image = '".$image."',";
            }
    
            $sql .= " address = '".$address."', phone = '".$phone."'
                    WHERE user_id = ".$user_id;

            

            pdo_execute($sql);
        }
    }

    $CustomerModel = new CustomerModel();
?>