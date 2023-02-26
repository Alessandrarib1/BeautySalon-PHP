<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap example</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style/style.css">
</head>

<body class="homepageBody">
    <?php

    require_once('../Router/router.php');
    $router = new Router();
     $router->displayNavBar();
    ?>
  <main>
    <div id="firstCart" class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
      <div  id="2ndCart" class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-6 fw-normal">Ribeiro's Beauty Salon </h1>
        <p class="lead fw-normal">YOU FEEL BETTER WHEN YOU LOOK BEAUTIFUL</p>

        <a class="btn btn-primary" href="/MakeAnAppointment">Make an appointment</a>


      </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
    <div id="lightPinkBackground" class="album py-5 ">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

          <?php
          $products = $router->getAllProducts();

          foreach ($products as $product) {
              ?>
          <div class="col">
            <div id="darkPinkBackground" class="card shadow-sm">
                <a href="/<?=$product->productName?>"> <img class="productPictures" src="<?=$product->imageSRC?>"
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                         role="img" aria-label="Placeholder: Hair cut" preserveAspectRatio=" xMidYMid slice" focusable="false">
                </a>
                <rect  width="100%" height="100%" fill="#55595c"></rect>
                <text class="text-center" x="50%" y="50%" fill="#eceeef" dy=".3em" style="font-weight: bold">
                  <?= $product->productName; ?>
                </text>
              </svg>
              <div class="card-body">
                <p class="card-text"> <?= $product->description; ?>
                  <br>
                <p> Price: &#x20AC; <?= $product->price; ?> <br></p>
                <p> Durarion: <?= $product->duration; ?> mintutes <br></p>
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="/<?=$product->productName?>" class="btn btn-outline-primary" STYLE="margin: 1px 5px;">More about the
                      service</a>
                    <a class="btn btn-primary" href="/MakeAnAppointment">Make an Appointment</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php }
          ?>

  </main>
 <?php
 $router->displayFooter();
 ?>
</body>

</html>