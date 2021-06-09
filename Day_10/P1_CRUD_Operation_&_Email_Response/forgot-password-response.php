<?php

    include "db_connection.php";
    
    if (isset($_GET["key"]) && isset($_GET["fp_email"]) && isset($_GET["action"]) && ($_GET["action"]=="reset") && !isset($_POST["action"]))
    {
        $forgot_key = $_GET["key"];

        $forgot_email = $_GET["fp_email"];

        $curDate = date("Y-m-d H:i:s");

        $update_query = mysqli_query($connection,"SELECT * FROM `password_reset_temp` WHERE `key`='".$forgot_key."' and `fp_email`='".$forgot_email."';");
       
        $row = mysqli_num_rows($update_query);
        
        if ($row=="")
        {

            header("Location: forgot-password-request.php?forgot_msg=success");

        }
        else
        {
            $row = mysqli_fetch_assoc($update_query);

            $expDate = $row['expDate'];

            if ($expDate >= $curDate)
            {

                 header("Location: forgot-password-response.php?forgot_msg=new_password");

      
                 //echo "<label style='margin-top:5px;'>For Admin</label>";
                 
                 //echo "<a id='form_button' class='btn btn-primary col-50'>Create New Password Now!</a>";
 
            }
            else
            {

                header("Location: forgot-password-request.php?forgot_msg=expired");

            }

        }

    }

    if(isset($_POST["forgot_res_email"]) && isset($_POST["action"]) && ($_POST["action"]=="update"))
    {

        $pass1 = $_POST['forgot_res_password_1'];

        $pass2 = $_POST['forgot_res_password_2'];

        $email = $_POST["forgot_res_email"];

        $curDate = date("Y-m-d H:i:s");

        if ($pass1 != $pass2)
        {

            header("Location: forgot-password-request.php?forgot_msg=password");
    
        }
        else
        {
            $delete_sql = "DELETE FROM password_reset_temp WHERE fp_email = '{$email}'";

            $delete_query = mysqli_query($connection,$delete_sql);

            $new_password_sql = "UPDATE st_detail SET st_password = '{$pass1}' WHERE st_email = '{$email}'";
    
            $new_password_query = mysqli_query($connection,$new_password_sql);

            //mysqli_query($con,"UPDATE `account` SET `password`='".$pass1."' WHERE `email`='".$email."';");
             
            //mysqli_query($con,"DELETE FROM `password_reset_temp` WHERE `email`='".$email."';");
             
            header("Location: login.php?forgot_msg_res=success");
    
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
            
            <div>
                 <?php
                 if (isset($_GET['forgot_msg'])) {
                       $forgot_msg = $_GET['forgot_msg'];
                       if ($forgot_msg == "new_password") {
                           echo "<center>";
                           echo "<label id='form_label' style='visibility: visible;'>Not Create a Password ?</label>";
                           echo "<br/>";
                           echo "<a id='form_button' style='visibility: visible;' class='btn btn-primary'>Create New Password Now!</a>";
                           echo "</center>";
                       } 
                 }
                 ?>
            </div>
          
            <h1 id="form_heading" style="visibility: hidden">New Password</h1>
            <form id="form" action="" name="update" method="POST" style="display: none;">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="action" value="update">
                </div>
                <div class="form-group">
                    <label for="forgot_res_email">Email ID</label>
                    <input type="email" class="form-control" name="forgot_res_email" placeholder="Enter Email ID..." required/>
                </div>
                
                <div class="form-group">
                    <label for="forgot_res_password_1">Enter New Password</label>              
                    <input id="password-field" type="password" class="form-control" name="forgot_res_password_1" placeholder="Enter Password..." required/>
                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>         
                </div>
                
                <div class="form-group">
                    <label for="forgot_res_password_2">Re-Enter New Password</label>              
                    <input id="password-field" type="password" class="form-control" name="forgot_res_password_2" placeholder="Re-Enter Password..." required/>
                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>         
                </div>
        
                
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <button type="reset" name="reset" class="btn btn-primary">Reset</button>
            <!-- 
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
            -->
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

         $(document).ready(function() {
              $("#form_button").click(function() {
                   $("#form").toggle();
                   document.getElementById("form_button").style.visibility = "hidden";
                   document.getElementById("form_label").style.visibility = "hidden";
                   document.getElementById("form_heading").style.visibility = "visible";
              });
         });
    </script>
    
  </body>
</html>