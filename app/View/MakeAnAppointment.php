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
<main>
    <?php
    $this->displayNavBar();
    ?>
<div id="makeAppointment" class="text-center" style="min-height: 400px;"><br>
    <br>
    <h1 class="text-center"> Book your appointment</h1>
    <br>
    <br>
    <form  class="row g-3" method="post">
        <div class="row justify-content-evenly" >
            <div class="col-4">
            <label for="Name: ">Name: </label>
                <input required id="name" class="form-control" type="text" name="name" placeholder="name"><br><br></div>
            <div class="col-4">
            <label for="email: ">Email: </label>
                <input required id="email" class="form-control" type="email" name="email" placeholder="email"><br><br></div>
            <div class="row justify-content-evenly" >
             <div class="col-4">
            <label for="employee">Select Employee: </label>
        <select required id="employeeName" name="employee" class="form-select">
            <?php
            foreach ($users as $user) {
                ?>
                <option value="<?=$user->id?>"> <?php echo $user->firstname ?></option>
            <?php } ?>
        </select> <br></div>
            <div class="col-4">
                <label for="service: ">Select Service: </label>
                <select required id="service" name="service" class="form-select">
                    <?php
                    foreach ($products as $product) {
                        ?>
                        <option value="<?=$product->id?>"> <?php echo $product->productName ?></option>
                    <?php } ?>
                </select>
         <br> <br></div>
            </div>
            <div class="row justify-content-evenly" >
            <div class="col-4">
            <label for="Pick Time: ">Select Time</label>
                <input required  id="time" class="form-control" type="time"  name="startingTime"> <br> <br></div>
            <div class="col-4">
                <label for="Pick Date: ">Select Date</label>
                <input required id="dateOfAppointment" class="form-control" type="date"  name="dateOfAppointment">
            </div></div> <br>
        <input id="bookNow" class="d-grid gap-2 col-3 align-right mx-auto m-3" type="submit" name="BookNow" onclick="sendForm(this)" value="Book Now"><br><br>
            </div>
    </form>
    <br><br>
    <?php if (isset($_SESSION['message'])){ ?><div class="alert alert-success"> Appointment booked successfully?</div><?php } ?>
</div>
    <?php
    $this->displayFooter();
    ?>

</main>
<script>
    function sendForm(e){
        var dateOfAppointment = document.getElementById("dateOfAppointment").value;
        var time = document.getElementById("time").value;
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var service = document.getElementById("service").value;
        var employeeName = document.getElementById("employeeName").value;

        var appointment = {dateOfAppointment: dateOfAppointment, time: time, name: name, email: email,service: service, employeeName: employeeName }

        fetch('http://localhost/api/appointments/store', {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify(appointment)
        }).then(function (response) {
            if (response.ok) {
                // show success message to user
                document.getElementById("message").innerHTML = "Appointment booked successfully";
                document.getElementById("message").classList.add("alert", "alert-success");
            } else {
                // show error message to user
                document.getElementById("message").innerHTML = "Error booking appointment";
                document.getElementById("message").classList.add("alert", "alert-danger");
            }
        })
            .catch(function (error) {
                // show error message to user
                document.getElementById("message").innerHTML = "Error booking appointment";
                document.getElementById("message").classList.add("alert", "alert-danger");
            });
    }
</script>
</body>
</html>