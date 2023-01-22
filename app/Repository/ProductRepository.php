<?php
include_once('baseRepository.php');
class ProductRepository extends baseRepository
{
  function getAll()
  {
    require_once('../Model/Product.php');
    $stmt = $this->connection->prepare("SELECT * FROM Product");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_CLASS, 'Product');
    $result = $stmt->fetchAll();
    return $result;

  }

  public function getByID($id)
  {
    require_once('../Model/Product.php');
    $stmt = $this->connection->prepare("SELECT * FROM Product WHERE id=:id ");
    $stmt ->bindValue(':id', $id);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_CLASS, 'Product');
    $result = $stmt->fetch();
    return $result;
  }
}