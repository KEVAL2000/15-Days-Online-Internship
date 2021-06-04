<?php

    include "db_connection.php";
    
    if (mysqli_connect_errno()) {
  
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
  
        exit();

    }

    $sql = "SELECT * FROM st_detail WHERE is_deleted='0' ORDER BY st_id DESC";

    $query = mysqli_query($connection,$sql) 
             or die(mysqli_error($connection));

?>

<!doctype html>
<html lang="en" class="h-100 w-auto">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <title>List Of Student</title>
   
  </head>
  <body class="d-flex flex-column h-100 w-100">
    
    <div class="container pt-4 pb-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
            <a class="navbar-brand" href="#">Student Registration Form Data</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="create.php">Create</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
        
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1>List of Student</h1>
            <table class="table table-striped table-hover table-responsive-xl table-responsive-sm table-responsive-md table-responsive-lg">
                <thead>
                    <tr>
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
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($query)) {
                    if($i%2==0)
                    $classname="evenRow";
                    else
                    $classname="oddRow";
                    ?>

                    <tr class="<?php if(isset($classname)) echo $classname;?>">
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
                    
                    <td>
                        <a href="view.php?view_id=<?php echo $row["st_id"]; ?>"><button class="btn btn-primary btn-sm">View</button></a>
                        <a href="edit.php?edit_id=<?php echo $row["st_id"]; ?>"><button class="btn btn-primary btn-sm">Edit</button></a>
                        <a href="delete.php?delete_id=<?php echo $row["st_id"]; ?>"><button class="btn btn-primary btn-sm">Delete</button></a>
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
    
  </body>
</html>