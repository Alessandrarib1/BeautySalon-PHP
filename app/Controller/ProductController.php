<?php
require_once("BaseController.php");
class ProductController extends BaseController
{
    public function getAllProducts(){
        require_once('../Service/ProductService.php');
        $productService = new ProductService();
        return $productService->getAll();
    }
}