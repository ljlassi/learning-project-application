<?php

require_once('ProductInterface.php');

class Product implements ProductInterface {

  private $id;

  private $name;

  private $price;

  public function __construct(int $id, string $name, int $price) {
    $this->id = $id;
    $this->name = $name;
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

}
