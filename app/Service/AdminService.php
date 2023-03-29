<?php
class AdminService
{

    public function createUser($user)
    {
     require_once ("../Repository/AdminRepository.php");
        $adminRepository = new AdminRepository();
       $user =  $adminRepository->createUser($user);
        return $user;
    }

    public function getAppointmentByService($service)
    {
        $adminRepository = new AdminRepository();
        $adminRepository->getAppointmentByService($service);
    }

}