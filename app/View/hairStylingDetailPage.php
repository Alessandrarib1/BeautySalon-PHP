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
<body class="body">

<?php

require_once('../Router/router.php');
$router = new Router();
$router->displayNavBar();
?>

<div class="myBackgroundHairStyling">
    <div class="container m-3 " id="container">

        <div class="row" style="align-content: center; justify-items: center;" >
            <div class="col-sm"><h1 class="hairH1">What Your Hair Wants You To Know</h1></div><br><br><br>
    </div>
        <div class="container m-3 ">
            <div class="row" style="align-content: center; justify-items: center;" >
                <div class="col-sm">
                    <h3 class="hairH3">
                            All you need to know about Healthy Hair, Hair Loss Prevention, Hair Restoration, Remedies, Solutions and Haircare,
                            from the Hair Doctors to the Nation.</h3>
                </div>
    </div>
            <div class="container m-3 ">
                <div class="row" style="align-content: center; justify-items: center;" >
                    <div class="col-sm"><p class="hairP">
                           Craving a fresh new look? What comes to your mind first when thinking about a fresh new look; different makeup, new
                                clothes, new accessories? Or maybe, a new HAIRCUT?! The one thing that can totally change your appearance and your
                                personality – a new hair cut, a new style. True isn’t it?!
                            </p>
                    </div>
                </div>
            </div>


  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button class="btn btn-primary" type="button">Make an Appointment</button>
  </div>
</div>

      <?php
      $router->displayFooter();
      ?>

</body>

</html>