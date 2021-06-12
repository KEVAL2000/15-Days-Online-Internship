<?php
    session_start();    
    if(!isset($_SESSION['UserData']['ad_email'])){ 
        header("location:admin-login.php");
        exit;
    }
    include "db_connection.php";
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    $view_id = $_SESSION['st_id'];
    $view_sql = "SELECT * FROM st_detail WHERE st_id='{$view_id}'";
    $view_query = mysqli_query($connection,$view_sql);
    $row = mysqli_fetch_array($view_query);
?>
<?php 
    include "main-header.php";
?>
<?php
    $menu="view";
    include "header.php";
?>
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
        <label class="form-control"><b>1 is Deleted : </b><?php echo $row['is_deleted']; ?></label>
    </div>
</main>
<?php
    include "footer.php";
?>