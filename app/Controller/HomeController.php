<?php
require_once("BaseController.php");
class HomeController extends BaseController
{
    public function homePage()
    {
        require_once("../Service/ProductService.php");
        $productService = new ProductService();
        $products = $productService->getAll();
        require_once("../View/homePageView.php");
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