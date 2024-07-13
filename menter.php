<?php
include("db.php");
if((isset($_POST["email"])))
{
    $email=$_POST["email"];
    
    $sql="INSERT INTO newsletter(email)VALUES('$email')";
    if(mysqli_query($conn,$sql))
    {
        echo "Data inserted successfully!";
    }
    else
    {
        echo "Error:".$sql."<br>".mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Course Flix</title>
  <link rel="stylesheet" href="./styleMt1.css">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css'><link rel="stylesheet" href="./style.css">
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
              <a class="nav-link" href="http://localhost/course/menter.php">Mentor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/course/books.php">Books</a>
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
                <li><a class="dropdown-item" href="http://localhost/course/menter.php">Mentors</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/Course/reg.php">Booking</a>
            </li>
            
            <a href="http://localhost/Course/reg.php"><button" class="btn btn-outline-secondary">Get Started</button></a>

            <a href="http://localhost/course/login.php"><button type="button" class="btn btn-outline-secondary">Login</button></a>


          </ul>
          
        </div>
      </div>
    </nav>
  </header>
<div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-success mb-3">Cousre Flix</h4>
            <h1 class="display-4 m-0"><span class="text-primary">Mentors</span> List</h1>
        </div>
        <div class="row pb-3">
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2">
                    <img class="card-img-top" src="img1/my.jpg" alt=""height="300px" width="100px" lenght="100px">
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">Nithin S</h4>
                        <div class="d-flex mb-3">
                        <p>Senior Developer,IBM</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2">
                <img class="card-img-top" src="img1/man.jpg" alt=""height="300px" width="100px" lenght="100px">
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">Manoj MD</h4>
                        <div class="d-flex mb-3">
                        <p>Senior Developer,TCS</p>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2">
                    <img class="card-img-top" src="img1/har.jpg" alt=""height="300px" width="100px" lenght="100px">
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">Harshith S</h4>
                        <div class="d-flex mb-3">
                            <p>Senior Developer,Accenture</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2">
                    <img class="card-img-top" src="img1/vim.jpg" alt=""height="300px" width="100px" lenght="100px">
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">Vimarsh NM</h4>
                        <div class="d-flex mb-3">
                            <p>Senior Developer,X Spider</p>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    




<!-- Footer Start -->
<div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
  <div class="row pt-5">
      <div class="col-lg-4 col-md-12 mb-5">
          <h1 class="mb-3 display-5 text-capitalize text-white"><span class="text-primary">Course</span>Flix</h1>
          <p class="m-0">"For the best return on your money, pour your purse into your head."</p>
      </div>
      <div class="col-lg-8 col-md-12">
          <div class="row">
              <div class="col-md-4 mb-5">
                  <h5 class="text-primary mb-4">Get In Touch</h5>
                  <p><i class="fa fa-map-marker-alt mr-2"></i>Chikkamagalur,karnataka,India.</p>
                  <p><i class="fa fa-phone-alt mr-2"></i><a href="tel: +919972028267">+91 9972028267</a></p>
                  <p><i class="fa fa-envelope mr-2"></i> <a href="mailto:manojmd780@gmail.com">manojmd780@gmail.com</a></p>
                  <div class="d-flex justify-content-start mt-4">
                      <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                      <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                      <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                      <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                  </div>
              </div>
              <div class="col-md-4 mb-5">
                  <h5 class="text-primary mb-4">Popular Links</h5>
                  <div class="d-flex flex-column justify-content-start">
                      <a class="text-white mb-2" href="http://localhost/Course/index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                      <a class="text-white mb-2" href="http://localhost/Course/menter.php"><i class="fa fa-angle-right mr-2"></i>Mentors</a>
                      <a class="text-white mb-2" href="http://localhost/Course/books.php"><i class="fa fa-angle-right mr-2"></i>Books</a>
                      <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Courses</a>
                      <a class="text-white" href="http://localhost/Course/reg.php"><i class="fa fa-angle-right mr-2"></i>Booking</a>
                  </div>
              </div>
              <div class="col-md-4 mb-5">
                  <h5 class="text-primary mb-4">Newsletter</h5>
                  <form action="index.php" method="post">
                      <div class="form-group">
                          <input type="email" class="form-control border-0" placeholder="Your Email" required="required" />
                      </div>
                      <div>
                          <button class="btn btn-lg btn-primary btn-block border-0" type="submit">Submit Now</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="container-fluid text-white py-4 px-sm-3 px-md-5" style="background: #111111;">
  <div class="row">
      <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
          
      </div>
      <div class="col-md-6 text-center text-md-right">
          <ul class="nav d-inline-flex">
              <li class="nav-item">
                  <a class="nav-link text-white py-0" href="#">Privacy</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-white py-0" href="#">Terms</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-white py-0" href="#">FAQs</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-white py-0" href="#">Help</a>
              </li>
          </ul>
      </div>
  </div>
</div>
<!-- Footer End -->
</body>
</html>