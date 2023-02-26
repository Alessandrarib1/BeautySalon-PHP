<?php

class UserController
{
        public function getAllUsers(){
            require_once('../Service/UserService.php');
            $userService = new UserService();
            return $userService->getAll();
        }

    public function validateLogin($username, $password)
    {
        require_once('../Service/UserService.php');
        $userService = new UserService();
        return $userService->validateLogin($username, $password);

    }
}