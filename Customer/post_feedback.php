<?php
    session_start();

    include 'includes/connection/db.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_SESSION['user_id'])) {
            $customer_id = $_SESSION['user_id'];
            $feedback = $_POST['feedback_details'];

            $sql_query = "INSERT INTO feedbacks (customer_id, feedback_details) VALUES('$customer_id', '$feedback')";

            if(mysqli_query($link, $sql_query)) {
                ob_start();
                header("Location: user-contact.php");
                ob_end_flush();
            } else {
                echo "ERROR: " . $sql_query . mysqli_error($link);
            }

        } else {
            header("Location: registerlogin.php");
        }
    }
?>