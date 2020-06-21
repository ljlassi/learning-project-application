<?php

/**
* Get config file, connect to MySQL database and get PDO object
*
*/
require_once("config.php");
require_once(PROJECT_DIR . '/db/ConnectDB.php');
$connect_db = new ConnectDB();
$connect_db->connectToDB();
$db = $connect_db->getDBObject(); 

/**
* Start building the application front page, get page header
*
*/

/**
* Set variables needed with frontpage header.php
*/

$title = "Front page";

require_once(PROJECT_DIR . "/templates/frontpage/header.php");

/**
* Continue building page, this time with actual content
*
*/

require_once(PROJECT_DIR . '/templates/frontpage/page.php');


/**
* Close the page with footer.php
*
*/

require_once(PROJECT_DIR . '/templates/frontpage/footer.php');
