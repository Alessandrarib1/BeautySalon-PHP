<?php

if(isset($_POST['LoginButton'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    require_once('../Service/UserService.php');
    $userService = new UserService();
    $user = $userService->validateLogin($username, $password);
    if($user  != null){
        $_SESSION['user'] = $user;
        header("location: /ManagementMainPage");
    }else{
        $_SESSION['LoginError'] = "Username or password incorrect!";
        header("location: /Login"); }
}
