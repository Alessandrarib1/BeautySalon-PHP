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
  <h1>“You can't change the world, but you can change your nails.”</h1>
  <h3>How to Improve your Self Confidence by Getting your nails done</h3>

  <p>A manicure is an amazing way to look and feel amazing! Most hair and skin types love a manicure, however most nail
    beauticians have personally encountered women who suffer from low self-confidence resulting from a past live lesson.
    It is pretty crazy to think that most of the women I have met suffer from low self-esteem, let alone it being linked
    to manicures! It is crazy because most of us women do have self esteem, a lot more of it than some of us men, but
    not all of us women enjoy indulging in self expression for ourselves. Here are 3 ways your manicure can help in
    improving your self-confidence. <br>

    <br>As a young woman trying to find her way in this world, one of the most important things I need to have is self
    confidence. Self confidence comes in many different forms for many women, but nevertheless, no one succeeds without
    it. You need self confidence because it is the foundation of everything you are going to do. if you don't believe in
    yourself with anything you are doing, you will fail. If you don't believe in yourself, who else will?<br>
  </p>

  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button class="btn btn-primary" type="button">Make an Appointment</button>
  </div>
  <main>
      <?php
      $router->displayFooter();
      ?>

</body>

</html>