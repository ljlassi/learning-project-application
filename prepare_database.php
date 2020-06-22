<?php
/**
* Before running this script, add your mysql credentials to env_local.php as instructed in that file.
*/

require_once("config.php");
require_once(PROJECT_DIR . '/db/ConnectDB.php');
$connect_db = new ConnectDB();
$connect_db->connectToDB();
$db = $connect_db->getDBObject();

$statement = 'CREATE TABLE products (id INT NOT NULL AUTO_INCREMENT, name VARCHAR(255), price INT, created_at TIMESTAMP, PRIMARY KEY(id))';
try {
  if($db->query($statement)) {
    echo "Success.";
  }
  else {
    die("Could not execute.");
  }
} catch(PDOException $e) {
  echo $e->getMessage();
  die();
}
