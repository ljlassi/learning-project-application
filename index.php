<?php

/**
* Get config file
*
*/
require_once("config.php");

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
