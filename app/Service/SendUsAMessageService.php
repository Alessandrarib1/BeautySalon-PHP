<?php
class SendUsAMessageService
{
  public function storeMessageInTheDatabase($contactUs)
  {

    require_once("../Repository/SendUsAMessageRepository.php");
    $repository = new SendUsAMessageRepository;
    $repository->storeMessageInDatabase($contactUs);
    //If It Works say a message: that it was succefull 

  }

}