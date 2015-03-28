<?php

function redirect($uri = '', $httpResponseCode = 302) {
  if ( ! preg_match('#^https?://#i', $uri)) {
    $uri = BASE_URL.$uri;
  }
  header("Location: ".$uri, TRUE, $httpResponseCode);
  exit;
}
function redirectBack()
{
  $uri = $_SERVER['HTTP_REFERER'];
  redirect($uri);
}
function PostInput($key)
{
  $key = (string) $key;
  return array_key_exists($key, $_POST) ? $_POST[$key] : '';
}