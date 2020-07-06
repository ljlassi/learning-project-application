<?php

class PostRequest {

  public function sendPostRequest(string $content) : int {
    print_r($content);
    $curl = curl_init();
    return 0;
  }

}
