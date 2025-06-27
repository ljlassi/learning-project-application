<?php

class ConnectDB {

  private $dbh;

  public function connectToDB() : void {
    try {
      $this->dbh = new PDO(DB_CONNECT_STRING, DB_USER, DB_PASSWORD);
      }
     catch (PDOException $e) {
      print "Failed to connect to the database. Check your credentials!<br/>";
      print "Error!: " . $e->getMessage() . "<br/>";
      die();
    }
    }

    public function getDBObject() : PDO {
      return $this->dbh;
    }

    public function checkDBPrepareScriptRan() : bool {
      try {
        $statement = $this->dbh->prepare('SELECT COUNT(*) FROM products');
        $statement->execute();
        $count = $statement->fetchColumn();
      } catch (PDOException $e) {
        // If the table does not exist, it means the prepare script has not been run
        return false;
      }
      if ($count === false) {
        return false;
      } else {
        return true;
      }
    }

  }
