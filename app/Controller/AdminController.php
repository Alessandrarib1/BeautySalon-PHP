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
    public function getAppointmentByService($service){
        require_once("../Service/AdminService.php");
        $adminService = new AdminService();
        $adminService->getAppointmentByService($service);
    }

    public function DisplayRegisterUserPage()
    {
        require_once("../View/RegisterUsers.php");
    }

    public function DisplayAppointmentByServiceView()
    {
        require_once("../View/displayAppointmentByService.php");
    }


}