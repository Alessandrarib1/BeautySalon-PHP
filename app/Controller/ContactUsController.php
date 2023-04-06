<?php
require_once("BaseController.php");
require_once("../Service/SendUsAMessageService.php");

class ContactUsController extends BaseController
{
    private $sendUsAMessageService;

    public function __construct()
    {
        $this->sendUsAMessageService = new SendUsAMessageService();
    }

    public function storeData($contactUs)
    {
        require_once("../Service/SendUsAMessageService.php");
        if ($this->sendUsAMessageService->storeMessageInTheDatabase($contactUs)) {
            $contactUsMessage = "Message was sent successfully, we will get back to you soon!!!";
            $status = "success";
        } else {
            $contactUsMessage = "message was not sent!";
            $status = "danger";
        }
        require_once("../View/sendUsAMessage.php");
        // Pass $contactUsMessage and $status variables to the view
        return [$contactUsMessage, $status];
    }
    public function sendUsAMessageView()
    {
        require_once("../View/sendUsAMessage.php");
    }
    public function processSendMessageRequest()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $this->sendUsAMessageView();
        } else {
            if (!empty($_POST['name'] and !empty($_POST['email']) and !empty($_POST['message']))) {
                {
                    require_once("../Model/ContactUs.php");
                    $contactUs = new ContactUs();
                    $contactUs->name = htmlspecialchars($_POST['name']);
                    $contactUs->email = htmlspecialchars($_POST['email']);
                    $contactUs->message = htmlspecialchars($_POST['message']);

                    $this->storeData($contactUs);
                }
            }
        }
    }

}