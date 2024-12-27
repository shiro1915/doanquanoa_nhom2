<?php
    class WarehousemModel extends Db{
        
        public function getAllWarehouse(){
            $sql = self::$connection->prepare("SELECT * FROM `warehouse`");
            $sql->execute();
            $wares = array();
            $wares = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $wares;
        }

        public function select_all_warehouse() {
            $sql = self::$connection->prepare("SELECT * FROM warehouse ORDER BY id DESC");
            $sql->execute();
            $wares = array();
            $wares = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $wares;
        }
        
        public function insert_warehouse($name, $price, $quantity) {
            $sql = self::$connection->prepare("
                INSERT INTO warehouse (name, price, quantity) 
                VALUES (?, ?, ?)
            ");
            $sql->bind_param("sdi", $name, $price, $quantity);
        
            if ($sql->execute()) {
                // Return the ID of the newly inserted warehouse entry
                return self::$connection->insert_id;
            } else {
                // Return an error message or handle the error appropriately
                return "Error: " . $sql->error;
            }
        }
        
        public function delete_warehouse($id) {
            $sql = self::$connection->prepare("
                DELETE FROM warehouse WHERE id = ?
            ");
            $sql->bind_param("i", $id);
        
            if ($sql->execute()) {
                // Return a success message or true if the delete was successful
                return true;
            } else {
                // Return an error message or false if something went wrong
                return "Error: " . $sql->error;
            }
        }
    }