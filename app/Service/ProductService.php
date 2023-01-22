<?php
class ProductService
{
  public function getAll()
  {
    require_once("../Repository/ProductRepository.php");
    $repository = new ProductRepository;
    $products = $repository->getAll();
    return $products;
  }

  public function getByID($id){
    require_once("../Repository/ProductRepository.php");
    $repository = new ProductRepository;
    $product = $repository->getById($id);
    return $product;
  }

}