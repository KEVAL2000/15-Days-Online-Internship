<?php

    include "db_connection.php";
    
    include('smtp.php');
    
    if (mysqli_connect_errno()) {
  
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
  
        exit();

    }

    if (isset($_GET['forgot_msg'])) {
       $forgot_msg = $_GET['forgot_msg'];
       if ($forgot_msg == "success") {
           echo "The link is invalid/expired. Either you did not copy the correct link from the email, or you have already used the key in which case it is deactivated.";
       } 
    }
    if (isset($_GET['forgot_msg'])) {
       $forgot_msg = $_GET['forgot_msg'];
       if ($forgot_msg == "expired") {
           echo "The link is expired. You are trying to use the expired link which as valid only 24 hours (1 days after request).";
       } 
    }
    if (isset($_GET['forgot_msg'])) {
       $forgot_msg = $_GET['forgot_msg'];
       if ($forgot_msg == "password") {
           echo "Password do not match, both password should be same.";
       } 
    }
    
    if(isset($_POST['submit'])){

            if(isset($_POST["forgot_req_email"])){

                 $get_email = $_POST['forgot_req_email'];
   
                 $get_sql = "SELECT * FROM st_detail WHERE st_email='{$get_email}'";

                 $get_query = mysqli_query($connection,$get_sql);

                 //$row = mysqli_num_rows($get_query);

                 $row = mysqli_fetch_array($get_query);

                 //if ($row=="")
                 if($get_email != $row['st_email'])
                 {

                      header("Location: home.php?forgot_msg=success");

                 }

                 else
                 {

                      $expFormat = mktime(date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y"));

                      $expDate = date("Y-m-d H:i:s",$expFormat);

                      $key = md5($get_email);

                      $addKey = substr(md5(uniqid(rand(),1)),3,10);

                      $key = $key . $addKey;

                      $fp_email = filter_var($get_email, FILTER_SANITIZE_EMAIL);

                      $fp_email = filter_var($get_email, FILTER_VALIDATE_EMAIL);


                      // Insert Temp Table

                      //$add_sql = "INSERT INTO password_reset_temp (st_email, key, expDate) VALUES ('$get_email', '$key', '$expDate')";
      
                      //$add_query = mysqli_query($connection,$add_sql);

                      $add_query = mysqli_query($connection,"INSERT INTO `password_reset_temp` (`fp_email`, `key`, `expDate`) VALUES ('".$fp_email."', '".$key."', '".$expDate."');");
             
                      //mysqli_query($con,"INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`) VALUES ('".$email."', '".$key."', '".$expDate."');");
             
                      $from    = 'test.keval.parmar@gmail.com';

                      $to = "$get_email";
    
                      $subject = 'Password Recovery For Student Registration Website';

                      $output='<p>Dear user,</p>';

                      $output.='<p>Please click on the following link to reset your password.</p>';

                      $output.='<p>-------------------------------------------------------------</p>';

                      $output.='<p><a href="http://localhost:8080/Internship/Day_10/P1_CRUD_Operation_&_Email_Response/forgot-password-response.php?key='.$key.'&fp_email='.$get_email.'&action=reset" target="_blank">Click Me!</a></p>'; 

                      $output.='<p>-------------------------------------------------------------</p>';

                      $output.='<p>Please be sure to copy the entire link into your browser.The link will expire after 1 day for security reason.</p>';

                      $output.='<p>If you did not request this forgotten password email, no action is needed, your password will not be reset. However, you may want to log into your account and change your security password as someone may have guessed it.</p>'; 

                      $output.='<p>Thanks,</p>';

                      $output.='<p>Student Registration Website Team</p>';

                      $message = $output; 
    
                      //$headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $from . "\r\n" . 'X-Mailer: PHP/' . phpversion() . "\r\n" . 'MIME-Version: 1.0' . "\r\n" . 'Content-Type: text/html; charset=UTF-8' . "\r\n";      

                      //mail($_POST['email'], $subject, $message, $headers);

                      echo smtp_mailer($to,$subject,$message);

                      if($add_query){

                          header("Location: login.php?forgot_msg_req=success");

                      }
          
                 }

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
                        <a class="nav-link" href="login.php">Student Login </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-login.php">Admin Login </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
        
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1>Forgot Password</h1>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="forgot_req_email">Email ID</label>
                    <input type="email" class="form-control" name="forgot_req_email" placeholder="Enter Email ID..." required/>
                </div>
                
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <button type="reset" name="reset" class="btn btn-primary">Reset</button>
                <br/>
                <br/>
                <label style="margin-top:5px;">Not Registered Yet ?</label>
                
                <a href="home.php" class="btn btn-primary col-50">Register Now!</a>
                <br/>
                <br/>
                <label style="margin-top:5px;">Already Registered ?</label>
                
                <a href="login.php" class="btn btn-primary col-50">Register Now!</a>
                <br/>
                <br/>
                <label style="margin-top:5px;">For Admin</label>
                
                <a href="admin-login.php" class="btn btn-primary col-50">Login Now!</a>
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