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

    }

    $CustomerModel = new CustomerModel();
?>