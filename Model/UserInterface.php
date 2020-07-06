<?php

interface UserInterface {

  public function getId() : int;
  public function getUserName() : string;
  public function getPassWordHash() : string;
  public function getAuthString() : string;
  public function getEmail() : string;
  public function getPhone() : string;

}
