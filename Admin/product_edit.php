<?php
    session_start();
?>

<?php
    include "includes/connection/db.php";
    if(mysqli_connect_errno()) {
        die("Failed to connect with MySQL: " . mysqli_connect_error());
    }
    
    $edit_prod_id = $_POST['product_edit'];
        
    $prod_name = $_POST['prod_name'];
    $prod_price = $_POST['prod_price'];
    $prod_brief = $_POST['prod_brief_info'];
    $prod_desc = $_POST['prod_desc'];
    $prod_contains = $_POST['prod_contains'];
    $prod_presc = $_POST['prod_presc'];

    $sql_query = "UPDATE products SET product_name = '$prod_name', product_briefinfo = '$prod_brief', product_description = '$prod_desc', product_price = '$prod_price', product_contains = '$prod_contains', product_prescription = '$prod_presc' WHERE product_id = '$edit_prod_id'";

    if(mysqli_query($link, $sql_query)) {
        ob_start();
        header("Location: viewproduct.php");
        ob_end_flush();
    } else {
        echo "Error: " . $sql_query . mysqli_error($link);
    }
?>