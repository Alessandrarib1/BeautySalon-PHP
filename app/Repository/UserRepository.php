<?php
include_once('baseRepository.php');
class UserRepository extends baseRepository
{

    function getAll()
    {
        require_once("../Model/User.php");
        $stmt = $this->connection->prepare("SELECT * FROM User");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        $result = $stmt->fetchAll();
        return $result;

    }

    public function verifyLogin($username, $password)
    {
        session_start();
        require_once("../Model/User.php");

        $stmt = $this->connection->prepare("select * from User where username=:username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        $user = $stmt->fetch();

        if ($user == null) {
            return null;
        }
        $isPasswordCorrect = password_verify($password, $user->password);
        if($isPasswordCorrect){
            return $user;
        } else {
            return null;

        }
    }


    public function getByID($id)
    {
        require_once("../Model/User.php");
        $stmt = $this->connection->prepare("SELECT * FROM User WHERE id=$id ");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        $result = $stmt->fetch();
        return $result;

    }
}