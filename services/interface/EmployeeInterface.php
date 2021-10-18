<?php

include_once "BaseInterface.php";
interface EmployeeInterface extends BaseInterface
{
    const BOSS = "boss";
    public function upLevel();
    public function uploadImage();
}