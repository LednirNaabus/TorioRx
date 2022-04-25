<?php

    require_once "includes/connection/db.php";

    $username = $password = $email = "";
    $username_err = $password_err = $email_err = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        if(empty(trim($_POST['username']))) {
            $username_err = "Please enter a valid username.";
        } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST['username']))) {
            $username_err = "Username should contain numbers and letters.";
        } else {
            $sql = "SELECT admin_id FROM admin WHERE admin_username = ?";

            if($stmt = mysqli_prepare($link, $sql)) {
                mysqli_stmt_bind_param($stmt, "s", $param_username);
                $param_username = trim($_POST['username']);

                if(mysqli_stmt_execute($stmt)) {
                    mysqli_stmt_store_result($stmt);
                    if(mysqli_stmt_num_rows($stmt) == 1) {
                        $username_err = "Username already taken.";
                    } else {
                        $username = trim($_POST['username']);
                    }
                } else {
                    echo "ERROR.";
                }
                mysqli_stmt_close($stmt);
            }
        }

        if(empty(trim($_POST['email']))) {
            $email_err = "Please enter your email.";
        } else {
            $sql = "SELECT admin_id FROM admin WHERE admin_email = ?";

            if($stmt = mysqli_prepare($link, $sql)) {
                mysqli_stmt_bind_param($stmt, "s", $param_email);
                $param_email = trim($_POST['email']);

                if(mysqli_stmt_execute($stmt)) {
                    mysqli_stmt_store_result($stmt);
                    if(mysqli_stmt_num_rows($stmt) == 1) {
                        $email_err = "Email already taken.";
                    } else {
                        $email = trim($_POST['email']);
                    }
                } else {
                    echo "ERROR.";
                }
                mysqli_stmt_close($stmt);
            }
        }

        if(empty(trim($_POST['pswd']))) {
            $password_err = "Please enter your password.";
        } elseif(strlen(trim($_POST['pswd']) < 7)) {
            $password_err = "Password must be atleast 7 characters.";
        } else {
            $password = trim($_POST['pswd']);
        }

        if(empty($username_err) && empty($email_err) && empty($password_err)) {
            $sql = "INSERT INTO admin (admin_username, admin_password, admin_email) VALUES (?,?,?)";

            if($stmt = mysqli_prepare($link, $sql)) {
                mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_password, $param_email);
                $param_username = $username;
                $param_password = $password;
                $param_email = $email;

                if(mysqli_stmt_execute($stmt)) {
                    header("Location: registerlogin.php");
                } else {
                    echo "ERROR.";
                }
                mysqli_stmt_close($stmt);
            }
        }
        mysqli_close($link);
    }

?>