<?php

class ProductController
{
    public function getAllProducts(){
        require_once('../Service/ProductService.php');
        $productService = new ProductService();

        return $productService->getAll();
    }
}