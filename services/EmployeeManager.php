<?php

include '../models/Employee.php';
include_once "BaseManager.php";
class EmployeeManager extends BaseManager
{
//    private $employees;

    public function __construct()
    {
        $path = "employee.json";
        parent::__construct($path);
        $this->list = $this->loadData();
    }


    public function convertToObject($data)
    {

        $employees = [];
        foreach($data as $e){
            $employee = new Employee($e['firstName'],$e['lastName'],$e['birthDate'],$e['address'],$e['jobTitle']);
            $employees[] = $employee; //array_push
        }
        return $employees;
    }

    public function loadData(){
        $data = $this->load();
        return $this->convertToObject($data);
    }
}