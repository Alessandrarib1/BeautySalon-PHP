<?php

class AdminController
{

  public function DisplayManagementPage()
  {
    require_once("../View/ManagmentMainPage.php");
  }


    public function RegisterNewUser($user)
    {
        require_once("../Service/AdminService.php");
        $adminService = new AdminService();
        $adminService->createUser($user);
    }


}