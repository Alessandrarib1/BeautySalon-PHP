<?php

class router
{

    public function route($url)
    {

        switch ($url) {

            case "/homePage":
            case "/":
            case "/home":
                require_once("../Controller/HomeController.php");
                $homeController = new HomeController();
                $homeController->homePage();
                break;

            case "/login":
                require_once("../Controller/LoginController.php");
                $loginController = new LoginController();
                $loginController->processLoginRequest();
                break;

            case "/logOut":
                session_start();
                session_destroy();
                header('location:/homePage');
                break;

            case "/updateAppointment":
                require_once("../Controller/AppointmentController.php");
                $appointmentController = new AppointmentController();
                $appointmentController->updateAppointment();
                break;


            case "/api/appointments":
                require_once("../API/apiController.php");
                $api = new apiController();
                $api->index();
                break;

            case "/api/appointments/delete":
                require_once("../API/apiController.php");
                $api =  new apiController();
                $api->deleteAppointment();
                break;

            case "/api/appointments/store":
                require_once("../API/apiController.php");
                $api =  new apiController();
                $api->storeAppointment();
                break;


            case "/ManagementMainPage":
                require_once("../Controller/AdminController.php");
                $adminController = new AdminController();
                $adminController->DisplayManagementPage();
                break;

            case "/RegisterUser":
                require_once("../Controller/AdminController.php");
                $adminController = new AdminController();
                $adminController->RegisterNewUser();
                break;


            case "/editAppointment":
                require_once("../Controller/AppointmentController.php");
                $appointmentController = new AppointmentController();
                $appointmentController->editAppointment();
                break;


            case "/HairStyling":
                require_once("../Controller/HomeController.php");
                $homeController = new HomeController();
                $homeController->hairStylingDetailPage();
                break;

            case "/sendUsAMessage":
                require_once("../Controller/ContactUsController.php");
                $contactUsController = new ContactUsController();
                if (isset($_POST['name'], $_POST['email'], $_POST['message'])) {
                    //TODO combine just like the update appointment and move this code to the controller
                    $contactUsController->processData($_POST['name'], $_POST['email'], $_POST['message']);
                } else {
                    $contactUsController->sendUsAMessageView();
                }
                break;

            case "/Manicure":
                require_once("../Controller/HomeController.php");
                $homeController = new HomeController();
                $homeController->NailsDetailPage();
                break;

            case "/Massage":
                require_once("../Controller/HomeController.php");
                $homeController = new HomeController();
                $homeController->MassageDetailPage();
                break;

            case "/MakeAnAppointment":
                require_once("../Controller/AppointmentController.php");
                $makeAnAppointment = new AppointmentController();
                $makeAnAppointment->DisplayAppointmentMainPage();
                break;
                //Code bellow is to when I add new functionalities to the webpage
                /*
            case "/searchByService":
                require_once("../Controller/AppointmentController.php");
                $appointmentController = new AppointmentController();
                $appointmentController->searchByService($service);
                break;

            case "/searchByDate":
                require_once("../Controller/AppointmentController.php");
                $appointmentController = new AppointmentController();
                $appointmentController->searchByDate($date);
                break;

            case "/getAvailableSpotsByService":
                require_once("../Controller/AppointmentController.php");
                $appointmentController = new AppointmentController();
                $appointmentController->getAvailableSpotsByService($service, $date);
                break;

            case "/displayAppointmentByService":
                require_once("../Controller/AdminController.php");
                $adminController = new AdminController();
                $adminController->DisplayAppointmentByServiceView();
                break;
*/
            default:
                http_response_code(404);

        }

    }

}