<?php

$url = $_SERVER["REQUEST_URI"];

require_once("../Router/router.php");
$router = new router();
$router->route($url);

require_once("../Controller/HomeController.php");
$homeController = new HomeController();

require_once("../Controller/LoginController.php");
$loginController = new LoginController();

require_once("../Controller/AppointmentController.php");
$makeAnAppointment = new AppointmentController();