<?php session_start(); ?>
<!doctype html>
<html lang="en">

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

<body>
<?php
$this->displayNavBar();
?>


  <body class="body"><br>
    <br>
    <div id="loginDiv" class="text-center col-12" style=" height: 500px;">
        <br><br>
        <br><br><br><h2>Login</h2>
      <form class="mt-5" method="POST" action="/login">
        <input type="text" name="username" placeholder="Username"><br><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <input id="loginButton" type="submit" name="LoginButton" value="Login"><br><br>
      </form>
        <?php
        if(isset($_SESSION['LoginError'])){ ?>
            <p> <?php echo $_SESSION['LoginError'];
                ?> </p>
            <?php
            unset($_SESSION['LoginError']);
        }?>
    </div>
  <?php
  $this->displayFooter();
  ?>
  </body>

</html>