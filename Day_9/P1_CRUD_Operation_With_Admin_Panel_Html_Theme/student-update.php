<?php

    session_start();
    
    if (!isset($_SESSION['loggedin'])) 
    {
    
        header('Location: login.php');
    
        exit;

    }

    include "db_connection.php";
    
    if (mysqli_connect_errno()) {
  
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
  
        exit();

    }

    //$edit_email = $_GET['student_email'];
    $edit_email = $_SESSION['st_email'];

    $edit_sql = "SELECT * FROM st_detail WHERE st_email='{$edit_email}' AND is_deleted='0'";

    $edit_query = mysqli_query($connection,$edit_sql);

    if(!$edit_query){

         //echo "You are not Registered";

         header("Location: login.php");

    }
   
    $row = mysqli_fetch_array($edit_query);

    if(isset($_POST['submit'])){

        $updated_email = $_POST['st_email'];

        $sql = "UPDATE st_detail SET 
                st_fname='" . $_POST["st_fname"] . "',
                st_mname='" . $_POST["st_mname"] . "', 
                st_lname='" . $_POST["st_lname"] . "',
                st_age='" . $_POST["st_age"] . "',
                st_dob='" . $_POST["st_dob"] . "',
                st_gender='" . $_POST["st_gender"] . "',
                st_bloodgroup='" . $_POST["st_bloodgroup"] . "',
                st_email='" . $_POST["st_email"] . "',
                st_mobile='" . $_POST["st_mobile"] . "',
                st_password='" . $_POST["st_password"] . "',
                st_address='" . $_POST["st_address"] . "',
                st_city='" . $_POST["st_city"] . "',
                st_pincode='" . $_POST["st_pincode"] . "'
                WHERE st_id='" . $_POST["st_id"] . "'";

         $query = mysqli_query($connection,$sql) 
                  or die(mysqli_error($connection));
 
         if($query){
 
             //header("Location: student-home.php?student_email={$updated_email}");
             header("Location: student-home.php");

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
                    <!-- 
                        <a class="nav-link" href='student-home.php?student_email=<?php echo "$edit_email"; ?>'>Home <span class="sr-only">(current)</span></a>
                    -->  
                        <a class="nav-link" href='student-home.php'>Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
        
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1>Edit Your Detail</h1>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="st_fname">First Name</label>
                    <input type="hidden" name="st_id" class="form-control" value="<?php echo $row['st_id']; ?>"><input type="text" name="st_fname" class="form-control" value="<?php echo $row['st_fname']; ?>">
                </div>
                <div class="form-group">
                    <label for="st_mname">Middle Name</label>
                    <input type="text" name="st_mname" class="form-control" value="<?php echo $row['st_mname']; ?>">
                </div>
                <div class="form-group">
                    <label for="st_lname">Last Name</label>
                    <input type="text" name="st_lname" class="form-control" value="<?php echo $row['st_lname']; ?>">
                </div>
                <div class="form-group">
                    <label for="st_age">Age</label>
                    <input type="number" name="st_age" class="form-control" value="<?php echo $row['st_age']; ?>">
                </div>
                <div class="form-group">
                    <label for="st_dob">Date Of Birth</label>
                    <input type="date" name="st_dob" class="form-control" value="<?php echo $row['st_dob']; ?>">
                </div>
                <div class="form-group">
                    <label for="st_gender">Gender</label>  
                    <select class="form-control" name="st_gender">
                        <option value="Male" <?php if($row['st_gender']=='Male') {echo 'selected';}?>>Male</option>
                        <option value="Female" <?php if($row['st_gender']=='Female') {echo 'selected';}?>>Female</option> 
                    </select>
                </div>
                <div class="form-group">
                    <label for="st_bloodgroup">Blood Group</label>  
                    <select class="form-control" name="st_bloodgroup">
                        <option value="A+" <?php if($row['st_bloodgroup']=='A+') {echo 'selected';}?>>A+</option>
                        <option value="A-" <?php if($row['st_bloodgroup']=='A-') {echo 'selected';}?>>A-</option>
                        <option value="B+" <?php if($row['st_bloodgroup']=='B+') {echo 'selected';}?>>B+</option> 
                        <option value="B-" <?php if($row['st_bloodgroup']=='B-') {echo 'selected';}?>>B-</option>
                        <option value="O+" <?php if($row['st_bloodgroup']=='O+') {echo 'selected';}?>>O+</option> 
                        <option value="O-" <?php if($row['st_bloodgroup']=='O-') {echo 'selected';}?>>O-</option>    
                        <option value="AB+" <?php if($row['st_bloodgroup']=='AB+') {echo 'selected';}?>>AB+</option>                  
                        <option value="AB-" <?php if($row['st_bloodgroup']=='AB-') {echo 'selected';}?>>AB-</option>                    
                    </select>
                </div>
                <div class="form-group">
                    <label for="st_email">Email ID</label>
                    <input type="email" name="st_email" class="form-control" value="<?php echo $row['st_email']; ?>">
                </div>
                <div class="form-group">
                    <label for="st_mobile">Mobile Number</label>
                    <input type="text" name="st_mobile" class="form-control" value="<?php echo $row['st_mobile']; ?>">
                </div>
             
                <div class="form-group">
                    <label for="st_password">Password</label>              
                    <input id="password-field" type="password" class="form-control" name="st_password" value="<?php echo $row['st_password']; ?>">
                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>         
                </div>
        
                <div class="form-group">
                    <label for="st_address">Address</label>
                    <input type="text" name="st_address" class="form-control" value="<?php echo $row['st_address']; ?>">
                </div>
                <div class="form-group">
                    <label for="st_city">City</label>  
                    <select class="form-control" name="st_city">
                        <option value="Ahmedabad" <?php if($row['st_city']=='Ahmedabad') {echo 'selected';}?>>Ahmedabad</option>
                        <option value="Amreli" <?php if($row['st_city']=='Amreli') {echo 'selected';}?>>Amreli</option>
                        <option value="Anand" <?php if($row['st_city']=='Anand') {echo 'selected';}?>>Anand</option> 
                        <option value="Aravalli" <?php if($row['st_city']=='Aravalli') {echo 'selected';}?>>Aravalli</option>
                        <option value="Banaskantha" <?php if($row['st_city']=='Banaskantha') {echo 'selected';}?>>Banaskantha</option> 
                        <option value="Bharuch" <?php if($row['st_city']=='Bharuch') {echo 'selected';}?>>Bharuch</option>    
                        <option value="Bhavnagar" <?php if($row['st_city']=='Bhavnagar') {echo 'selected';}?>>Bhavnagar</option>                                      
                        <option value="Dahod" <?php if($row['st_city']=='Dahod') {echo 'selected';}?>>Dahod</option>                    
                        <option value="Dang" <?php if($row['st_city']=='Dang') {echo 'selected';}?>>Dang</option>                    
                        <option value="Gandhinagar" <?php if($row['st_city']=='Gandhinagar') {echo 'selected';}?>>Gandhinagar</option>                    
                        <option value="Jamnagar" <?php if($row['st_city']=='Jamnagar') {echo 'selected';}?>>Jamnagar</option>                    
                        <option value="Junagadh" <?php if($row['st_city']=='Junagadh') {echo 'selected';}?>>Junagadh</option>                    
                        <option value="Kutch" <?php if($row['st_city']=='Kutch') {echo 'selected';}?>>Kutch</option>                    
                        <option value="Kheda" <?php if($row['st_city']=='Kheda') {echo 'selected';}?>>Kheda</option>                    
                        <option value="Mehsana" <?php if($row['st_city']=='Mehsana') {echo 'selected';}?>>Mehsana</option>                    
                        <option value="Navsari" <?php if($row['st_city']=='Navsari') {echo 'selected';}?>>Navsari</option>                    
                        <option value="Narmada" <?php if($row['st_city']=='Narmada') {echo 'selected';}?>>Narmada</option>                    
                        <option value="Patan" <?php if($row['st_city']=='Patan') {echo 'selected';}?>>Patan</option>                    
                        <option value="Panchmahal" <?php if($row['st_city']=='Panchmahal') {echo 'selected';}?>>Panchmahal</option>                    
                        <option value="Porbandar" <?php if($row['st_city']=='Porbandar') {echo 'selected';}?>>Porbandar</option>                    
                        <option value="Rajkot" <?php if($row['st_city']=='Rajkot') {echo 'selected';}?>>Rajkot</option>                    
                        <option value="Sabarkantha" <?php if($row['st_city']=='Sabarkantha') {echo 'selected';}?>>Sabarkantha</option>                    
                        <option value="Surendranagar" <?php if($row['st_city']=='Surendranagar') {echo 'selected';}?>>Surendranagar</option>                    
                        <option value="Surat" <?php if($row['st_city']=='Surat') {echo 'selected';}?>>Surat</option>                    
                        <option value="Tapi" <?php if($row['st_city']=='Tapi') {echo 'selected';}?>>Tapi</option>                    
                        <option value="Vadodara" <?php if($row['st_city']=='Vadodara') {echo 'selected';}?>>Vadodara</option>                    
                        <option value="Valsad" <?php if($row['st_city']=='Valsad') {echo 'selected';}?>>Valsad</option>                    
                  </select>
                </div>
                <div class="form-group">
                    <label for="st_pincode">Pincode</label>
                    <input type="number" name="st_pincode" class="form-control" value="<?php echo $row['st_pincode']; ?>">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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