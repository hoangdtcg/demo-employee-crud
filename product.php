<?php
include_once "models/Product.php";
include_once "services/ProductManager.php";

$productManager = new ProductManager();
//$employee1 = new Employee("Nguyễn", "Thành","17/10/2003","Việt Trì","Nhân viên");
//$employee2 = new Employee("Nguyễn", "Xanh","20/10/2004","Bắc Ninh","Chủ Tịch");
//$employee3 = new Employee("Vũ", "Hoàng","31/04/2000","Hà Nội","Giám Đốc");
//$employeeManager->storeEmployees($employee1);
//$employeeManager->storeEmployees($employee2);
//$employeeManager->storeEmployees($employee3);
$products = $productManager->getAll();
var_dump($productManager);
?>