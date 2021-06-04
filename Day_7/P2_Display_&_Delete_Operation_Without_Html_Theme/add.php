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
 
            header("Location: display.php");

        }
    
    }
       
?>

<html>
    <head>
        <title>List Of Student</title>
    </head>
    <body>
        <center><h1>Student Registration Form Data</h1></center>
        <h2 style="text-align: left;">Create New Student</h2>
        <form method="post">
             First Name : <input type="text" name="st_fname" placeholder="Enter First Name..." required/>
             <br>
             <br>
             Middle Name : <input type="text" name="st_mname" placeholder="Enter Middle Name..." required/>
             <br>
             <br>
             Last Name : <input type="text" name="st_lname" placeholder="Enter Last Name..." required/>
             <br>
             <br>
             Age : <input type="number" name="st_age" placeholder="Enter Age..."required/>
             <br>
             <br>
             Date Of Birth : <input type="date" value="2021-01-01" name="st_dob" required/>
             <br>
             <br>
             Gender : 
             <select name="st_gender" required>
                 <option disabled="disabled" selected="selected">Choose option</option>
                 <option value="Male">Male</option>
                 <option value="Female">Female</option>
             </select>
             <br>
             <br>
             Blood Group : 
             <select name="st_bloodgroup" required>
                 <option disabled="disabled" selected="selected">Choose option</option>
                 <option>A+</option>
                 <option>A-</option>
                 <option>B+</option>
                 <option>B-</option>
                 <option>O+</option>
                 <option>O-</option>
                 <option>AB+</option>
                 <option>AB-</option>
             </select>
             <br>
             <br>
             Email ID : <input type="email" name="st_email" placeholder="Enter Email ID..." required/>
             <br>
             <br>
             Mobile Number : <input type="number" name="st_mobile" placeholder="Enter Mobile Number..." required/>
             <br>
             <br>
             Password : <input type="password" name="st_password" placeholder="Enter Password..." required/>
             <br>
             <br>
             Address : <input type="text" name="st_address" placeholder="Enter Address..." required/>
             <br>
             <br>
             City : 
             <select name="st_city" required>
                 <option disabled="disabled" selected="selected">Choose option</option>
                 <option>Ahmedabad</option>
                 <option>Amreli</option>
                 <option>Anand</option>
                 <option>Aravalli</option>
                 <option>Banaskantha</option>
                 <option>Bharuch</option>
                 <option>Bhavnagar</option>
                 <option>Dahod</option>
                 <option>Dang</option>	
                 <option>Gandhinagar</option>
                 <option>Jamnagar</option>
                 <option>Junagadh</option>
                 <option>Kutch</option>
                 <option>Kheda</option>
                 <option>Mehsana</option>
                 <option>Navsari</option>
                 <option>Narmada</option>
                 <option>Patan</option>
                 <option>Panchmahal</option>
                 <option>Porbandar</option>
                 <option>Rajkot</option>
                 <option>Sabarkantha</option>
                 <option>Surendranagar</option>
                 <option>Surat</option>
                 <option>Tapi</option>
                 <option>Vadodara</option>
                 <option>Valsad</option>
             </select>
             <br>
             <br>
             Pincode : <input type="number" name="st_pincode" placeholder="Enter Pincode..."/>
             <br>
             <br>
             <input type="submit" name="submit"/>
             <input type="reset" name="reset"/>
        </form>
    </body>
</html>