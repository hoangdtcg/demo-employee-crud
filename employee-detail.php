<?php
include "models/Employee.php";
include "services/EmployeeManager.php";

$employeeManager = new EmployeeManager();
$id = $_GET["id"];
$employee = $employeeManager->getById($id);
if(!isset($employee)){
    die("Không tồn tại");
}
//$employeeManager->showLog($employee);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        text-align: center;
        font-family: arial;
    }

    .title {
        color: grey;
        font-size: 18px;
    }

    button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }

    a {
        text-decoration: none;
        font-size: 22px;
        color: black;
    }

    button:hover, a:hover {
        opacity: 0.7;
    }
</style>
<body>
<h2 style="text-align:center">User Profile Card</h2>

<div class="card">
    <img src="assets/images/default.jpeg" alt="John" style="width:100%">
    <h1><?php echo $employee->getFullName()?></h1>
    <p class="title"><?php echo $employee->getJobTitle()?></p>
    <p><?php echo $employee->getAddress()?></p>
    <div style="margin: 24px 0;">
        <a href="#"><i class="fa fa-dribbble"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
    </div>
    <p><button>Contact</button></p>
    <a href="index.php"><button>Back</button></a>
</div>
</body>
</html>
