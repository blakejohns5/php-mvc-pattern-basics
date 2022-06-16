<?php
require_once 'helper/dbConnection.php';


function get() {
  // prepare creates a PDO statement object, where value is mysql query, see below
  $query = conn() -> prepare("SELECT e.id, e.name, e.email, g.name as 'gender', e.city, e.age, e.phone_number
  FROM employees e
  INNER JOIN genders g ON e.gender_id = g.id
  ORDER BY e.id ASC;");
  try {
    // executes query created above at line7
    $query -> execute();
    $employees = $query -> fetchAll();
    // print_r($employees);
    return $employees;
  } catch (PDOException $e) {
    echo 'Your request cannot be completed';
    return [];
  }
}

function getEmployeeById ($employeeId) {
  $query = conn() -> prepare("SELECT e.id, e.name, e.last_name, e.email, g.name as 'gender', e.city, e.street_address, e.state, e.age, e.postal_code, e.phone_number
  FROM employees e
  INNER JOIN genders g ON e.gender_id = g.id
  WHERE e.id = $employeeId;");

  try {
    $query -> execute();
    $employee = $query -> fetchAll();
    return $employee;
  } catch (PDOException $e) {
    echo 'Your request cannot be completed.';
    return [];
  }
};

function updateEmployeeById ($post) {  
  $query = conn() -> prepare("UPDATE employees 
  SET name = ?, last_name = ?, email = ?, gender_id = ?, city = ?, street_address = ?, state = ?, age = ?, postal_code = ?, phone_number = ? 
  WHERE id = ?;");

  $query->bindParam(1, $post["name"]);
  $query->bindParam(2, $post["last_name"]);
  $query->bindParam(3, $post["email"]);
  $query->bindParam(4, $post["gender"]);
  $query->bindParam(5, $post["city"]);
  $query->bindParam(6, $post["street_address"]);
  $query->bindParam(7, $post["state"]);
  $query->bindParam(8, $post["age"]);
  $query->bindParam(9, $post["postCode"]);
  $query->bindParam(10, $post["phoneNo"]);
  $query->bindParam(11, $post["id"]);

  try {
      $query -> execute();
      return [true];
  } catch (PDOException $e) {
      echo 'Your request cannot be completed.';
      return [false, $e];
  }
}

