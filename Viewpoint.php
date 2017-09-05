<?php
require_once 'Viewpoint.php';
class Viewpoint implements IViewpoint
{
    private $id, $type, $name, $processList;

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
        return $this->type;.
    }

    public function GetName()
    {
        return $this->name;
    }

    public function GetProcessList()
    {
        return $this->processList;
    }

    public function SetProcessList($processList)
    {
        $this->processList = $processList;
    }
}