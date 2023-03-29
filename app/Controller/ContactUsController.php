<?php
require_once("BaseController.php");

class ContactUsController extends BaseController
{
    public function storeData($contactUs)
    {
        require_once("../Service/SendUsAMessageService.php");
        $service = new SendUsAMessageService();
        if ($service->storeMessageInTheDatabase($contactUs)) {
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
    public function processData($name, $email, $message)
    {
        if (isset($name, $email, $message)) {

            require_once("../Model/ContactUs.php");

            $contactUs = new ContactUs();
            $contactUs->name = htmlspecialchars($name);
            $contactUs->email = htmlspecialchars($email);
            $contactUs->message = htmlspecialchars($message);

            $this->storeData($contactUs);
        }
    }
}