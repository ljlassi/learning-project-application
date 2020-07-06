<?php

require_once("../config.php");
require_once(PROJECT_DIR . '/Controller/PostRequest.php');
require_once(PROJECT_DIR . '/Controller/UserController.php');
require_once(PROJECT_DIR . '/Model/User.php');

$user = new User(0, "someone@example.com", "dfdsdasasdsasd", "14234fassadasdasdas", "someone@example.com", "4231231656");
$user_controller = new UserController();
$request_controller = new PostRequest();
$user_controller->addUser($user, $request_controller);
