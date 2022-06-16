<?php

require_once MODELS . '/employeeModel.php';

$action = '';

// Check if POST or GET have 'action'. Here 'action' will be function name.
if (isset($_REQUEST['action'])) {
  $action = $_REQUEST['action'];   // e.g. getAllEmployees
}

// Calls function passed as first argument, and array from $_REQUEST as second.
// $_REQUEST includes array with $GET and $POST,
if (function_exists(($action))) {
  call_user_func($action, $_REQUEST);
} else {
  // $errorMsg = "User action is not valid";
  // error($errorMsg);
  error("User action is not valid");
}


function getAllEmployees () {
  $employees = get();
  if(isset($employees)) {
    require_once VIEWS . "employee/employeeDashboard.php";
  } else {
    error("Error in request from employee controller");
  }
}


function getEmployee ($get) {
  if (isset($get['id'])) {
    $empId = $get['id'];
    $employee = getEmployeeById($empId)[0];
    require_once VIEWS . "employee/employee.php";
  } else {
    $empId = null;
    error("Error in request for employee details");
  }
}

function updateEmployee ($post) {
  if (isset($post['id'])) {
    $id = $post['id'];
    print_r($post);
    echo '<br><br>';
    updateEmployeeById($post);
    // $employee = getEmployeeById($id)[0];
    // print_r($employee);
    header("Location: index.php?controller=employee&action=getEmployee&id=$id");
  } else {
    $empId = null;
    error("Error in request for employee details");
  }
}


function error($errorMsg) {
  // $errorMsg = $errorMsg;
  require_once VIEWS . "error/error.php";
}

