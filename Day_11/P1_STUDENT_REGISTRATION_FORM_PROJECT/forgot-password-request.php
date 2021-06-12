<?php
    include "db_connection.php";
    include('smtp.php');
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    if (isset($_GET['forgot_msg'])){
       $forgot_msg = $_GET['forgot_msg'];
       if ($forgot_msg == "success"){
           echo "The link is invalid/expired. Either you did not copy the correct link from the email, or you have already used the key in which case it is deactivated.";
       } 
    }
    if (isset($_GET['forgot_msg'])){
       $forgot_msg = $_GET['forgot_msg'];
       if ($forgot_msg == "expired"){
           echo "The link is expired. You are trying to use the expired link which as valid only 24 hours (1 days after request).";
       } 
    }
    if (isset($_GET['forgot_msg'])){
       $forgot_msg = $_GET['forgot_msg'];
       if ($forgot_msg == "password"){
           echo "Password do not match, both password should be same.";
       } 
    }
    if(isset($_POST['submit'])){
        if(isset($_POST["forgot_req_email"])){
            $get_email = $_POST['forgot_req_email'];
            $get_sql = "SELECT * FROM st_detail WHERE st_email='{$get_email}'";
            $get_query = mysqli_query($connection,$get_sql);
            $row = mysqli_fetch_array($get_query);
            if($get_email != $row['st_email']){
                header("Location: register.php?forgot_msg=success");
            }else{
                $expFormat = mktime(date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y"));
                $expDate = date("Y-m-d H:i:s",$expFormat);
                $key = md5($get_email);
                $addKey = substr(md5(uniqid(rand(),1)),3,10);
                $key = $key . $addKey;
                $fp_email = filter_var($get_email, FILTER_SANITIZE_EMAIL);
                $fp_email = filter_var($get_email, FILTER_VALIDATE_EMAIL);
                $add_query = mysqli_query($connection,"INSERT INTO `password_reset_temp` (`fp_email`, `key`, `expDate`) VALUES ('".$fp_email."', '".$key."', '".$expDate."');");
                $from    = 'test.keval.parmar@gmail.com';
                $to = "$get_email";
                $subject = 'Password Recovery For Student Registration Website';
                $output='<p>Dear user,</p>';
                $output.='<p>Please click on the following link to reset your password.</p>';
                $output.='<p>-------------------------------------------------------------</p>';
                $output.='<p><a href="http://localhost:8080/Internship/Day_11\P1_STUDENT_REGISTRATION_FORM_PROJECT/forgot-password-response.php?key='.$key.'&fp_email='.$get_email.'&action=reset" target="_blank">Click Me!</a></p>'; 
                $output.='<p>-------------------------------------------------------------</p>';
                $output.='<p>Please be sure to copy the entire link into your browser.The link will expire after 1 day for security reason.</p>';
                $output.='<p>If you did not request this forgotten password email, no action is needed, your password will not be reset. However, you may want to log into your account and change your security password as someone may have guessed it.</p>'; 
                $output.='<p>Thanks,</p>';
                $output.='<p>Student Registration Website Team</p>';
                $message = $output; 
                echo smtp_mailer($to,$subject,$message);
                if($add_query){
                    header("Location: login.php?forgot_msg_req=success");
                }
            }
        }        
    }
?>
<?php 
    include "main-header.php";
?>
<?php
    $menu="forgot-password-request";
    include "header.php";
?>  
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
            <br/><br/>
            <label style="margin-top:5px;">Not Registered Yet ?</label>
            <a href="register.php" class="btn btn-primary col-50">Register Now!</a>
            <br/><br/>
            <label style="margin-top:5px;">Already Registered ?</label>
            <a href="login.php" class="btn btn-primary col-50">Register Now!</a>
            <br/><br/>
            <label style="margin-top:5px;">For Admin</label>
            <a href="admin-login.php" class="btn btn-primary col-50">Login Now!</a>
        </form>
    </div>
</main>
<?php
    include "footer.php";
?>