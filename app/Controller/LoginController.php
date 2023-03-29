<?php
require_once("BaseController.php");
require_once("../Service/UserService.php");
class LoginController extends BaseController
{

    public function processLoginRequest()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $this->displayLoginPage();
        } else {
            $this->validateLogin($_POST['username'], $_POST['password']);
        }
    }
    public function displayLoginPage()
    {
        require_once("../View/LoginView.php");
    }
    public function validateLogin()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $userService = new UserService();
        $user = $userService->validateLogin($username, $password);

        if ($user != null) {
            $_SESSION['user'] = $user;
            header("location: /ManagementMainPage");
        } else {
            $_SESSION['LoginError'] = "Username or password incorrect!";
            $this->displayLoginPage();
        }
    }
/*
 *  $contactUsMessage = "Message was sent successfully, we will get back to you soon!!!";
            $status = "success";
        } else {
            $contactUsMessage = "message was not sent!";
            $status = "danger";
        }
        require_once("../View/sendUsAMessage.php");
        // Pass $contactUsMessage and $status variables to the view
        return [$contactUsMessage, $status];
 * */


}