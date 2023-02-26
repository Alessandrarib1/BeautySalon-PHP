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
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Oitavo exemplo de barra de navegação">
    <div class="container"> <a class="navbar-brand" href="/homePage">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">Ribeiro's Beaty Salon</font>
        </font>
      </a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07"
        aria-controls="navbarsExample07" aria-expanded="false" aria-label="Alternar de navegação"> <span
          class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"> <a class="nav-link active" aria-current="page" href="/sendUsAMessage">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Contact Us</font>
              </font>
            </a> </li>
            <li>
                <?php
                if (isset($_SESSION['user'])){
                echo"<a class='nav-link' href='/ManagementMainPage'>Manage Appointments</a>"; ?>
            </li>
            <li>
                <?php
                echo"<a class='nav-link' href='/RegisterUser'>Register User</a>";
                }
                ?> </li>
          <li class="nav-item"> <a class="nav-link active" href="/MakeAnAppointment">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Make an Appointment</font>
              </font>
            </a> </li>


        </ul>
        </li>
        </ul>
      </div>
    </div>
          <?php
          if (isset($_SESSION['user'])){?>
              <button type="button" class="btn btn-success ;" onClick="location.href='/logOut'" STYLE="margin: 2px 30px;">Log
                  out</button>&nbsp;
         <?php
          } else{ ?>
    <button type="button" class="btn btn-success ;" onClick="location.href='/Login'" STYLE="margin: 2px 30px;"
      id="loginButton">Login</button>&nbsp;
<?php }?>
  </nav>
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
          require_once('../Router/router.php');
          $router = new Router();
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
  <span class="containerWithFooter expand-lg">
  <div id="footer" class="container">
    <footer id="footerHomePage" class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p style="color:#add5d5 ;" class="col-md-4 mb-0 ">© 2023 Ribeiro's Beauty Salon, Inc</p> <a
        href="https://getbootstrap-com.translate.goog/?_x_tr_sl=en&amp;_x_tr_tl=pt&amp;_x_tr_hl=pt-BR&amp;_x_tr_pto=sc"
        class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
          <use xlink:href="#bootstrap"></use>
        </svg> </a>
      <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="/homePage" class="nav-link px-2 " style="color:#add5d5">Home</a></li>
        <li class="nav-item"><a
            href="/sendUsAMessage"
            class="nav-link px-2 " style="color:#add5d5">Contact Us</a></li>
        <li class="nav-item"><a
            href="/MakeAnAppointment"
            class="nav-link px-2 " style="color:#add5d5">Make an Appointment</a></li>
      </ul>
      <div class="container pt-3 pb-2 mt-5 flex">
        <p class="mb-0" style="color:#add5d5" >Follow us on: </p>
       <a href="https://www.instagram.com/"> <i class="fa-brands fa-2x fa-instagram" id="instagram" > </i> </a>
        <! fa-2x doboubles the size of the icon––>
          <a href="https://twitter.com/"> <i class="fa-brands fa-2x fa-twitter"></i></a>
          <a href="https://www.linkedin.com/">  <i class="fa-brands fa-2x fa-linkedin"></i></a>
          <a href="https://www.facebook.com/"> <i class="fa-brands fa-2x fa-facebook"></i></a>
      </div>
    </footer>
  </div>
  </span>
</body>

</html>