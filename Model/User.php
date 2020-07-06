<?php

require_once("UserInterface.php");

class User implements UserInterface {

  private $id;
  private $user_name;
  private $password_hash;
  private $auth_string;
  private $email;
  private $phone;

  public function __construct(int $id, string $user_name, string $password_hash, string $auth_string, string $email, string $phone) {
    $this->id = $id;
    $this->user_name = $user_name;
    $this->password_hash = $password_hash;
    $this->auth_string = $auth_string;
    $this->email = $email;
    $this->phone = $phone;
  }
  public function getId() : int {
    return $this->id;
  }
  public function getUserName() : string {
    return $this->user_name;
  }
  public function getPassWordHash() : string {
    return $this->password_hash;
  }
  public function getAuthString() : string {
    return $this->auth_string;
  }
  public function getEmail() : string {
    return $this->email;
  }
  public function getPhone() : string {
    return $this->phone;
  }

}
