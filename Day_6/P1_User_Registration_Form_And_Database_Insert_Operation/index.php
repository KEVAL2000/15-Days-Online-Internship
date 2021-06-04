<?php

    include "db_connection.php";
    
    if (mysqli_connect_errno()) {
  
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
  
        exit();

    }
    
    if(isset($_POST['submit'])){

        $fname = $_POST["fname"];
        $mname = $_POST["mname"];
        $lname = $_POST["lname"];
        $age = $_POST["age"];
        $gender = $_POST["gender"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];

        $sql = "INSERT INTO user_detail(user_fname,
               user_mname,user_lname,user_age,
               user_gender,user_email,user_mobile) 
               VALUES('$fname','$mname','$lname',
               '$age','$gender','$email','$mobile')";

        $query = mysqli_query($connection,$sql) 
                 or die(mysqli_error($connection));
 
    }
    
?>

<html>
    <head>
        <title>User Registration Form</title>
    </head>
    <body>
        <center><h1>User Registration Form</h1></center>
        <form method="post">
             First Name : <input type="text" name="fname" placeholder="Enter First Name..." required/>
             <br>
             <br>
             Middle Name : <input type="text" name="mname" placeholder="Enter Middle Name..." required/>
             <br>
             <br>
             Last Name : <input type="text" name="lname" placeholder="Enter Last Name..." required/>
             <br>
             <br>
             Age : <input type="number" name="age" placeholder="Enter Age..."required/>
             <br>
             <br>
             Gender : 
             <select name="gender" required>
                 <option disabled="disabled" selected="selected">Choose option</option>
                 <option value="Male">Male</option>
                 <option value="Female">Female</option>
             </select>
             <br>
             <br>
             Email ID : <input type="email" name="email" placeholder="Enter Email ID..." required/>
             <br>
             <br>
             Mobile Number : <input type="number" name="mobile" placeholder="Enter Mobile Number..." required/>
             <br>
             <br>
             <input type="submit" name="submit"/>
             <input type="reset" name="reset"/>
        </form>
    </body>
</html>