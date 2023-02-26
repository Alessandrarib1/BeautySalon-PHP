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

        case "/loginValidation":
        if (isset($_POST['LoginButton'])) {

            $username = $_POST['username'];
            $password = $_POST['password'];

            require_once('../Controller/UserController.php');
            $userController = new UserController();

            $user = $userController->validateLogin($username, $password);

            if ($user != null) {
                $_SESSION['user'] = $user;
                header("location: /ManagementMainPage");
            } else {
                $_SESSION['LoginError'] = "Username or password incorrect!";
                header("location: /Login");
            }
        }
          break;


        case "/logOut":
            session_start();
            session_destroy();
            header('location:/homePage');

        case "/editAppointment":
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

                require_once("../Controller/AppointmentController.php");
                $appointmentController = new AppointmentController();
                $appointmentController->updateAppointment($appointment);
                header("location: /ManagementMainPage");

            }
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

    public function displayNavBar()
    {
        require_once("../View/navBar.php");
    }

    public function displayFooter()
    {
        require_once("../View/Footer.php");
    }

    public function getAllUsers()
    {
        require_once('../Model/User.php');
        require_once('../Controller/UserController.php');
        $userController = new UserController();

       return $users = $userController->getAllUsers();
    }
}