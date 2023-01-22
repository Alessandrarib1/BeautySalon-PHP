<?php

class ContactUsController
{
  public function storeData()
  {
    require_once("../Service/SendUsAMessageService.php");
    $contactUs = new SendUsAMessageService();
    $contactUs->storeMessageInTheDatabase($contactUs);
    //If It Works say a message: that it was succefull 
  }
}