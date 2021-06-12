<?php
    include "db_connection.php";
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    // First we check if the email and code exists...
    if (isset($_GET['st_email'], $_GET['uniqid'])){
        $active_email = $_GET['st_email'];
        $active_code = $_GET['uniqid'];
        $active_sql = "SELECT st_email, activation_code FROM st_detail WHERE st_email='{$active_email}' AND activation_code='{$active_code}'";
        $active_query = mysqli_query($connection, $active_sql);
        $row = mysqli_fetch_array($active_query);
        if ($active_code == $row['activation_code']){
            $new_code = 'activated';
            $update_sql = "UPDATE st_detail SET activation_code = '{$new_code}' WHERE st_email = '{$active_email}' AND activation_code = '{$active_code}'";
            $update_query = mysqli_query($connection, $update_sql);
            if ($update_query){
                header("Location: login.php?active_msg_res=success");
            }
        }
    }
?>