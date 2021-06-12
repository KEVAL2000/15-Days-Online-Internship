<?php
    session_start();
    include "db_connection.php";
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    if (isset($_GET['active_msg_req'])){
       $active_msg_req = $_GET['active_msg_req'];
       if ($active_msg_req == "success"){
           echo "Please check your email to activate your account!";
       } 
    }
    if (isset($_GET['forgot_msg_req'])){
       $forgot_msg_req = $_GET['forgot_msg_req'];
       if ($forgot_msg_req == "success"){
           echo "Please check your email to recover your password!";
       } 
    }
    if (isset($_GET['forgot_msg_res'])){
       $forgot_msg_res = $_GET['forgot_msg_res'];
       if ($forgot_msg_res == "success"){
           echo "Congratulations! Your password has been updated successfully.";
       } 
    }
    if (isset($_GET['active_msg_res'])){
       $active_msg_res = $_GET['active_msg_res'];
       if ($active_msg_res == "success"){
           echo "Your account is now activated, you can now login!";
       } 
    }
    if(isset($_POST['submit'])){
        $get_email = $_POST['st_email'];
        $get_password = $_POST['st_password'];
        $get_sql = "SELECT st_id,st_fname,st_password FROM st_detail WHERE st_email='{$get_email}' AND is_deleted='0'";
        $get_query = mysqli_query($connection,$get_sql);
        if(!$get_query){
            header("Location: login.php");
        }
        $row = mysqli_fetch_array($get_query);
        if ($row['st_password']==$get_password){
            // Verification success! User has loggedin!
            // Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['st_email'] = $_POST['st_email'];
            header("Location: student-home.php");
            exit;
        } else{
            // Incorrect password   
            header('Location: login.php');
        }
    }
?>
<?php 
    include "main-header.php";
?>
<?php
    $menu="login";
    include "header.php";
?> 
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
            <br/><br/>
            <label style="margin-top:5px;">Not Registered Yet ?</label>
            <a href="register.php" class="btn btn-primary col-50">Register Now!</a>
            <br/><br/>
            <label style="margin-top:5px;">For Admin</label>
            <a href="admin-login.php" class="btn btn-primary col-50">Login Now!</a>
            <br/><br/>
            <label style="margin-top:5px;">Not Remembered Password ?</label>
            <a href="forgot-password-request.php" class="btn btn-primary col-50">Forgot Password Now!</a>
        </form>
    </div>
</main>
<?php
    include "footer.php";
?>