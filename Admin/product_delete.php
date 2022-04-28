<?php
    session_start();

    include "includes/connection/db.php";

    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        if(isset($_SESSION['product_id'])) {
            $product_id = $_SESSION['product_id'];
            $sql_query = "DELETE FROM products WHERE product_id='$product_id'";

            mysqli_query($link, $sql_query);
            header("Location: products.php");
        }
    }
?>