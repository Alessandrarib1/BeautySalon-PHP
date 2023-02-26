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

  <img src="..\pictures.4.jpg" class="img-fluid" alt="my background picture">
  <h1>INSERT A BACKGROUD PICTURE HERE!</h1>
  <h1>Recharge your battery with Massage Therapy</h1><br>
  <h2> We have nothing to fear but missing our massage appointment time. </h2>
  <h3><br>25 Reasons to Get a Massage</h3>
  <p>
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
    <br>Improve cardiovascular health
    <br>Reduce pain of osteoarthritis
    <br>Decrease stress in cancer patients
    <br>Improve balance in older adults
    <br>Decrease rheumatoid arthritis pain
    <br>Temper effects of dementia
    <br>Promote relaxation
    <br>Lower blood pressure
    <br>Decrease symptoms of Carpal Tunnel Syndrome
    <br>Help chronic neck pain
    <br>Lower joint replacement pain
    <br>Increase range of motion
    <br>Decrease migraine frequency
    <br>Improve quality of life in hospice care
    <br>Reduce chemotherapy-related nausea
  </p>
  <br>
  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button class="btn btn-primary" type="button">Make an Appointment</button>
  </div>
  <main>
      <?php
      $router->displayFooter();
      ?>

</body>

</html>