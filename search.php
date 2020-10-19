<?php
session_start();
if(isset($_POST['search']))/* $_POST to fetch in php*/
{

  $p_name=  $_POST['pname'];
	$s_price= $_POST['sprice'];
  $e_price= $_POST['eprice'];
  $_SESSION['pname']=$p_name;
  $_SESSION['sprice']=$s_price;
  $_SESSION['eprice']=$e_price;
  if(empty($p_name))
  {
    echo '<script>alert("Enter product name ")</script>';
  }
  else
	  header('location:products.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fastdeal</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<link rel="stylesheet" href="index.css">
<body>
<!--navigation bar-->
<header>
  <nav class="nav__ navbar navbar-expand-md navbar-dark bg-dark sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="logo.jpeg" width="70" height="70" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggler="collapse" data-target="#navbarResponsive">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">



              <form class="form-inline" action="#" method="post" name="login" class="needs-validation" novalidate>

           <input type="email" name="email" class="form-control" placeholder="Email" required>
          <div class="input-group-append">

         </div>
         <div class="valid-feedback">Valid.</div>
         <div class="invalid-feedback">Please fill out this field.</div>

           <input type="password" name="password" class="form-control" placeholder="password" id="pwd" required>
           <div class="valid-feedback">Valid.</div>
           <div class="invalid-feedback">Please fill out this field.</div>

         <button type="submit" name="Login" class="btn btn-success"><i class="fas fa-sign-in-alt"></i> Login</button>

        </form>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#contact_us">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</header>
<main>
  <!--  search bar-->

  <center>
</br>
<br>
<br>
</br>
<br>
<br>
<div class="row">
<div class="col-sm-3 col-md-3 col-xs-3 col-lg-3 "></div>
<div  class="col-sm-6 col-md-6 col-xs-6 col-lg-6 ">
<div class="modal-content">
  <div class="modal-content">
    <div class="modal-body">
  <div>
    <h2>Fastdeal</h2>
    <br>
  <p class "text-center" style="color:green;">INdia's FAStest ONLine SHOPing SiTe Is HeRe</p>
  <br>
</div>
    <form action="#" method="post" name="login" style="width: 500px; margin: auto">
 <div class="form-group">
   <input type="text" class="form-control" name="pname" placeholder="product name">
 </div>
<div class="form-row">
  <div class="col">
    <input type="text" class="form-control" placeholder="Start price" name="sprice">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="End Price" name="eprice">
  </div>
</div>
<br>
<br>
<div class="aa">
 <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
 <button type="submit" name="search" value="search" class="btn btn-primary">Search</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="col-sm-3 col-md-3 col-xs-3 col-lg-3 "></div>
</div>
</center>
<br>
<br>
<div class="row">
<div class="col-sm-4 col-md-4 "></div>
<div class="col-sm-4 col-md-4 ">
<h3>Don't have an account yet?</h3>
<button style="border: 1px solid black;color:black;background-color:lightgray;"class="btn btn-secondary" data-target="#mymodel" data-toggle="modal">Registration</button>
</div>!
</div>

<div class="container">
  <div class="modal" id="mymodel">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="text-dark" style= "padding:10px;color:black;">Create Your Account</h3>
          <button type="button" class="close" data-dismiss="modal">&times</button>
        </div>
       <div class="modal-body">
          <form action="#" method="post" name="login" class="needs-validation" novalidate>
            <div class="input-group mb-5">
            <div class="input-group">
            <div class="input-group-prepend">
           <span class="input-group-text" id="inputGroupPrepend">@</span>
           </div>
          <input type="text" name="username" class="form-control" placeholder="Username" aria-describedby="inputGroupPrepend" required>
         <div class="invalid-feedback">
           Please choose a username.
          </div>
        </div>
        </div>
           <div class="input-group mb-5">
            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
           <div class="input-group-append">
           <span class="input-group-text">@example.com</span>
          </div>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
           </div>
       <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="password" id="pwd" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
    <div class="modal-footer  justify-content-center">
    <button type="submit" name="confirm" class="btn btn-success"> Confirm</button>
    </div>
       </form>
   </div>
 </div>
</div>
</div>
</div>
<!-- connect -->
<footer class="con">
<div class="container">
<section id="contact_us">
<center>
<br>
<br>
<h1 style= "color:  #d1c5cd">Contact Us</h1>

<div class="mb-5 flex-center">
<!-- Facebook -->
<a class="fb-ic">
  <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x" style="font-size:50px;color: #3b5998;"> </i>
</a>
<!-- Twitter -->
<a class="tw-ic">
  <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x" style="font-size:50px;color: #00aced;"> </i>
</a>
<!-- Google +-->
<a class="gplus-ic">
  <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x" style="font-size:50px;color:green"> </i>
</a>
<!--Linkedin -->
<a class="li-ic">
  <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x" style="font-size:50px; color: #0e76a8"> </i>
</a>
<!--Instagram-->
<a class="ins-ic">
  <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x" style="font-size:50px;  color: pink;"> </i>
</a>

</div>
<div class="row">
  <div class="col-sm-4 col-md-4 col-xs-4 col-lg-4"></div>
  <div class="col-sm-2 col-md-2 col-xs-2 col-lg-2">
<a class="phone">
  <i class="fa fa-phone" aria-hidden="true" style="font-size:36px;color: #d1c5cd"> </i>
  <br>
  <h5 style="font-size:20px;color: #d1c5cd">777777777</h5>
</a>
</div>
<div class="col-sm-2 col-md-2 col-xs-2 col-lg-2">
<!--Pinterest-->
<a class="email">
  <i class="fa fa-envelope" aria-hidden="true" style="font-size:36px;color: #d1c5cd"> </i>

    <h6 style="font-size:20px;color: #d1c5cd">123@gmail.com</h6>
</a>
</div>
<div class="col-sm-4 col-md-4 col-xs-4 col-lg-4"></div>
</div>
</center>

</section>
</div>
<!-- Copyright -->
<div class="footer-copyright text-center py-3" style="color: #d1c5cd">© 2020 Copyright: KSsquare.com
</div>
<br>
<br>

</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
  </html>
