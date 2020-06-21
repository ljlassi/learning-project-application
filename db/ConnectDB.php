<?php

class ConnectDB {

  private $dbh;

  public function connectToDB() : void {
    try {
      $this->dbh = new PDO(DB_CONNECT_STRING, DB_USER, DB_PASSWORD);
      }
     catch (PDOException $e) {
      print "Error!: " . $e->getMessage() . "<br/>";
      die();
    }
    }

    public function getDBObject() : PDO {
      return $this->dbh;
    }

  }
