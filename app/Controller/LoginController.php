<?php

class LoginController
{

    public function displayLoginPage()
    {
        require_once("../View/LoginView.php");
    }
    public function validateLogin()
    {
        require_once("../Service/UserService.php");

        require_once("../Router/router.php");
        $router = new router();
        $router->route("/ManagementMainPage");

    }
}