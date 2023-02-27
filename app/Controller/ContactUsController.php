<?php

class ContactUsController
{
    public function storeData($contactUs)
    {
        require_once("../Service/SendUsAMessageService.php");
        $contactMe = new SendUsAMessageService();
        session_start();
        if( $contactMe->storeMessageInTheDatabase($contactUs)){
            $_SESSION['contactUsMessage'] = "Message was sent successfully, we will get back to you soon!!!";
            $_SESSION['status'] = "success";

        }else {  $_SESSION['contactUsMessage'] = "message was not sent!";
            $_SESSION['status'] = "danger";
        }
        $this->sendUsAMessageView();
    unset($_SESSION['contactUsMessage']);
    unset( $_SESSION['status']);
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
            $contactUs->email =  htmlspecialchars($email);
            $contactUs->message = htmlspecialchars($message);

            $this->storeData($contactUs);

        }

    }
}