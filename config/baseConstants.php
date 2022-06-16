<?php


// provide constants for path, by defining BASE_PATH and BASE_URL

// store path from full directory
$documentRoot = getcwd();
// ECHO $documentRoot;
// echo '<br><br>';
define('BASE_PATH', $documentRoot);

// store path from local directory to filename
$uri = $_SERVER['REQUEST_URI'];

if (isset($uri) && $uri !== null) {
  $uri = substr($uri, 1);     // remove first '/', store rel path to filename
  $uri = explode('/', $uri);      // separate $uri by '/', into array
  // $_SERVER['HTTP_HOST'], sim not same as SERVER_NAME > localhost;
  // $uri[0] returns root folder without filename
  $uri = "http://$_SERVER[HTTP_HOST]" . "/" . $uri[0];
} else {
  $uri = null;
};

define("BASE_URL", $uri);

