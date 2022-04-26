<?php
    include "includes/connection/db.php";
    session_start();

    $email = ($_POST['email']);
    $password = ($_POST['pswd']);

    $sql = "SELECT * FROM customers WHERE customer_email = '$email'";

    $results = mysqli_query($link, $sql);
    $exists = mysqli_num_rows($results);
 
    $table_email = "";
    $table_passwd = "";
    $user_id = "";

    if($results != null) {
        while($row = mysqli_fetch_assoc($results)) { 
            $table_email = $row['customer_email'];
            $table_passwd = $row['customer_password'];
            $user_id = $row['customer_id'];
        }

        if(($email == $table_email) && ($password == $table_passwd)) {
            $_SESSION['loggedin'] = true; 
            $_SESSION['user_email'] = $email;
            $_SESSION['user_id'] = $user_id;
            header("location: user-dashboard.php");
        } else {
            Print '<script>alert("Incorrect email or password!");</script>';
            Print '<script>window.location.assign("customerlogin.php");</script>';
        }
    }
?>