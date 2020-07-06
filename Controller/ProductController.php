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

  public function listAllProducts(PDO $db) : Array {
    $statement = $db->prepare('SELECT * FROM products LIMIT 50');
    $statement->execute();
    $products_array = array();
    $i = 0;
    try {
      while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $products_array[$i] = $row;
        $i++;
      }
    } catch(PDOException $e) {
      echo $e->getMessage();
    }
    return $products_array;
  }

  public function addUser(User $user, PostRequest $request_object) : int {
    $request_object->sendPostRequest();
    return 0;
  }

}
