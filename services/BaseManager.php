<?php

include_once "interface/BaseInterface.php";
class BaseManager implements BaseInterface
{
    protected $list;
    protected $path;

    public function __construct($path)
    {
        $p = __DIR__.'/data/'.$path;
        $this->path = $p;
    }

    public function getAll()
    {
        return $this->list;
    }

    public function getById($id)
    {
        return $this->list[$id];
    }

    public function store($data){
        array_push($this->list, $data);
        $this->save();
    }

    public function update($id, $data){
        $this->list[$id] = $data;
        $this->save();
    }

    public function deleteById($id){
        array_splice($this->list,$id,1);
        $this->save();

    }

    public function save(){
        $dataJson = json_encode($this->list);
        file_put_contents($this->path, $dataJson);
    }

    public function load(){
        $dataJson = file_get_contents($this->path);
        $data = json_decode($dataJson, true);
        return $data;
    }


    public function showLog($data)
    {
        echo "<pre>";
        var_dump($data);
        die();
    }



}