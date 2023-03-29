<?php
require __DIR__ . '/../Service/AppointmentService.php';
class apiController
{
    private $appointmentService;

    // initialize services
    function __construct()
    {
        $this->appointmentService = new AppointmentService();
    }

    // router maps this to /api/article automatically
    public function index()
    {
        // Respond to a GET request to /api/article
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $appointments = $this->appointmentService->getAllAppointments();
            header('Content-Type: application/json');
            echo json_encode($appointments);
        }

    }
    public function deleteAppointment(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $body = file_get_contents('php://input');
            $obj = json_decode($body);
            $this->appointmentService->deleteAppointment($obj->id);
        }
    }

    public function storeAppointment()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            require_once ("../Model/Appointment.php");
            $body = file_get_contents('php://input');
            $obj = json_decode($body);
            $appointment = new Appointment();

            $appointment->productID = $obj->service;
            $appointment->employeeId = $obj->employeeName;
            $appointment->startingTime = $obj->time;
            $appointment->dateOfAppointment = $obj->dateOfAppointment;
            $appointment->email = $obj->email;
            $appointment->customerName = $obj->name;
            session_start();
           if($this->appointmentService->bookAppointment($appointment)){
               $_SESSION['message'] = "Appointment was booked successfully!!!";
           }else{  $_SESSION['message'] = "An error has occurred, please try again!!"; }

            header("location: /ManagementMainPage");
    }

}


}