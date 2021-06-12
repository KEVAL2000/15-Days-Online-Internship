<?php
    include "db_connection.php";
    if (isset($_GET["key"]) && isset($_GET["fp_email"]) && isset($_GET["action"]) && ($_GET["action"]=="reset") && !isset($_POST["action"])){
        $forgot_key = $_GET["key"];
        $forgot_email = $_GET["fp_email"];
        $curDate = date("Y-m-d H:i:s");
        $update_query = mysqli_query($connection,"SELECT * FROM `password_reset_temp` WHERE `key`='".$forgot_key."' and `fp_email`='".$forgot_email."';");
        $row = mysqli_num_rows($update_query);
        if ($row==""){
            header("Location: forgot-password-request.php?forgot_msg=success");
        }else{
            $row = mysqli_fetch_assoc($update_query);
            $expDate = $row['expDate'];
            if ($expDate >= $curDate){
                 header("Location: forgot-password-response.php?forgot_msg=new_password");
            }else{
                header("Location: forgot-password-request.php?forgot_msg=expired");
            }
        }
    }
    if(isset($_POST["forgot_res_email"]) && isset($_POST["action"]) && ($_POST["action"]=="update")){
        $pass1 = $_POST['forgot_res_password_1'];
        $pass2 = $_POST['forgot_res_password_2'];
        $email = $_POST["forgot_res_email"];
        $curDate = date("Y-m-d H:i:s");
        if ($pass1 != $pass2){
            header("Location: forgot-password-request.php?forgot_msg=password");
        }else{
            $delete_sql = "DELETE FROM password_reset_temp WHERE fp_email = '{$email}'";
            $delete_query = mysqli_query($connection,$delete_sql);
            $new_password_sql = "UPDATE st_detail SET st_password = '{$pass1}' WHERE st_email = '{$email}'";
            $new_password_query = mysqli_query($connection,$new_password_sql);
            header("Location: login.php?forgot_msg_res=success");
        } 
    }
?>
<?php 
    include "main-header.php";
?>
<?php
    $menu="forgot-password-response";
    include "header.php";
?>
<main role="main" class="flex-shrink-0">
    <div class="container">  
        <div>
             <?php
                if (isset($_GET['forgot_msg'])){
                    $forgot_msg = $_GET['forgot_msg'];
                    if ($forgot_msg == "new_password"){
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
        </form>
    </div>
</main>
<?php
    include "footer.php";
?>