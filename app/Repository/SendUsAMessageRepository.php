<?php
include_once('baseRepository.php');
class SendUsAMessageRepository extends baseRepository
{
  public function storeMessageInDatabase($contactUs)
  {
    error_reporting(E_ALL ^ E_NOTICE);
    require_once("../Model/ContactUs.php");

        $stmt = $this->connection->prepare("INSERT INTO Message
            (name, email, message)
            VALUES
            (:name,:email,  :message)");


        $stmt->bindParam(':name', $contactUs->name);
        $stmt->bindParam(':email', $contactUs->email);
        $stmt->bindParam(':message', $contactUs->message);
       return  $stmt->execute();
    }
  }
