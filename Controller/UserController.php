<?php

class UserController {

  public function addUser(UserInterface $user, PostRequest $request_controller) : int {
    $user_array = Array(
      "id" => $user->getId(),
      "name" => $user->getUserName(),
      "password_hash" => $user->getPassWordHash(),
      "auth_string" => $user->getAuthString(),
      "email" => $user->getEmail(),
      "phone" => $user->getPhone()
    );
    $user_json = json_encode($user_array);
    $request_controller->sendPostRequest($user_json);
    return 0;
  }

}
