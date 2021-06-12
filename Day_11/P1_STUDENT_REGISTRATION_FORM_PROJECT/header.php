<?php
    switch($menu){
        case "login":
            echo '<div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Student Register </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-login.php">Admin Login </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="forgot-password-request.php">Forgot Password </a>
                    </li>
                </ul>
            </div>
                </nav>
                    </div>';
        break;
        case "home":
            echo '<div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Student Login </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-login.php">Admin Login </a>
                    </li>                    
                    <li class="nav-item">
                        <a class="nav-link" href="forgot-password-request.php">Forgot Password </a>
                    </li>
                </ul>
            </div>
                </nav>
                    </div>';
        break;
        case "student-home":
            echo '<div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="student-home.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="student-update.php">Update</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>    
                </ul>
            </div>
                </nav>
                    </div>';
        break;
        case "student-update":
            echo '<div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                  
                        <a class="nav-link" href="student-home.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
                </nav>
                    </div>';
        break;
        case "admin-login":
            echo '<div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="admin-login.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Student Register </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Student Login </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="forgot-password-request.php">Forgot Password </a>
                    </li>              
                </ul>
            </div>
                </nav>
                    </div>';
        break;
        case "create":
            echo '<div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-logout.php">Logout </a>
                    </li>
                </ul>
            </div>
                </nav>
                    </div>';
        break;
        case "edit":
            echo '<div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="create.php">Create </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-logout.php">Logout </a>
                    </li>
                </ul>
            </div>
                </nav>
                    </div>';
        break;
        case "forgot-password-request":
            echo '<div class="collapse navbar-collapse" id="navbarsExample09">
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
                    </div>';
        break;
        case "forgot-password-response":
            echo '<div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Home <span class="sr-only">(current)</span></a>
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
                    </div>';
        break;
        case "index":
            echo '<div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="create.php">Create</a>
                    </li>
                  
                    <li class="nav-item">
                        <a class="nav-link" href="admin-logout.php">Logout </a>
                    </li>
                </ul>
            </div>
                </nav>
                    </div>';
        break;
        case "view":
            echo '<div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="create.php">Create</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-logout.php">Logout </a>
                    </li>
                </ul>
            </div>
                </nav>
                    </div>';
        break;
    }
?>


















