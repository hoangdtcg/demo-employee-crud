<?php


interface BaseInterface
{
    public function getAll();
    public function getById($id);
    public function store($data);
}