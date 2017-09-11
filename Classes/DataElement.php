<?php
require_once 'Interfaces/ILeafNode.php';
class DataSet implements ILeafNode
{
    private $id, $type, $name, $dataElementList;

    public function __construct($id, $type, $name)
    {
        $this->id = $id;
        $this->type = $type;
        $this->name = $name;
    }

    public function GetID()
    {
        return $this->id;
    }

    public function GetType()
    {
        return $this->type;
    }

    public function GetName()
    {
        return $this->name;
    }

    public function GetDataElementList()
    {
        return $this->dataElementList;
    }
}