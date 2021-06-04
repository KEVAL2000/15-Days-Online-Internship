<?php

    include "db_connection.php";

    if (mysqli_connect_errno()) {
  
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
  
        exit();

    }

    $sql = "SELECT * FROM st_detail";

    $query = mysqli_query($connection,$sql);

    if ($query = mysqli_query($connection,$sql)){
 
        while ($row = mysqli_fetch_array($query)){
       
             echo "<center><h1>Fetch Record Using mysqli_fetch_array() Function</h1></center>";

             echo "<h5>Print Using print_r() Function</h5>";
             
             echo "<pre>";

             print_r($row);

             echo "</pre>";

             echo "<h5>Print Using Numerical Array</h5>";

             echo $row[0]."<br/>".$row[1]."<br/>"
             .$row[2]."<br/>".$row[3]."<br/>".$row[4]
             ."<br/>".$row[5]."<br/>".$row[6]."<br/>"
             .$row[7]."<br/>".$row[8]."<br/>".$row[9]
             ."<br/>".$row[10]."<br/>".$row[11]."<br/>"
             .$row[12]."<br/>".$row[13];
  
             echo "<h5>Print Using Associative Array</h5>";

             echo $row['st_id']."<br/>".$row['st_fname']
             ."<br/>".$row['st_mname']."<br/>"
             .$row['st_lname']."<br/>".$row['st_age']
             ."<br/>".$row['st_dob']."<br/>"
             .$row['st_gender']."<br/>".$row['st_bloodgroup']
             ."<br/>".$row['st_email']."<br/>"
             .$row['st_mobile']."<br/>".$row['st_password']
             ."<br/>".$row['st_address']."<br/>"
             .$row['st_city']."<br/>".$row['st_pincode'];

        }

        mysqli_free_result($query);
     
    }

    mysqli_close($connection);
    
?>