<?php
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Blood Center | home page"; ?>
<?php require 'head.php'; ?>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  
</head>

<style>
.fa {
  padding-top: 10px;
  font-size: 30px;
  height: 50px;
  width: 50px;
  text-align: end;
  text-decoration: none;
  
}

.fa:hover {
  color:white;
    opacity: 0.7;
}


</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <a class="navbar-brand" href="#">BLOOD CENTER</a>
  <img class="navbar-brand1" src="image/main-logo.png" alt="">  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="chat.html">CHAT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?#contact">Contact</a>
      </li>
        <li class="nav-item active">
        <a class="nav-link" href="login.php">Login<span class="sr-only">(current)</span></a>

      </li>
      <li class="nav-item active">

        <a class="nav-link" href="register.php">Register<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">

  
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/slide1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
  </div>
</div>

<section class="my-5" id="about">
  <div class="py-3">
    <h2 class="text-center">About Us</h2>
  </div>


  
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="image/about1.png" class="img-fluid aboutimg">
      </div>
      <div class="col-lg-6 col-md-6 col-12 ">
      <h2>BLOOD - "I'm here to save you!"</h2>
      <p class="py-3">We believe Every life counts!, Every life matters. Time is the thing we have and don't. Our goal is to make blood available in less time and save your precious life! <br> <br> <br> <span> Donate your blood & Save someone</span></p>
      <img src="image/signin.jpg" class="img-fluid aboutimg"><br>
      </div>
    </div>
  </div>
</section>


<section class="my-5" id="contact">
  <div class="py-3 text-center bg-dark text-white">
    <h2 class="text-center">Contact Us</h2>
  </div>
  <div>
  <p class="text-center bg-dark text-white">Siva :+91 7868974926 <br> Lalith :+91 8754695062 <br> Naresh :+91 9360205080 <br> Ajith : +91 7339040240 <br> Address : Magic Bus, Medavakkam, Chennai. <br>  Mail : <a style="text-decoration:none;color:white;" href="mailto:sivaponnusamy01@gmail.com" >sivaponnusamy01@gmail.com</a><br>  <a style="text-decoration:none;color:white;" >
  <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
  <a href="https://twitter.com/?lang=en" class="fa fa-twitter"></a>
  <a href="https://www.google.com/" class="fa fa-google"></a>
  <a href="https://www.youtube.com/" class="fa fa-youtube"></a>
  <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
  </div>
</section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <?php require 'footer.php'; ?>
  <style>

  </style>
</body>
</html>