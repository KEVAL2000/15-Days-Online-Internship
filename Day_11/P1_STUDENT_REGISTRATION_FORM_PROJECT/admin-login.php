<?php
    session_start();
    if (isset($_POST['submit'])){
        $logins = array('kevalparmar3233@gmail.com' => 'KEval@8160');
        $ad_email = isset($_POST['ad_email']) ? $_POST['ad_email'] : '';
        $ad_password = isset($_POST['ad_password']) ? $_POST['ad_password'] : '';
        if (isset($logins[$ad_email]) && $logins[$ad_email] == $ad_password){
            $_SESSION['UserData']['ad_email'] = $logins[$ad_email];
            header("location:index.php");
            exit;
        } else{
            header("location: login.php");
        }
    }
?>
<?php
    include "main-header.php";
?>
<?php
    $menu = "admin-login";
    include "header.php";
?>
<main role="main" class="flex-shrink-0">
    <div class="container">
        <h1>Admin Login</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="ad_email">Email ID</label>
                <input type="email" class="form-control" name="ad_email" placeholder="Enter Email ID..." required />
            </div>
            <div class="form-group">
                <label for="ad_password">Password</label>
                <input id="password-field" type="password" class="form-control" name="ad_password" placeholder="Enter Password..." required />
                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <button type="reset" name="reset" class="btn btn-primary">Reset</button>
            <br/><br/>
            <label style="margin-top:5px;">Not Admin ?</label>
            <a href="login.php" class="btn btn-primary col-50">Login Now!</a>
            <br/><br/>
        </form>
    </div>
</main>

<?php
    include "footer.php";
?>