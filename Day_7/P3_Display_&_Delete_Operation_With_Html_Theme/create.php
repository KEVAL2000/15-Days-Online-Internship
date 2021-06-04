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

        $query = mysqli_query($connection,$sql) 
                 or die(mysqli_error($connection));
 
        if($query){
 
            header("Location: index.php");

        }
    
    }    
    
?>

<!doctype html>
<html lang="en" class="h-100">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <title>List of Student</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <style>
        .field-icon {
            float: right;
            margin-left: -25px;
            margin-right: 10px;
            margin-top: -25px;
            position: relative;
            z-index: 2;
         }
     </style>
  </head>
  <body class="d-flex flex-column h-100">
    
    <div class="container pt-4 pb-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
            <a class="navbar-brand" href="#">Student Registration Form Data</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="create.php">Create</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
        
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1>Create New Student</h1>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="st_fname">First Name</label>
                    <input type="text" class="form-control" name="st_fname" placeholder="Enter First Name..." required/>
                </div>
                <div class="form-group">
                    <label for="st_mname">Middle Name</label>
                    <input type="text" class="form-control" name="st_mname" placeholder="Enter Middle Name..." required/>
                </div>
                <div class="form-group">
                    <label for="st_lname">Last Name</label>
                    <input type="text" class="form-control" name="st_lname" placeholder="Enter Last Name..." required/>
                </div>
                <div class="form-group">
                    <label for="st_age">Age</label>
                    <input type="number" class="form-control" name="st_age" placeholder="Enter Age..." required/>
                </div>
                <div class="form-group">
                    <label for="name">Date Of Birth</label>
                    <input type="date" class="form-control" value="2021-01-01" name="st_dob" required/>
                </div>
                <div class="form-group">
                    <label for="st_gender">Gender</label>                 
                        <select class="form-control" name="st_gender" required>
                            <option disabled="disabled" selected="selected">Choose option</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>              
                </div>
                <div class="form-group">
                    <label for="st_bloodgroup">Blood Group</label>               
                        <select class="form-control" name="st_bloodgroup" required>
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
                </div>
                <div class="form-group">
                    <label for="st_email">Email ID</label>
                    <input type="email" class="form-control" name="st_email" placeholder="Enter Email ID..." required/>
                </div>
                <div class="form-group">
                    <label for="st_mobile">Mobile Number</label>
                    <input type="text" class="form-control" name="st_mobile" placeholder="Enter Mobile Number..." required/>
                </div>
                
                <div class="form-group">
                    <label for="st_password">Password</label>              
                    <input id="password-field" type="password" class="form-control" name="st_password" placeholder="Enter Password..." required/>
                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>         
                </div>
        
                <div class="form-group">
                    <label for="st_address">Address</label>
                    <input type="text" class="form-control" name="st_address" placeholder="Enter Address..." required/>
                </div>
                <div class="form-group">
                    <label for="st_city">City</label>              
                          <select class="form-control" name="st_city" required>
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
                </div>
                <div class="form-group">
                    <label for="st_pincode">Pincode</label>
                    <input type="number" class="form-control" name="st_pincode" placeholder="Enter Pincode..." required/>
                </div>             
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <button type="reset" name="reset" class="btn btn-primary">Reset</button>
            </form>
        </div>
    </main>
      
    <footer class="footer mt-auto py-3">
        <div class="container pb-5">
            <hr>
            <span class="text-muted">
                    Copyright &copy; 2021 | <a href="https://www.github.com/keval2000/">Keval</a>
            </span>
        </div>
    </footer>

    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
    <script>
         $(".toggle-password").click(function() {
              $(this).toggleClass("fa-eye fa-eye-slash");
              var input = $($(this).attr("toggle"));
              if (input.attr("type") == "password") {
                   input.attr("type", "text");
              } else {
                   input.attr("type", "password");
              }
         });
    </script>
    
  </body>
</html>