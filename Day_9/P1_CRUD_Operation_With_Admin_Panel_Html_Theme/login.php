<?php

    session_start();

    include "db_connection.php";
    
    if (mysqli_connect_errno()) {
  
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
  
        exit();

    }

    if(isset($_POST['submit'])){

            $get_email = $_POST['st_email'];
  
            $get_password = $_POST['st_password'];

            $get_sql = "SELECT st_id,st_fname,st_password FROM st_detail WHERE st_email='{$get_email}' AND is_deleted='0'";

            $get_query = mysqli_query($connection,$get_sql);

            if(!$get_query){

                //echo "You are not Registered";

                header("Location: login.php");

            }
   
            $row = mysqli_fetch_array($get_query);

            //if (password_verify($row['st_password'], $get_password)) 
            if ($row['st_password']==$get_password) 
            {

                // Verification success! User has loggedin!

                // Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.

                //session_regenerate_id();

                $_SESSION['loggedin'] = TRUE;

                //$_SESSION['name'] = $_POST['fname'];

                //$_SESSION['st_id'] = $st_id;
                $_SESSION['st_email'] = $_POST['st_email'];

                //header("Location: student-home.php?student_email={$get_email}");
                header("Location: student-home.php");

                exit;

            } 
            else 
            {

                // Incorrect password   
                
                header('Location: login.php');

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

         .col-50 
         {
            float: right;

            margin-bottom: 10px;
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
                        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Student Register </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-login.php">Admin Login </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="forgot-password-request.php">Forgot Password </a>
                    </li> -->
                </ul>
            </div>
        </nav>
    </div>
        
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1>Login</h1>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="st_email">Email ID</label>
                    <input type="email" class="form-control" name="st_email" placeholder="Enter Email ID..." required/>
                </div>
                
                <div class="form-group">
                    <label for="st_password">Password</label>              
                    <input id="password-field" type="password" class="form-control" name="st_password" placeholder="Enter Password..." required/>
                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>         
                </div>
        
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <button type="reset" name="reset" class="btn btn-primary">Reset</button>
                <br/>
                <br/>
                <label style="margin-top:5px;">Not Registered Yet ?</label>
                
                <a href="home.php" class="btn btn-primary col-50">Register Now!</a>
                <br/>
                <br/>
                <label style="margin-top:5px;">For Admin</label>
                
                <a href="admin-login.php" class="btn btn-primary col-50">Login Now!</a>
                <!-- <br/>
                <br/>
                <label style="margin-top:5px;">Not Remembered Password ?</label>
                
                <a href="forgot-password-request.php" class="btn btn-primary col-50">Forgot Password Now!</a> -->
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