<?php

    include "db_connection.php";

    if (mysqli_connect_errno()) {
  
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
  
        exit();

    }

    $sql = "SELECT * FROM st_detail WHERE is_deleted='0'";

    $query = mysqli_query($connection,$sql);

    if ($query = mysqli_query($connection,$sql)){

        echo "<table border='1'>";
 
            echo "<tr>";

                echo "<th colspan='15'><center><h1>Student Registration Form Data</h1></center></th>";

            echo "</tr>";

            echo "<tr>"; 
 
                 echo "<th>ID</th>";
                 echo "<th>First Name</th>";
                 echo "<th>Middle Name</th>";
                 echo "<th>Last Name</th>";
                 echo "<th>Age</th>";
                 echo "<th>DOB</th>";
                 echo "<th>Gender</th>";
                 echo "<th>Blood Group</th>";
                 echo "<th>Email ID</th>";
                 echo "<th>Mobile Number</th>";
                 echo "<th>Password</th>";
                 echo "<th>Address</th>";
                 echo "<th>City</th>";
                 echo "<th>Pincode</th>";
                 echo "<th>Action</th>";

            echo "</tr>"; 
 
        while ($row = mysqli_fetch_array($query)) {
       
            echo "<tr>"; 
 
                 echo "<td>{$row['st_id']}</td>";
                 echo "<td>{$row['st_fname']}</td>";
                 echo "<td>{$row['st_mname']}</td>";
                 echo "<td>{$row['st_lname']}</td>";
                 echo "<td>{$row['st_age']}</td>";
                 echo "<td>{$row['st_dob']}</td>";
                 echo "<td>{$row['st_gender']}</td>";
                 echo "<td>{$row['st_bloodgroup']}</td>";
                 echo "<td>{$row['st_email']}</td>";
                 echo "<td>{$row['st_mobile']}</td>";
                 echo "<td>{$row['st_password']}</td>";
                 echo "<td>{$row['st_address']}</td>";
                 echo "<td>{$row['st_city']}</td>";
                 echo "<td>{$row['st_pincode']}</td>";
                 echo "<td>"."<a href='update.php?updateid={$row['st_id']}'>Update</a>".
                 " •••••••••• "."<a href='delete.php?deleteid={$row['st_id']}'>Delete</a>"."</td>";

            echo "</tr>";            
                         
        }

        echo "<tr>";

            echo "<td colspan='15'><center><a href='add.php'>Add</a></center></td>";

        echo "</tr>";
    
        echo "</table>";

        mysqli_free_result($query);
     
    }

    mysqli_close($connection);
    
?>