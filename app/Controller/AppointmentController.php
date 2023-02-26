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
    public function updateAppointment($appointment){
        require_once("../Service/AppointmentService.php");
        $appointmentService = new AppointmentService();
        $appointmentService->updateAppointment($appointment);
    }

    public function editAppointmentValidateInput()
    {
        require_once("../View/editAppointment.php");
        //the content from this file has been moved to the router
    }


}