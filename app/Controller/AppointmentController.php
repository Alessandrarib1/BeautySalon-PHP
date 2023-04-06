<?php
require_once("BaseController.php");
require_once("../Model/Appointment.php");
require_once("../Service/AppointmentService.php");
require_once("../Service/UserService.php");
require_once("../Service/ProductService.php");
require_once("../Service/AdminService.php");
require_once("../Model/Appointment.php");

class AppointmentController extends BaseController
{
    private $userService;
    private $appointmentService;
    private $productService;
    private $adminService;

    public function __construct()
    {
        $this->userService = new UserService();
        $this->appointmentService = new AppointmentService();
        $this->productService = new ProductService();
        $this->adminService = new AdminService();
    }

    public function DisplayAppointmentMainPage()
    {
        $users = $this->userService->getAll();
        $products = $this->productService->getAll();
        require_once("../View/MakeAnAppointment.php");
    }

    public function editAppointment()
    {
        $users = $this->userService->getAll();
        $products = $this->productService->getAll();
        $appointment = $this->appointmentService->getById($_POST['appointmentID']);
        require_once("../View/editAppointmentView.php");
    }


    public function updateAppointment()
    {
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['dateOfAppointment']) && !empty($_POST['startingTime']) && !empty($_POST['employee']) && !empty($_POST['service'])) {
            require_once("../Model/Appointment.php");
            $appointment = new Appointment();

            $updatedCustomerName = htmlspecialchars($_POST["name"]);
            $updatedEmail = htmlspecialchars($_POST["email"]);
            $updatedDateOfAppointment = htmlspecialchars($_POST["dateOfAppointment"]);
            $updatedStartingTime = htmlspecialchars($_POST["startingTime"]);
            $updatedEmployeeId = htmlspecialchars($_POST['employee']);
            $updatedProductID = htmlspecialchars($_POST['service']);

            $appointment->customerName = $updatedCustomerName;
            $appointment->email = $updatedEmail;
            $appointment->dateOfAppointment = $updatedDateOfAppointment;
            $appointment->startingTime = $updatedStartingTime;
            $appointment->employeeId = $updatedEmployeeId;
            $appointment->productID = $updatedProductID;
            $appointment->id = $_POST['id'];
            $this->appointmentService->updateAppointment($appointment);
            header("location: /ManagementMainPage");
        }
    }
    //future functionalities
   /* public function searchByService($service)
    {
        $this->adminService->getAppointmentByService($service);
    }

    public function searchByDate($date)
    {
        $this->adminService->getAppointmentByDate($date);
    }

    public function getAvailableSpotsByService($service, $date)
    {
        $this->adminService->getAppointmentByService($service, $date);
    }*/



}