<?php
require __DIR__ . '/../Service/AppointmentService.php';
class api
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
            // your code here
            // return all articles in the database as JSON

        }

        // Respond to a POST request to /api/article
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // your code here
            // read JSON from the request, convert it to an article object
            // and have the service insert the article into the database

        }
    }
    public function deleteAppointment(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // your code here
            $body = file_get_contents('php://input');
            $obj = json_decode($body);

            $this->appointmentService->deleteAppointment($obj->id);
        }
    }

    public function storeAppointment()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // your code here

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

            $this->appointmentService->bookAppointment($appointment);
    }

}


}