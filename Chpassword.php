<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $new_password = $_POST['new_password'];

    // Validate the current password
    $validate_sql = "SELECT * FROM register WHERE username = '$username' AND password = '$password'";
    $validate_result = $conn->query($validate_sql);

    if ($validate_result->num_rows > 0) {
        // Update the password
        $update_sql = "UPDATE register SET password = '$new_password' WHERE username = '$username'";
        if ($conn->query($update_sql) === TRUE) {
            echo "Password changed successfully";
        } else {
            echo "Error updating password: " . $conn->error;
        }
    } else {
        echo "Incorrect current password";
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

    <style>
        header{position: relative;}
        .change-password-container{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 90vh;
        }
        .change-password-container form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-radius: var(--border-radius-2);
            padding : 3.5rem;
            background-color: var(--color-white);
            box-shadow: var(--box-shadow);
            width: 95%;
            max-width: 32rem;
        }
        .change-password-container form:hover{box-shadow: none;}
        .change-password-container form input[type=password], input[type=text]{
            border: none;
            outline: none;
            border: 1px solid var(--color-light);
            background: transparent;
            height: 2rem;
            width: 100%;
            padding: 0 .5rem;
        }
        .change-password-container form .box{
            padding: .5rem 0;
        }
        .change-password-container form .box p{
            line-height: 2;
        }
        .change-password-container form h2+p{margin: .4rem 0 1.2rem 0;} 
        .btn{
            background: none;
            border: none;
            border: 2px solid var(--color-primary) !important;
            border-radius: var(--border-radius-1);
            padding: .5rem 1rem;
            color: var(--color-white);
            background-color: var(--color-primary);
            cursor: pointer;
            margin: 1rem 1.5rem 1rem 0;
            margin-top: 1.5rem;
        }
        .btn:hover{
            color: var(--color-primary);
            background-color: transparent;
        }
    </style>

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
            <a href="http://localhost/Course/timetable.php" onclick="timeTableAll()">
                <span class="material-icons-sharp">today</span>
                <h3>Time Table</h3>
            </a> 
            <a href="exam.html">
                <span class="material-icons-sharp">grid_view</span>
                <h3>Examination</h3>
            </a>
            <a href="http://localhost/Course/Chpassword.php" class="active">
                <span class="material-icons-sharp">password</span>
                <h3>Change Password</h3>
            </a>
            <a href="http://localhost/Course/logout.php">
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

    <div class="change-password-container">
        <form action="Chpassword.php" method="post">
            <h2>Create new password</h2>
            <p class="text-muted">Your new password must be different from previous used passwords.</p>
            <div class="box">
                <p class="text-muted">Username</p>
                <input type="text" id="currentpass" name="username">
            </div>
            <div class="box">
                <p class="text-muted">Current Password</p>
                <input type="password" id="newpass" name="password">
            </div>
            <div class="box">
                <p class="text-muted">New Password</p>
                <input type="password" id="confirmpass" name="new_password">
            </div>
            <div class="button">
                <input type="submit" value="Save" class="btn">
                <a href="dsboard.html" class="text-muted">Cancel</a>
            </div>
            
        </form>    
    </div>

</body>

<script src="app.js"></script>

</html>