<?php
require_once("BaseController.php");
class AdminController extends BaseController
{

  public function DisplayManagementPage()
  {
    require_once("../View/ManagmentMainPage.php");
  }


    public function RegisterNewUser()
    {
        require_once ("../Model/User.php");
        $user = new User();
        $user->firstname = $_POST['firstname'];
        $user->lastname = $_POST['lastname'];
        $user->password = $_POST['password'];
        $user->username = $_POST['username'];
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