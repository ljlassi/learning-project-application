<?php

class ProductController {

  public function addNewProduct(PDO $db, Product $product) : int {
    try {
      $statement = $db->prepare('INSERT INTO products (name, price) VALUES (:name, :price)');
      $price = $product->getPrice();
      $name = $product->getName();
      $statement->bindParam(":name", $name, PDO::PARAM_STR);
      $statement->bindParam(":price", $price, PDO::PARAM_INT);
      $statement->execute();
  } catch(PDOException $e) {
    echo $e->getMessage();
  }
  return 1;
  }

}
