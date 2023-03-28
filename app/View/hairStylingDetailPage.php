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
$this->displayNavBar();
?>

<div class="myBackgroundHairStyling">
    <div class="container m-3" id="container">
        <div class="row" style="align-content: center; justify-items: center;">
            <div class="col-sm">
                <h1 class="hairH1">What Your Hair Wants You To Know</h1>
                <br>
                <br>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="hairH3">
                <h4>Craving a fresh new look? What comes to your mind first when thinking about a fresh new look; different makeup, new clothes, new accessories? Or maybe, a new HAIRCUT?! The one thing that can totally change your appearance and your personality – a new hair cut, a new style. True isn’t it?!</h4>
                    <h5 class="hairP"> Looking for a mood-boosting change? It is a widely known fact that a fresh haircut can transform your look and uplift your spirits. At our salon, we are committed to helping you achieve that feeling of confidence and radiance. Don't hesitate to book an appointment today and let our experts help you discover your best hair look yet!</h5>
                <a id="bookAppointment" class="btn btn-primary" href="/MakeAnAppointment">Make an appointment</a>
            </div>
            </div>
        </div><br><br><br>
        </div>
        </div>
</div>


      <?php
      $this->displayFooter();
      ?>

</body>

</html>