<?php

// set the controller value to 404
$controller = "views/404.php";
// get the file path of the request_uri
$file_path = "controllers" . $_SERVER['REQUEST_URI'] . ".php";
// change the controller if the file exist
if (file_exists($file_path)) {
  $controller = "controllers{$_SERVER['REQUEST_URI']}.php";
}
// verify if the request_uri is at home and redirect to index.php
if ('/' === $_SERVER['REQUEST_URI']) {
  $controller = "controllers/index.php";
}
// require_once require only if the file is not already used.
require_once $controller;
