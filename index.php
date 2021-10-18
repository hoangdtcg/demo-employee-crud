<?php
include "models/Employee.php";
include "services/EmployeeManager.php";

$employeeManager = new EmployeeManager();
//$employee1 = new Employee("Nguyễn", "Thành","17/10/2003","Việt Trì","Nhân viên");
//$employee2 = new Employee("Nguyễn", "Xanh","20/10/2004","Bắc Ninh","Chủ Tịch");
//$employee3 = new Employee("Vũ", "Hoàng","31/04/2000","Hà Nội","Giám Đốc");
//$employeeManager->storeEmployees($employee1);
//$employeeManager->storeEmployees($employee2);
//$employeeManager->storeEmployees($employee3);
$employees = $employeeManager->getAll();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách nhân viên</title>
</head>
<body>
<button><a href="create-employee.php">ADD NEW EMPLOYEE</a></button>
<table border="1px">
    <thead>
    <tr>
        <th>STT</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>BirthDate</th>
        <th>Address</th>
        <th>Job Title</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($employees as $key => $employee):?>
        <tr>
            <td><?php echo $key+1?></td>
            <td><?php echo $employee->getFirstName() ?></td>
            <td><?php echo $employee->getLastName() ?></td>
            <td><?php echo $employee->getBirthDate() ?></td>
            <td><?php echo $employee->getAddress() ?></td>
            <td><?php echo $employee->getJobTitle() ?></td>
            <td><a href="employee-detail.php?id=<?php echo $key?>">Detail</a></td>
            <td><a href="employee-update.php?id=<?php echo $key?>">Update</a></td>
            <td><a onclick="return confirm('Bạn có chắc muốn xoá nhân viên này không?')" href="delete-employee.php?id=<?php echo $key?>">Delete</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
