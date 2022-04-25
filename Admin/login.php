<?php
    include "includes/connection/db.php";
    session_start();

    $email = ($_POST['email']);
    $password = ($_POST['pswd']);

    $sql = "SELECT * FROM admin WHERE admin_email = '$email'";

    $results = mysqli_query($link, $sql);
    $exists = mysqli_num_rows($results);

    $table_username = "";
    $table_email = "";
    $table_passwd = "";
    $user_id = "";

    if($results != null) {
        while($row = mysqli_fetch_assoc($results)) {
            $table_username = $row['admin_username'];
            $table_email = $row['admin_email'];
            $table_passwd = $row['admin_password'];
            $user_id = $row['admin_id'];
        }

        if(($email == $table_email) && ($password == $table_passwd)) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $table_username;
            $_SESSION['user_email'] = $email;
            $_SESSION['user_id'] = $user_id;
            header("location: index.php");
        } else {
            Print '<script>alert("Incorrect email or password!");</script>';
            Print '<script>window.location.assign("registerlogin.php");</script>';
        }
    }
?>