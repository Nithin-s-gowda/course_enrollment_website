<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username=$_POST['username'];
    $course=$_POST['course'];
    $dob=$_POST['dob'];
    $phone_number=$_POST['phone_number'];
    $email = $_POST["email"];
    $address=$_POST['address'];
    $password = $_POST["password"];
    $confirm_password=$_POST['confirm_password'];
    

  
    // Upload image
    $image_path = null;
    if ($_FILES["image_path"]["error"] == 0) {
        $uploadsDir = "./uploads/";
        $imageName = uniqid() . "_" . basename($_FILES["image_path"]["username"]);
        $imagePath = $uploadsDir . $imageName;
        move_uploaded_file($_FILES["image_path"]["tmp_name"], $imagePath);
        $image_path = $imagePath;
    }
   
    $sql = "INSERT INTO register (username,course,dob, phone_number, email,address, password, confirm_password, image_path) VALUES ('$username','$course','$dob', '$phone_number', '$email','$address', '$password', '$confirm_password', '$image_path')";

    if ($conn->query($sql) === TRUE) {
        header("Location: login.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Course Flix</title>
  <!link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css'><link rel="stylesheet" href="./styleRg.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" type="image/x-icon" href="./img1/logo.svg">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="img1/logo.svg" alt=""></a>
        <strong style="color:blue;">Course</strong> <strong>Flix</strong>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="http://localhost/Course/index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="menter.html">Mentor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="books.html">Books</a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Courses
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">cybersecurity</a></li>
                <li><a class="dropdown-item" href="#">Web Development</a></li>
                <li><a class="dropdown-item" href="#">Artificial Intelligence (AI) and<br> Machine Learning (ML)</a></li>
                <li><a class="dropdown-item" href="#">Software Engineering</a></li>
                <li><a class="dropdown-item" href="#">Cloud Computing</a></li>
                
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="menter.html">Mentors</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/Course/reg.php">Booking</a>
            </li>
            <a href="http://localhost/Course/login.php">
            <button type="button" class="btn btn-outline-secondary">Login</button>
            </a>

          </ul>
          
        </div>
      </div>
    </nav>
  </header>
<!-- partial:index.partial.html -->
<div class="form_wrapper">
  <div class="form_container">
    <div class="title_container">
      <h2>Registration Form</h2>
    </div>
    <div class="row clearfix">
      <div class="">
        <form method="post"actoin="reg.php">
            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                <input type="text" name="username" placeholder="User name" required />
              </div>

              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-mortar-board"></i></span>
                <input type="text" name="course" placeholder="Course" required />
              </div>
              <div class="input_field" style="padding: 8px 10px 9px 35px;"> <span><i aria-hidden="true" class="fa fa-calendar"></i></span>
                <input type="date" name="dob" placeholder="DOB" required />
              </div>
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-phone"></i></span>
                <input type="text" name="phone_number" placeholder="Phone number" required />
              </div>

          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
            <input type="email" name="email" placeholder="Email" required />
          </div>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-home"></i></span>
                <input type="text" name="address" placeholder="address" required />
              </div>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="password" name="password" placeholder="Password" required />
          </div>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required />
          </div>
          <div class="input_field"> 
              <h6>upload your profile</h6>
            <input type="file" name="image_path" placeholder="insert image" required />
          </div>
          <input class="button" type="submit" value="Register" />
        </form>
      </div>
    </div>
  </div>
</div>
<p class="credit">Developed by <a href="http://localhost/Course/index.php" target="_blank">CourseFlix.com</a></p>
<!-- partial -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <script src='https://use.fontawesome.com/4ecc3dbb0b.js'></script>
</body>
</html>
