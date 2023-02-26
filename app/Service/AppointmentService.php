<?php

class AppointmentService
{
    public function getAllAppointments()
    {
        require_once("../Repository/AppointmentRepository.php");
        $repository = new AppointmentRepository();
        $appointments = $repository->getAllAppointments();
        return $appointments;
    }
    public function getAppointmentByDate($date)
    {
        require_once("../Repository/AppointmentRepository.php");
        $repositorynew = new  AppointmentRepository();
        $appointments = $repositorynew->getAppointmentByDate($date);
        return $appointments;
    }
    public function getAppointmentByService($product, $date)
    {
        require_once("../Repository/AppointmentRepository.php");
        $repositorynew =  new  AppointmentRepository();
        $appointments = $repositorynew->getAppointmentByService($product, $date);
        return $appointments;
    }

    public function deleteAppointment($id)
    {
        require_once("../Repository/AppointmentRepository.php");
        $repositorynew =  new AppointmentRepository();
        $repositorynew->deleteAppointment($id);
    }
    public function getAppointmentByID($id){
        require_once("../Repository/AppointmentRepository.php");
        $repository =  new AppointmentRepository();
        $repository->editAppointment($id);
    }
    public function updateAppointment($appointment){
        require_once("../Repository/AppointmentRepository.php");
        $repository =  new AppointmentRepository();
        $repository->updateAppointment($appointment);
    }


    public function bookAppointment(Appointment $appointment)
    {
        require_once("../Repository/AppointmentRepository.php");
        $appointmentRepository = new AppointmentRepository();
        return $appointmentRepository->bookAppointment($appointment);
    }
    public function getById($id){
        require_once("../Repository/AppointmentRepository.php");
        $appointmentRepository = new AppointmentRepository();
        return $appointmentRepository->getByID($id);

    }
}