<?php

if (isset($_POST['sendMessageButton'])) {

   if (isset($_POST['name'], $_POST['email'], $_POST['message'])) {
       {

           require_once("../Model/ContactUs.php");

           $name = htmlspecialchars($_POST["name"]);
           $email = htmlspecialchars($_POST["email"]);
           $message = htmlspecialchars($_POST["message"]);

           $contactUs = new ContactUs();
           $contactUs->name = $name;
           $contactUs->email = $email;
           $contactUs->message = $message;


           require_once("../Service/SendUsAMessageService.php");
           $sendUsAMessageService = new SendUsAMessageService();
           $sendUsAMessageService->storeMessageInTheDatabase($contactUs);

       }
   }
}
