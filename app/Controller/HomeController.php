<?php

class HomeController
{
    public function homePage()
    {
        require_once("../View/homePageView.php");

        //require_once("../View/ArticleView.php");
        //$view = new ArticleView();
        //$view->displayArticles();
    }
    public function test()
    {
        require_once("../View/test.php");
    }
    public function hairStylingDetailPage()
    {
        require_once("../View/hairStylingDetailPage.php");

    }
    public function NailsDetailPage()
    {
        require_once("../View/NailsDesignDetailPage.php");

    }
    public function MassageDetailPage()
    {
        require_once("../View/MassageDetailPage.php");

    }


}