<?php
session_start();
$curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_URL => "https://price-api.datayuge.com/api/v1/compare/search?api_key=FesFoDCVzzZ6q7CE6QV4hlV0dkuLEEREKyo&product=".$_SESSION['pname']."&price_start=".$_SESSION['sprice']."&price_end=".$_SESSION['eprice']."&page=1",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
  echo "cURL Error #:".$err;
} else {
  $url = "https://price-api.datayuge.com/api/v1/compare/search?api_key=FesFoDCVzzZ6q7CE6QV4hlV0dkuLEEREKyo&product=".$_SESSION['pname']."&price_start=".$_SESSION['sprice']."&price_end=".$_SESSION['eprice']."&page=1";
  $array = file_get_contents($url);
  $i = json_decode($array,true);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Products</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<!-- Navigation bar-->
  <header>
    <nav class="nav__ navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img src="logo.jpeg" width="35" alt="logo">
  </a>
  <a class="navbar-brand" href="#">
    <h4 style="color:white;">BHAago</h4>
  </a>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
     <li class="nav-item active">
       <a class="nav-link" href="#">cart <span class="sr-only">(current)</span></a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="#">Gift Cards</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="#">Special offers</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="#">Sale</a>
     </li>
      </ul>
    </div>
    </div>
  </nav>
  </header>

<main>
<div class="main_s">
</br>
</br>
      <div class="container-fluid">
    <?php for($k=0 ; $k< count($i['data']) ;$k++)

       { ?>

      <div class="row">
        <div class="col-sm-1 col-md-1 bg-sucess"></div>
        <div class="col-sm-4 col-md-4 bg-sucess">
        <!-- card -->
        <div class="container-fluid padding">
          <div class="row padding">
              <div class="card">
                <img class="card-img-middle" src="<?php echo $i['data'][$k]['product_image']; ?>" height="200">
              </div>
          </div>
        </div>
        <br>
        </div>
        <div class="col-sm-4 col-md-4 bg-sucess">

          <h6><b><?php echo $i['data'][$k]['product_title']; ?></b></h6>
          <h6><?php echo "Lowest Price: Rs ".$i['data'][$k]['product_lowest_price'];?></h6>
          <h6><?php echo "Rating: ".$i['data'][$k]['product_rating'];  ?></h6>
          <h6><?php echo $i['data'][$k]['product_category']; ?></h6>
          <h6><?php echo $i['data'][$k]['product_sub_category']; ?></h6>
          <h6><?php echo $i['data'][$k]['product_id']; ?></h6>
          <br>
        </div>
        <div class="col-sm-2 col-md-2 bg-sucess">
          <form action="" method="post" name="login">
          <a class="btn btn-info" href="product.php?product_id=<?php echo $i['data'][$k]['product_id']; ?> &image=<?php echo $i['data'][$k]['product_image'];; ?>">More Details...</a>
        </form>
        </div>
        <div class="col-sm-1 col-md-1 bg-sucess"></div>
      </div>
      <br>

    <?php
  }
  ?>
    </div>

  </div>
  <footer class="page-footer font-small cyan darken-3 bg-dark">
    <div class="container">
      <center>
        <br>
        <br>
        <h2 style= "color:  #d1c5cd">Contact Us</h2>
        <br>
        <div class="mb-5 flex-center">
          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x" style="color:blue;"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x" style="color:blue;"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x" style="color:green;"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x" style="color:blue;"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x" style="color:pink;"> </i>
          </a>
          <!--Pinterest-->
          <a class="pin-ic">
            <i class="fab fa-pinterest fa-lg white-text fa-2x" style="color:white;"> </i>
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
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" style="color:white;">© 2020 Copyright: KN.com
    </div>

  </footer>
</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  </body>
  </html>
