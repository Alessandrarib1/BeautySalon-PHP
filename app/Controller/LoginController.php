<?php
require_once("BaseController.php");
class LoginController extends BaseController
{

    public function displayLoginPage()
    {
        require_once("../View/LoginView.php");
    }

    public function LogOut()
    {
        require_once("../View/logOut.php");
    }


}