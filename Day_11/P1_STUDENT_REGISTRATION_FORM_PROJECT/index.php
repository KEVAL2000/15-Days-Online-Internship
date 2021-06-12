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
    $sql = "SELECT * FROM st_detail ORDER BY st_id DESC";
    $query = mysqli_query($connection,$sql) 
             or die(mysqli_error($connection));
?>
<?php 
    include "main-header.php";
?>
<?php
    $menu="index";
    include "header.php";
?>
<main role="main" class="flex-shrink-0">
    <div class="container">
        <h1>List of Student</h1>
        <table class="table table-striped table-hover table-responsive-xl table-responsive-sm table-responsive-md table-responsive-lg">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Middle Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Age</th>
                <th scope="col">DOB</th>
                <th scope="col">Gender</th>
                <th scope="col">Blood Group</th>
                <th scope="col">Email ID</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">Password</th>
                <th scope="col">Address</th>
                <th scope="col">City</th>
                <th scope="col">Pincode</th>
                <th scope="col">1 is Deleted</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i=0;
                    while($row = mysqli_fetch_array($query)){
                        if($i%2==0)
                            $classname="evenRow";
                        else
                            $classname="oddRow";
                ?>
                <tr class="<?php if(isset($classname)) echo $classname;?>">
                <td><?php echo $row["st_id"]; ?></td>
                <td><?php echo $row["st_fname"]; ?></td>
                <td><?php echo $row["st_mname"]; ?></td>
                <td><?php echo $row["st_lname"]; ?></td>
                <td><?php echo $row["st_age"]; ?></td>
                <td><?php echo $row["st_dob"]; ?></td>
                <td><?php echo $row["st_gender"]; ?></td>
                <td><?php echo $row["st_bloodgroup"]; ?></td>
                <td><?php echo $row["st_email"]; ?></td>
                <td><?php echo $row["st_mobile"]; ?></td>
                <td><?php echo $row["st_password"]; ?></td>
                <td><?php echo $row["st_address"]; ?></td>
                <td><?php echo $row["st_city"]; ?></td>
                <td><?php echo $row["st_pincode"]; ?></td>
                <td><?php echo $row["is_deleted"]; ?></td>
                
                <td>
                    <a href="view.php"><button onclick="<?php $_SESSION['st_id'] = $row['st_id'];?>" class="btn btn-primary btn-sm">View</button></a>
                    <a href="edit.php"><button onclick="<?php $_SESSION['st_id'] = $row['st_id'];?>" class="btn btn-primary btn-sm">Edit</button></a>
                    <a href="delete.php"><button onclick="<?php $_SESSION['st_id'] = $row['st_id'];?>" class="btn btn-primary btn-sm">Delete</button></a>
                </td>
                </tr>
                <?php
                        $i++;
                    }
                ?>
            </tbody>
        </table>
    </div>
</main>
<?php
    include "footer.php";
?>