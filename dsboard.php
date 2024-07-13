<?php
include("db.php");

session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page if not logged in
    header("Location: login.php");
    exit();
}

// Retrieve the username from the session
$username = $_SESSION['username'];

// Fetch data from the database for the logged-in user
$query = "SELECT * FROM register WHERE username = '$username'";
$result = $conn->query($query);

// Check if the query was successful
if ($result) {
    // Fetch the data as an associative array
    $user_data = mysqli_fetch_assoc($result);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="shortcut icon" href="./img1/logo.svg">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="styleDsb.css">
</head>
<body>
    <header>
        <div class="logo" title="University Management System">
            <img src="./img1/logo.svg" alt="">
            <h2><span class="primary">Course</span>Flix</h2>
        </div>
        <div class="navbar">
            <a href="http://localhost/Course/dsboard.php" class="active">
                <span class="material-icons-sharp">home</span>
                <h3>Home</h3>
            </a>
            <a href="http://localhost/Course/timetable.php" onclick="timeTableAll()">
                <span class="material-icons-sharp">today</span>
                <h3>Time Table</h3>
            </a> 
            <a href="exam.html">
                <span class="material-icons-sharp">grid_view</span>
                <h3>Examination</h3>
            </a>
            <a href="http://localhost/Course/Chpassword.php">
                <span class="material-icons-sharp">password</span>
                <h3>Change Password</h3>
            </a>
            <a href="index.html">
                <span class="material-icons-sharp" onclick="">logout</span>
                <h3>Logout</h3>
            </a>
        </div>
        <div id="profile-btn">
            <span class="material-icons-sharp">person</span>
        </div>
        <div class="theme-toggler">
            <span class="material-icons-sharp active">light_mode</span>
            <span class="material-icons-sharp">dark_mode</span>
        </div>
        
    </header>
    <div class="container">
        <aside>
        
            <div class="profile">
                <div class="top">
                    <div class="profile-photo">
                    <?php if ($user_data){
                        $filename = $user_data['image_path'];
                        $image_path = 'upload_folder/' . $filename;
                     ?>
                        <img src="<?php echo $image_path; ?>" alt="Product Image">
                    <?php } ?>
                    </div>
                    <div class="info">
                        <p>Hey, <b><?php echo $user_data['username']; ?></b> </p>
                        
                    </div>
                </div>
                <div class="about">
                    <h5>Course</h5>
                    <p><?php echo $user_data['course']; ?></p>
                    <h5>DOB</h5>
                    <p><?php echo $user_data['dob']; ?></p>
                    <h5>Contact</h5>
                    <p><?php echo $user_data['phone_number']; ?></p>
                    <h5>Email</h5>
                    <p><?php echo $user_data['email']; ?></p>
                    <h5>Address</h5>
                    <p><?php echo $user_data['address']; ?></p>
                </div>
            </div>
            
        </aside>

        <main>
            <h1>Enrolled</h1>
            <div class="subjects">
                <div class="eg">
                    <span class="material-icons-sharp">architecture</span>
                    <h3>Cybersecurity</h3>
                    <h2>12/14</h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>86%</p></div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <div class="mth">
                    <span class="material-icons-sharp">functions</span>
                    <h3>Web Development</h3>
                    <h2>27/29</h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>93%</p></div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <div class="cs">
                    <span class="material-icons-sharp">computer</span>
                    <h3>AI & ML</h3>
                    <h2>27/30</h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>81%</p></div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <div class="cg">
                    <span class="material-icons-sharp">dns</span>
                    <h3>Software Engineering</h3>
                    <h2>24/25</h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>96%</p></div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <div class="net">
                    <span class="material-icons-sharp">router</span>
                    <h3>Cloud Computing</h3>
                    <h2>25/27</h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>92%</p></div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
            </div>

</main>            

    </div>
    

   
</body>
</html>
<?php
  
} else {
   echo "Error executing the query: " . mysqli_error($connection);
}

// Close the database connection
mysqli_close($conn);
?>