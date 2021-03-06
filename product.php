<?php
session_start();
$curl = curl_init();
if(isset($_GET['product_id']))
{
  $product_id=$_GET['product_id'];
  $image=$_GET['image'];
}
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://price-api.datayuge.com/api/v1/compare/detail?api_key=suwVAxHngQ7O3a3TorWBKqSgFqNXlQqB27V&id=".$product_id,
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
  $i = json_decode($response,true);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>shops</title>
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
  </div>
</nav>
</header>



<div class="row">
  <div class="col-sm-2 col-md-2 col-xs-2 col-lg-2"></div>
    <div class="col-sm-8 col-md-8 col-xs-8 col-lg-8">
      <div class="row">
      <div class="col-sm-4 col-md-4 col-xs-4 col-lg-4">
      <br>
      <br>
      <div class="card">
        <img class="card-img" src="<?php echo $image; ?>"  >
      </div>
    </div>
    <div class="col-sm-2 col-md-2 col-xs-2 col-lg-2"></div>
    <div class="col-sm-6 col-md-6 col-xs-6 col-lg-6">
      <br>
      <br>
      <div class="form-group">
      <h4><b><?php echo $i['data']['product_name']."<br>"; ?></b></h4>
    </div>
      <h5><?php echo "Model: ".$i['data']['product_model']."<br>"; ?></h5>
      <h5><?php echo "Brand: ".$i['data']['product_brand']."<br>"; ?></h5>
      <h5><?php echo "Rating: ".$i['data']['product_ratings']."<br>"; ?></h5>
      <h5><?php echo "Price: Rs ".$i['data']['product_mrp']."<br>"; ?></h5>
    </div>
  </div>
  <br>
      <?php
      $n=count($i['data']['available_colors']);
      if($n>1)
      {
      ?>
      <h5><?php echo "<br>"."Available Colours: "; ?></h5>
      <br>
      <div class="btn-group" role="group" aria-label="Basic example">
      <?php
      for($k=1 ; $k< $n ;$k++)
      {
        ?>
        <button style="border: 0.4px solid black;color:black;"  name="<?php echo $i['data']['available_colors'][$k]." "; ?>" class="btn btn-light btn-lg"><?php echo $i['data']['available_colors'][$k]." "; ?></button>
      <?php
      }
    }
      ?>
    </div>
      <br>
      <br>
      <br>
      <h5>Images:</h5>
<div class="row">
   <?php
   $n1=count($i['data']['product_images']);
   for($k=0 ; $k< $n1 ;$k++)
   {
     ?>
     <div class="col">
       <br>
     <div class="container-fluid padding">
       <div class="row padding">
           <div class="card">
             <img class="card-img-middle" src="<?php echo $i['data']['product_images'][$k]; ?>" height="200" >
           </div>
       </div>
     </div>
   </div>
     <?php
 }
   ?>
</div>
 <br>
 <br>

  </div>
  <div class="col-sm-2 col-md-2 col-xs-2 col-lg-2"></div>
</div>

<?php
$a = $i['data']['stores'];
foreach ($a as $b => $v) {
  foreach ($v as $c => $va) {
    if(empty($va))
    {
    }
      else {
        ?>
<div class="container-fluid">
<div class="row">
  <div class="col-sm-2 col-md-2 col-xs-2 col-lg-2"></div>
  <div class="col-sm-8 col-md-8 col-xs-8 col-lg-8">
    <div class="main-section">
      <div class="modal-content">
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-2 col-md-2 col-xs-2 col-lg-2">
                <br>
                <br>
                <div class="container-fluid padding">
                  <div class="row padding">
                      <div class="card">
                        <img class="card-img-middle" src="<?php echo $va['product_store_logo']; ?>" >

                      </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-1 col-md-1 col-xs-1 col-lg-1"></div>
              <div class="col-sm-7 col-md-7 col-xs-7 col-lg-7">
           <h4><?php echo $va['product_store'];?></h4>
           <h6><?php echo "Price : Rs ".$va['product_price']."<br>"; ?></h6>
           <h6><?php  echo "MRP : Rs ".$va['product_mrp']."<br>"; ?></h6>
           <h6><?php  echo "Product Color : ".$va['product_color']."<br>"; ?></h6>
           <h6><?php echo "Product Delivery : ".$va['product_delivery']." Days"."<br>"; ?></h6>
           <h6><?php echo "Delivery Cost : Rs ".$va['product_delivery_cost']."<br>"; ?></h6>
         </div>
         <div class="col-sm-2 col-md-2 col-xs-2 col-lg-2">

           <a href="<?php echo $va['product_store_url']."<br>";?>" class="btn btn-warning" target="_blank" >Buy Now</a>
         </div>
         </div>
          </div>
        </div>
      </div>
      <br>
  </div>
  <div class="col-sm-2 col-md-2 col-xs-2 col-lg-2"></div>
</div>
</div>
<br>
<?php
}
}
}
}
 ?>
 <br>
 <br>
 <br>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</body>
</html>
