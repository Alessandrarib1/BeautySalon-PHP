<?php /*session_start(); */?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"-->
<!--          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
</head>

<body class="body">
<?php

require_once('../Router/router.php');
$router = new Router();
$router->displayNavBar();
?>
  <div>
<br>
      <br>
      <div class="container flex-wrap justify-content-center ">
          <h1> Edit appointment </h1>
          <br>
          <br>
          <?php
          require_once ("../Model/Appointment.php");
          $appointment = $_SESSION['appointment'];

          ?>
          <form  class="form" method="post" action="/editAppointment">
              <div class="col-6" >
                  <label for="employee">Employee: </label>
                  <select name="employee" class="form-select">
                      <?php
                      $users = $router->getAllUsers();

                      foreach ($users as $user) {
                          ?>
                          <option value="<?=$user->id?>"> <?=$user->firstname?></option>
                      <?php } ?>
                  </select> <br>
                  <input value="<?=$appointment->id?>" hidden type="text" name="id">
                  <label for="Pick Date: ">Select Date</label>
                  <input  class="form-control" name="dateOfAppointment" type="date" value="<?= $appointment->dateOfAppointment?>">
                  <br> <br>
                  <label for="Pick Time: ">Select Time</label>
                  <input class="form-control" type="time"  name="startingTime" value="<?= $appointment->startingTime?>">  <br> <br>
                  <label for="Name: ">Name: </label>
                  <input class="form-control" type="text" name="name" value="<?php echo $appointment->customerName ?>" placeholder="name"><br><br>
                  <label for="email: ">Email: </label>
                  <input class="form-control" type="email" name="email" placeholder="email" value="<?=$appointment->email?>"><br><br>
                  <select name="service" class="form-select">

                      <?php
                      $products = $router->getAllProducts();
                      foreach ($products as $product) {
                          ?>
                          <option value="<?=$product->id?>"> <?php echo $product->productName ?></option>
                      <?php } ?>
                  </select> <br>
                  <input class="btn btn-primary my-3" type="submit" name="BookNow" value="Update Appointment"><br><br>
              </div>
          </form>
          <div id="footer" class="container">
              <?php
              $router->displayFooter();
              ?>
          </div>
          </body>
</html>



