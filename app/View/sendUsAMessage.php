<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
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

  <div id="firstCart" class="text-center"><br><br>
    <h1><br>Let's Talk.</h1>
    <h3>Share your excitement with us.</h3>
    <form class="myForm"  method="POST">
      <!--The action attribute is used to specify where
      we want to send the form data when the form is submitted -->
      <div class="form-field"><br>
        <label><br> Name: </label>
        <input required type="text" name="name"  placeholder="Enter your name!" />
      </div>
      <div class="form-field">
        <label><br> Email: </label>
        <input required type="text" name="email" placeholder="Enter email" />
      </div>
      <div class="textArea" style="padding: 2;">
        <label> Your Message:</label><br>
        <textarea required type="message" name="message" placeholder="Enter your message here!"></textarea>
      </div>
      <div class="form-field">
        <label>&nbsp; <br></label>
        <button id="myBtn" formaction="/sendUsAMessage" class="btn btn-primary" >Send </button><br>
      </div>
        <br>
        <br>
        <br><br>
    </form>
      <?php if (isset($_SESSION['contactUsMessage'])){ ?><div class="alert alert-<?=$_SESSION['status']?>"> <?=$_SESSION['contactUsMessage']?></div><?php } ?>
  </div>
</body>

<?php
$router->displayFooter();
?>

</html>