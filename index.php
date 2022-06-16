<?php


include_once "config/constants.php"; // get path constants
include_once "config/db.php";  // get db variables

if (isset($_GET['controller'])) {
  $controller = CONTROLLERS . $_GET['controller'] . "Controller.php";
  $fileExists = file_exists(($controller));
  if ($fileExists) {
    require_once $controller;
  } else {
    $errorMsg = "The page you are trying to reach does not exist.";
    require_once VIEWS . "error/error.php";
  }
}  else {
  require_once VIEWS . "main/main.php";
}






// TESTING ERROR MSG
// $errorMsg = "The page you are trying to reach does not exist.";
// require_once VIEWS . "error/error.php";
