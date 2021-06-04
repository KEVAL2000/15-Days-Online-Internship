<?php

    include "db_connection.php";
    
    if (mysqli_connect_errno()) {
  
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
  
        exit();

    }

    if(isset($_POST['submit'])){

        $st_fname = $_POST["st_fname"];
        $st_mname = $_POST["st_mname"];
        $st_lname = $_POST["st_lname"];
        $st_age = $_POST["st_age"];
        $st_dob = $_POST["st_dob"];
        $st_gender = $_POST["st_gender"];
        $st_bloodgroup = $_POST["st_bloodgroup"];
        $st_email = $_POST["st_email"];
        $st_mobile = $_POST["st_mobile"];
        $st_password = $_POST["st_password"];
        $st_address = $_POST["st_address"];
        $st_city = $_POST["st_city"];
        $st_pincode = $_POST["st_pincode"];

        $sql = "INSERT INTO st_detail(st_fname,
               st_mname,st_lname,st_age,
               st_dob,st_gender,st_bloodgroup,
               st_email,st_mobile,st_password,
               st_address,st_city,st_pincode) 
               VALUES('$st_fname','$st_mname',
               '$st_lname','$st_age','$st_dob',
               '$st_gender','$st_bloodgroup',
               '$st_email','$st_mobile','$st_password',
               '$st_address','$st_city','$st_pincode')";

        $query = mysqli_query($connection,$sql) or die(mysqli_error($connection));
 
        if($query){
 
            header("Location: index.html");

        }
    
    }    
    
?>
