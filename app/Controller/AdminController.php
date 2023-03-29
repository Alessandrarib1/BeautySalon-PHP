<?php
require_once("BaseController.php");
require_once ("../Service/AdminService.php");
class AdminController extends BaseController
{
    private $adminService;

    public function __construct() {

        $this->adminService = new AdminService();
    }

  public function DisplayManagementPage()
  {
    require_once("../View/ManagmentMainPage.php");
  }
    public function RegisterNewUser()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $this->DisplayRegisterUserPage();
        } else {
            if(isset($_POST['firstname'], $_POST['lastname'], $_POST['password'], $_POST['username'])) {
                require_once("../Model/User.php");
                $user = new User();
                $user->firstname = $_POST['firstname'];
                $user->lastname = $_POST['lastname'];
                $user->password = $_POST['password'];
                $user->username = $_POST['username'];
                require_once("../Service/AdminService.php");
                if ($this->adminService->createUser($user)) {
                    $registerUserMessage = "Message was sent successfully, we will get back to you soon!!!";
                    $status = "success";
                } else {
                    $registerUserMessage = "message was not sent!";
                    $status = "danger";
                }
        }
        }require_once("../View/RegisterUsers.php");
        // Pass $contactUsMessage and $status variables to the view
        return [$registerUserMessage, $status];
    }
    public function getAppointmentByService($service){

        $this->adminService->getAppointmentByService($service);
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