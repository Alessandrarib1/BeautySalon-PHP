<?php

class AppointmentController
{
  public function DisplayAppointmentMainPage()
  {
    require_once("../View/MakeAnAppointment.php");
  }
  public function DisplayEditAppointmentPage($appointment)
  {
      require_once("../Model/Appointment.php");
      require_once ("../Service/AppointmentService.php");
      $appointmentService = new AppointmentService();
      return $appointmentService->getById($appointment);
  }


    public function searchByService($service)
    {
        require_once("../Service/AdminService.php");
        $adminService = new AdminService();
        $adminService->getAppointmentByService($service);
    }
    public function searchByDate($date)
    {
        require_once("../Service/AdminService.php");
        $adminService = new AdminService();
        $adminService->getAppointmentByDate($date);
    }
    public function getAvailableSpotsByService($service, $date)
    {
        require_once("../Service/AdminService.php");
        $adminService = new AdminService();
        $adminService->getAppointmentByService($service, $date);
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
            require_once("../Service/AppointmentService.php");
            $appointmentService = new AppointmentService();
            $appointmentService->updateAppointment($appointment);
        }
    }

    public function editAppointmentValidateInput()
    {
        require_once("../View/editAppointment.php");
        //the content from this file has been moved to the router
    }


}