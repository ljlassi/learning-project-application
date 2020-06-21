<?php

interface Product() {

  private $id;

  private $name;

  private $price;

  public function setId(int $id);

  public function setName(string $name)

  public function setPrice(int $price);

  public function getId() : int;

  public function getName() : string;

  public function getPrice() : int;

  public function saveToDB() : string;
}
