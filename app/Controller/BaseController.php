<?php

class BaseController {
    public function displayNavBar()
    {
        require_once("../View/navBar.php");
    }
    public function displayFooter()
    {
        require_once("../View/Footer.php");
    }

}