<?php
class AdminService
{

    public function createUser($user)
    {
     require_once ("../Repository/AdminRepository.php");
        $adminRepository = new AdminRepository();
        $adminRepository->createUser($user);
    }

}