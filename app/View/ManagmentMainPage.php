<?php
session_start();
if (!isset($_SESSION['user'])) {
header('location:/Login');
exit();
}?>
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
  <div id="myAppointmentsH1">
<br>
      <br>
<h1 style="text-align:center"> Appointments </h1>
      <div id="appointments" class="d-flex flex-wrap p-5" style="min-height: 500px;">
      </div>

  </div>

<div>
    <script>
        function loadData() {
            const articleDiv = document.getElementById('appointments');
            articleDiv.innerHTML = '';

            fetch('http://localhost/api/appointments')
                .then(result => result.json())
                .then((appointments)=>{
                    appointments.forEach(appointment => {
                        appendAppointment(appointment);
                    })
                })
        }

        function appendAppointment(appointment){

            const articleDiv = document.getElementById('appointments');

            const div = document.createElement('div');
            div.classList.add('col-3');

            const card = document.createElement('div');
            card.classList.add('card', 'shadow-sm',  'm-3');
            card.id = ('appointmentsCard');


            const text = document.createElement('text');
            text.setAttribute('x', '50%');
            text.setAttribute('y', '50%');
            text.setAttribute('fill', '#eceeef');
            text.setAttribute('dy', '.3em');
            text.innerText = appointment.productName;

            const body = document.createElement('div');
            body.classList.add('card-body');


            const pProductName = document.createElement('p');
            pProductName.classList.add('card-text');
            pProductName.innerText ="Service: " + appointment.productName;


            const pStartingTime = document.createElement('p');
            pStartingTime.innerText = "starting Time: " + appointment.startingTime;

            const pDuration = document.createElement('p');
            pDuration.innerText = "Duration: " + appointment.duration + " minutes";


            const pEmployee = document.createElement('p');
            pEmployee.innerText = "Employee: " + appointment.userFirstname;


            const div2 = document.createElement('div');
            div2.classList.add('d-flex', 'justify-content-between', 'align-items-center');

            const divButton = document.createElement('div');
            divButton.classList.add('btn-group');

            const form = document.createElement('form');
            form.method='post';

            const inputCancelButton = document.createElement('input');
            inputCancelButton.type = 'submit';
            inputCancelButton.name = 'cancelButton';
            inputCancelButton.classList.add('btn', 'btn-outline-danger', 'm-2');
            inputCancelButton.value = 'Delete Appointment';
            inputCancelButton.setAttribute('onclick','deleteAppointment(this)');
            inputCancelButton.id = appointment.id;

            const inputEditButton = document.createElement('input');
            inputEditButton.type = 'submit';
            inputEditButton.name = 'editButton';
            inputEditButton.classList.add('btn', 'btn-primary');
            inputEditButton.value = 'edit';
            inputEditButton.formAction = '/editAppointmentView';

            const inputTextId = document.createElement('input');
            inputTextId.type = 'text';
            inputTextId.name = 'appointmentID';
            inputTextId.value = appointment.id;
            inputTextId.hidden = true;

            articleDiv.append(div);
            div.append(card);
            body.append(pProductName);
            body.append(pStartingTime);

            body.append(pDuration);
            body.append(pEmployee);
            form.append(inputCancelButton);
            form.append(inputEditButton);
            form.append(inputTextId);

            div2.append(form);
            body.append(div2);
            card.append(body);

        }
        loadData();
    </script>
</div>

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
<script>
    function deleteAppointment(e){

        var form = e.parentElement;
        var div = form.parentElement;
        var div2 = div.parentElement;
        var body = div2.parentElement;
        var card = body.parentElement;
        card.remove();
        var id = e.id;

        var obj = {
            id: id,
        }

        fetch('http://localhost/api/appointments/delete', {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify(obj)
        }).then(function (response) {
            return response.json()
        })
    }

</script>
<script>


</script>
</body>

</html>