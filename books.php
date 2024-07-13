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
  <title>CodePen - Just another carousel using swiper #swiper.js #scss</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css'><link rel="stylesheet" href="./styleBk.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
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
              <a class="nav-link active" aria-current="page" href="http://localhost/Course/index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/Course/menter.php">Mentor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/Course/books.php">Books</a>
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
                <li><a class="dropdown-item" href="http://localhost/Course/menter.php">Mentors</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/Course/reg.php">Booking</a>
            </li>
            
            <a href="http://localhost/Course/reg.php"><button type="button" class="btn btn-outline-secondary">Get Started</button></a>

            <a href="http://localhost/Course/login.php"><button type="button" class="btn btn-outline-secondary">Login</button></a>


          </ul>
          
        </div>
      </div>
    </nav>
  </header>

<!-- partial:index.partial.html -->
<main>
  
  <div class="content">
    <h2>Welcome to Online Book Store</h2>
    <p> "Explore literary worlds at your fingertips with a vast collection of books on BookishHaven - your go-to online destination for immersive reading experiences."</p>
    <ul class="counter">
      <li>
        <h3><i class="fa-solid fa-book"></i>6</h3>
        <span>book collections</span>
      </li>
      <li>
        <h3><i class="fa-solid fa-user"></i>1k</h3>
        <span>customers</span>
      </li>
    </ul>
    <a href="https://drive.google.com/drive/folders/1Pfo4t4-LYJZvS6tdS_2VXgfG9D8QzG1q"><button class="btn">Go to Collections <i class="fa-solid fa-arrow-right"></i></button></a>
  </div>

  <div class="swiper-container">
    <div class="swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide swiper-slide--one">

          <span>bestseller</span>
          <div class="slide-content">
            <h3>Desiners choice</h3>

          </div>
        </div>
        <div class="swiper-slide swiper-slide--two">
          <span>bestseller</span>
          <div class="slide-content">
            <h3>Machine learning</h3>
            

          </div>

        </div>
        <div class="swiper-slide swiper-slide--three">
          <span>bestseller</span>

        </div>
        <div class="swiper-slide swiper-slide--four">
          <span>bestseller</span>

        </div>
        <div class="swiper-slide swiper-slide--five">
          <span>bestseller</span>

        </div>
        <div class="swiper-slide swiper-slide--six">
          <span>bestseller</span>
          <div class="slide-content">
            <h3>Data science</h3>
          </div>

        </div>

      </div>

    </div>

    <div class="swiper-pagination"></div>
  </div>
  <div class="circle"></div>
</main>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js'></script><script  src="./sciptBk.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

 <!-- Footer Start -->
<div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5">
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
                  <p><i class="fa fa-envelope mr-2"></i><a href="mailto:manojmd780@gmail.com">manojmd780@gmail.com</a></p>
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
