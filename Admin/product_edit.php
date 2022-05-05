<?php
    session_start();
?>

<?php
    include "includes/connection/db.php";
    if(mysqli_connect_errno()) {
        die("Failed to connect with MySQL: " . mysqli_connect_error());
    }
    
    $edit_prod_id = $_POST['product_edit'];
    $prod_img = $_FILES['prod_img']['tmp_name'];
    $prod_name = $_POST['prod_name'];
    $prod_price = $_POST['prod_price'];
    $prod_brief = $_POST['prod_brief_info'];
    $prod_desc = $_POST['prod_desc'];
    $prod_contains = $_POST['prod_contains'];
    $prod_presc = $_POST['prod_presc'];

    // if($prod_img != null) {
    //     $image_data = addslashes(file_get_contents($prod_img));
    //     $query = "UPDATE products SET product_name = '$prod_name', product_image = '$prod_img', product_briefinfo = '$prod_brief', product_description = '$prod_desc', product_price = '$prod_price', product_contains = '$prod_contains', product_prescription = '$prod_presc' WHERE product_id = '$edit_prod_id'";
    // } else {
    //     echo "<script type ='text/JavaScript'>";
    //     echo "alert('Upload must be an image')";
    //     echo "</script>";
    //     $query = "UPDATE products SET product_name = '$prod_name', product_briefinfo = '$prod_brief', product_description = '$prod_desc', product_price = '$prod_price', product_contains = '$prod_contains', product_prescription = '$prod_presc' WHERE product_id = '$edit_prod_id'";
    // }

    // if(mysqli_query($link, $query)) {
    //     ob_start();
    //     header("Location: products.php");
    //     ob_end_flush();
    // } else {
    //     echo "Error: " . $query . mysqli_error($link);
    // }
    if($prod_img != null) {
        $image_data = mysqli_real_escape_string($link, file_get_contents($prod_img));
        $image_type = mysqli_real_escape_string($link, $_FILES['prod_img']['type']);
        if(substr($image_type, 0, 5) == "image") {
            $query = "UPDATE products SET product_name = '$prod_name', product_image = '$image_data', product_briefinfo = '$prod_brief', product_description = '$prod_desc', product_price = '$prod_price', product_contains = '$prod_contains', product_prescription = '$prod_presc' WHERE product_id = '$edit_prod_id'";
        } else {
            echo "<script type ='text/JavaScript'>";
            echo "alert('Upload must be an image')";
            echo "</script>";
        }
    } else {
        $query = "UPDATE products SET product_name = '$prod_name', product_briefinfo = '$prod_brief', product_description = '$prod_desc', product_price = '$prod_price', product_contains = '$prod_contains', product_prescription = '$prod_presc' WHERE product_id = '$edit_prod_id'";
    }

    $sql = mysqli_query($link, $query);
    if($sql) {
        echo "<script type ='text/JavaScript'>";
        echo "alert('Product updated.')";
        echo "</script>";
        unset($_POST);
        echo "<script>window.location.href='products.php';</script>";
    } else {
        echo "<script type ='text/JavaScript'>";
        echo "alert('Profile failed to update')";
        echo "</script>";
        unset($_POST);
    }
?>