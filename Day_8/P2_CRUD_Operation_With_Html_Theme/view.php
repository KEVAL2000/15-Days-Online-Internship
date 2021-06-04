<?php

    include "db_connection.php";
    
    if (mysqli_connect_errno()) {
  
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
  
        exit();

    }

    $view_id = $_GET['view_id'];

    $view_sql = "SELECT * FROM st_detail WHERE st_id='{$view_id}'";

    $view_query = mysqli_query($connection,$view_sql);
   
    $row = mysqli_fetch_array($view_query);

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

    <title>List of Student</title>
   
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
                    <li class="nav-item">
                        <a class="nav-link" href="create.php">Create</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
        
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1>View Student Detail</h1>
            <label class="form-control"><b>First Name : </b><?php echo $row['st_fname']; ?></label>
            <label class="form-control"><b>Middle Name : </b><?php echo $row['st_mname']; ?></label>
            <label class="form-control"><b>Last Name : </b><?php echo $row['st_lname']; ?></label>
            <label class="form-control"><b>Age : </b><?php echo $row['st_age']; ?></label>
            <label class="form-control"><b>Date Of Birth : </b><?php echo $row['st_dob']; ?></label>
            <label class="form-control"><b>Gender : </b><?php echo $row['st_gender']; ?></label>
            <label class="form-control"><b>Blood Group : </b><?php echo $row['st_bloodgroup']; ?></label>
            <label class="form-control"><b>Email ID : </b><?php echo $row['st_email']; ?></label>
            <label class="form-control"><b>Mobile Number : </b><?php echo $row['st_mobile']; ?></label>
            <label class="form-control"><b>Password : </b><?php echo $row['st_password']; ?></label>
            <label class="form-control"><b>Address : </b><?php echo $row['st_address']; ?></label>
            <label class="form-control"><b>City : </b><?php echo $row['st_city']; ?></label>
            <label class="form-control"><b>Pincode : </b><?php echo $row['st_pincode']; ?></label>
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
    
  </body>
</html>