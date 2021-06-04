<?php

    include "db_connection.php";
    
    if (mysqli_connect_errno()) {
  
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
  
        exit();

    }
    
    $deleteid = $_GET['deleteid'];
    
    $deletesql = "UPDATE st_detail SET is_deleted='1' WHERE st_id='{$deleteid}'";

    $deletequery = mysqli_query($connection, $deletesql);

    if ($deletequery) {
   
         header("Location: display.php");

    }

?>
