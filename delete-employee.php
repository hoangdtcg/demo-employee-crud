<?php
include "models/Employee.php";
include "services/EmployeeManager.php";

$employeeManager = new EmployeeManager();
$id = $_GET["id"];
$employeeManager->deleteById($id);
header("Location:index.php");