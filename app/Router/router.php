<?php

class router
{

  public function route($url){


    switch ($url) {

      
      case "/homePage":
        case "/home":
        require_once("../Controller/HomeController.php");
            $homeController = new HomeController();
          $homeController->homePage();
          break;



        case "/api/appointments":
            require_once("../API/api.php");
            $api = new api();
            $api->index();
            break;

        case "/api/appointments/delete":
            require_once("../API/api.php");
            $api = new api();
            $api->deleteAppointment();
            break;

        case "/api/appointments/store":
            require_once("../API/api.php");
            $api = new api();
            $api->storeAppointment();
            break;



          case "/ManagementMainPage":
            require_once("../Controller/AdminController.php");
            $adminController = new AdminController();
            $adminController->DisplayManagementPage();
              break;

        case "/RegisterUsers":
            require_once("../Controller/AdminController.php");
            require_once ("../Model/User.php");
            $user = new User();
            $user->firstname = $_POST['firstname'];
            $user->lastname = $_POST['lastname'];
            $user->password = $_POST['password'];
            $user->username = $_POST['username'];
            $adminController = new AdminController();
            $adminController->RegisterNewUser($user);
            break;

        case "/RegisterUser":
            require_once("../Controller/AdminController.php");
            $adminController = new AdminController();
            $adminController->DisplayRegisterUserPage();
            break;



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

            case "/logOut":
                require_once ("../Controller/LoginController.php");
                $loginController = new LoginController();
                $loginController->LogOut();
            break;


        case "/editAppointment" :
            require_once("../Controller/AppointmentController.php");
            $appointmentController = new AppointmentController();
            $appointmentController->editAppointmentValidateInput();
            break;



        case "/editAppointmentView":
            require_once("../Controller/AppointmentController.php");
            $appointmentController = new AppointmentController();
            session_start();
            $_SESSION['appointment']  = $appointmentController->DisplayEditAppointmentPage($_POST['appointmentID']);
            require_once ("../View/editAppointmentView.php");
            break;



        case "/storeContactUs":
        require_once("../Controller/ContactUsController.php");
        $contactUsController = new ContactUsController();
        $contactUsController->processData($_POST['name'], $_POST['email'], $_POST['message']);
        break;



        case "/HairStyling":
      require_once("../Controller/HomeController.php");
      $homeController = new HomeController();
      $homeController->hairStylingDetailPage();
      break;
  
        case "/sendUsAMessage":
            require_once ("../Controller/ContactUsController.php");
            $contactUsController = new ContactUsController();
            $contactUsController->sendUsAMessageView();
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
              


        case "/Login":
                  require_once("../Controller/LoginController.php");
                  $loginController = new LoginController();
                  $loginController->displayLoginPage();
                  break;

        case "/loginValidation":
            require_once("../Controller/LoginController.php");
            $loginController = new LoginController();
            $loginController->validateUsersInput();
            break;


      default:
          http_response_code(404);
  
  }

  }

    public function getAllProducts()
    {
        require_once('../Controller/ProductController.php');
        $productController = new ProductController();
        return $products = $productController->getAllProducts();
    }
}