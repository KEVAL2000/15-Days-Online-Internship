<?php

    session_start();
    
    if(isset($_POST['submit']))
    {
    
        $logins = array('kevalparmar3233@gmail.com' => 'KEval@8160');
    
        $ad_email =  isset($_POST['ad_email']) ? $_POST['ad_email'] : '';
    
        $ad_password = isset($_POST['ad_password']) ? $_POST['ad_password'] : '';
    
        if(isset($logins[$ad_email]) && $logins[$ad_email] == $ad_password)
        {
    
            $_SESSION['UserData']['ad_email']=$logins[$ad_email];
    
            header("location:index.php");
    
            exit;
    
        }
        else
        {
    
            header("location: login.php");

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
                        <a class="nav-link" href="admin-login.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Student Register </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Student Login </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="forgot-password-request.php">Forgot Password </a>
                    </li>              
                </ul>
            </div>
        </nav>
    </div>
        
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1>Admin Login</h1>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="ad_email">Email ID</label>
                    <input type="email" class="form-control" name="ad_email" placeholder="Enter Email ID..." required/>
                </div>
                
                <div class="form-group">
                    <label for="ad_password">Password</label>              
                    <input id="password-field" type="password" class="form-control" name="ad_password" placeholder="Enter Password..." required/>
                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>         
                </div>
        
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <button type="reset" name="reset" class="btn btn-primary">Reset</button>
                <br/>
                <br/>
                <label style="margin-top:5px;">Not Admin ?</label>
                
                <a href="login.php" class="btn btn-primary col-50">Login Now!</a>
                <br/>
                <br/>
              
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