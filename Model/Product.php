<?php

class Product implements ProductInterface {

  private $id;

  private $name;

  private $price;

  public function setId(int $id) : void {
    $this->id = $id;
  }

  public function setName(string $name) : void {
    $this->name = $name;
  }

  public function setPrice(int $price) : void {
    $this->price = $price;
  }

  public function getId() : int {
    return $this->id;
  }

  public function getName() : string {
    return $this->name;
  }

  public function getPrice() : int {
    return $this->price;
  }

  public function saveToDB(PDO $db) : string {
    if(!isset($this->id, $this->name, $this->price)) {
      throw new Exception("Object data does not have all data, cannot continue execution.")
    }
    else {
      
    }
  }

}
