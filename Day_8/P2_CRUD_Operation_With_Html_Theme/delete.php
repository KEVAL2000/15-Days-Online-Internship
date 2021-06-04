<?php

    include "db_connection.php";
    
    if (mysqli_connect_errno()) {
  
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
  
        exit();

    }
    
    $delete_id = $_GET['delete_id'];
    
    $delete_sql = "UPDATE st_detail SET is_deleted='1' WHERE st_id='{$delete_id}'";

    $delete_query = mysqli_query($connection, $delete_sql);

    if ($delete_query) {
   
         header("Location: index.php");

    }

?>