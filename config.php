<?php

/**
* Set error reporting for dev buid
*/

error_reporting(E_ALL);

/**
* Set site url and project dir constants
*/

define ("SITE_URL", "http://localhost/projects/learning_application");
define ("PROJECT_DIR", "/var/www/html/projects/learning_application");

require_once(PROJECT_DIR . "/env_local.php");
