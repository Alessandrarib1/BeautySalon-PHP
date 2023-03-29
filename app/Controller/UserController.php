<?php
require_once("BaseController.php");
require_once('../Service/UserService.php');

class UserController extends BaseController
{
    private $userService;
    public function __construct()
    {
        $this->userService = new UserService();
    }
    public function getAllUsers()
    {
        return $this->userService->getAll();
    }


}