<?php //session_start();?>
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

<body class="body">

<?php
$this->displayNavBar();
?>
    <div id="createUserDiv" class="text-center" style="min-height: 500px;">
        <br><br>      <br><br>
      <h2>Create new User</h2>
      <form method="POST" action="/RegisterUser">
        <input required type="text" name="username" placeholder="Username"><br><br>
        <input required type="password" name="password" placeholder="Password"><br><br>

          <input required type="text" name="firstname" placeholder="First name"><br><br>
          <input required type="text" name="lastname" placeholder="Last name"><br><br>
        <input id="createUserButton" type="submit"  name="Create new User" value="Create new User"><br><br>
      </form>
        <?php if (isset($registerUserMessage)){ ?>
            <div class="alert alert-<?= $status ?>">
                <?= $registerUserMessage ?>
            </div>
        <?php } ?>
    </div>
    <?php
    $this->displayFooter();
    ?>
    </body>
