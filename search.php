<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
 <title>Search</title>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link rel="stylesheet" href="style.css">
</head>
<body class="navbarResponsive">
  <!--Nav -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="logo.jpeg" width="35" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggler="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
        <a class="nav-link" href="#" data-target="#mymodel" data-toggle="modal">Login</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!-- search -->
  <center>
    <div class="container">
      <h1>BHAago</h1>
      <form action="products.php" method="post" name="login" style="width: 500px; margin: auto">
   <div class="form-group">
     <input type="text" class="form-control" name="search1" placeholder="Search">
   </div>
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Start Price" name="Start-Price">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="End Price" name="End-Price">
    </div>
  </div>
<div class="aa">
   <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
   <button type="submit" name="search" value="search" class="btn btn-primary">Search</button>
 </div>
</div>
 </form>
</div>
</center>
<!-- create an account -->
<div class="container">
  <div class="modal" id="mymodel">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="text-primary">Login</h3>
          <button type="button" class="close" data-dismiss="modal">&times</button>
        </div>
       <div class="modal-body">
          <form action="" method="post" name="login" class="needs-validation" novalidate>
           <div class="input-group mb-5">
            <input type="text" class="form-control" placeholder="Your Email" name="email" required>
           <div class="input-group-append">
           <span class="input-group-text">@example.com</span>
          </div>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
           </div>
       <div class="form-group">
        <input type="password" class="form-control" placeholder="password" id="pwd2" name="password" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
    <div class="modal-footer  justify-content-center">
    <button  type="submit" class="btn btn-primary" name="login">Login</button>
    </div>
       </form>
   </div>
 </div>
</div>
</div>
</div>
<!-- connect -->
<hr class="my-4">
<div class="container-fluid padding">
  <div class="row text-center padding">
    <div class="col-12">
      <h2>Connect</h2>
    </div>
    <div class="col-12 social padding">
    <a href="#"><l class="fab fa-facebook"></l></a>
    <a href="#"><l class="fab fa-twitter"></l></a>
    <a href="#"><l class="fab fa-instagram"></l></a>
    <a href="#"><l class="fab fa-youtube"></l></a>
    </div>
  </div>
</div>
<script>
(function() {
  'use strict';
  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</body>
</html>
