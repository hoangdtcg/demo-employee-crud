<?php

include_once "../models/Product.php";
include_once "BaseManager.php";
class ProductManager extends BaseManager
{
    public function __construct()
    {
        $path = "product.json";
        parent::__construct($path);
        $this->list = $this->loadData();
    }


    public function convertToObject($data)
    {

        $employees = [];
        foreach($data as $e){
            $employee = new Product($e['name'],$e['price']);
            $employees[] = $employee; //array_push
        }
        return $employees;
    }

    public function loadData(){
        $data = $this->load();
        return $this->convertToObject($data);
    }
}