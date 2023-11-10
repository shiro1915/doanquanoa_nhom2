<?php
    function get_products() {
        $sql = "SELECT * FROM products";

        return pdo_query($sql);
    }

?>