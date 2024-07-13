<?php
include("db.php");
session_start();

// Read Operation - Fetch product data
$sql = "SELECT * FROM courses_enroll";
$result = $conn->query($sql);

// Display products
$products = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="shortcut icon" href="./img1/logo.svg">
    <link rel="stylesheet" href="styleDsb.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="./img1/logo.svg" alt="">
            <h2><span class="primary">Course</span>Flix</h2>
        </div>
        <div class="navbar">
            <a href="http://localhost/Course/dsboard.php">
                <span class="material-icons-sharp">home</span>
                <h3>Home</h3>
            </a>
            <a href="http://localhost/Course/timetable.php" class="active" onclick="timeTableAll()">
                <span class="material-icons-sharp">today</span>
                <h3>Time Table</h3>
            </a> 
            <a href="exam.html">
                <span class="material-icons-sharp">grid_view</span>
                <h3>Examination</h3>
            </a>
            <a href="Chpassword.html">
                <span class="material-icons-sharp">password</span>
                <h3>Change Password</h3>
            </a>
            <a href="http://localhost/Course/login.php">
                <span class="material-icons-sharp">logout</span>
                <h3>Logout</h3>
            </a>
        </div>
        <div id="profile-btn" style="display: none;">
            <span class="material-icons-sharp">person</span>
        </div>
        <div class="theme-toggler">
            <span class="material-icons-sharp active">light_mode</span>
            <span class="material-icons-sharp">dark_mode</span>
        </div>
        
    </header>

    <main style="margin: 0;">
        <div class="timetable active" id="timetable">
            <div>
                
                <h2 align-items="center">Courses Enrolled</h2>
                
            </div>
            <table>
                <thead>
                    <tr>
                        <th>course</th>
                        <th>price</th>
                        <th>duration</th>
                        <th>status</th>
                    </tr>
                </thead>
                
                
    <?php foreach ($products as $product): ?>
        <tr>
           
            <td><?php echo $product['course']; ?></td>
            <td><?php echo $product['price']; ?></td>
            <td><?php echo $product['duration']; ?></td>
            
        </tr>
    <?php endforeach; ?>
    
                
                
                
                <!--tbody></tbody-->
            </table>
        </div>
    </main>

</body>

<script src="timeTable.js"></script>
<script src="app.js"></script>
</html>