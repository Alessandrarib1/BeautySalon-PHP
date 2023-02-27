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
<div class="myBackgroundMassage">
    <div class="container m-3" id="container">
        <div class="row" style="align-content: center; justify-items: center;">
            <div class="col-sm">
                <h1 class="massageH1">Recharge your battery with Massage Therapy</h1>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="hairH3">
                <h3>We have nothing to fear but missing our massage appointment time!</h3>
                <h3><br>10 Reasons to Get a Massage</h3>
                <h5 class="hairP">
                        <br>Relieve stress
                        <br>Relieve postoperative pain
                        <br>Reduce anxiety
                        <br>Manage low-back pain
                        <br>Help fibromyalgia pain
                        <br>Reduce muscle tension
                        <br>Enhance exercise performance
                        <br>Relieve tension headaches
                        <br>Sleep better
                        <br>Ease symptoms of depression
                    </h5>
                <button id="bookAppointment" class="btn btn-primary" type="button">Make an Appointment</button>
            </div>
        </div><br><br><br>
    </div>
</div>
</div>
  <main>
      <?php
      $router->displayFooter();
      ?>

</body>

</html>