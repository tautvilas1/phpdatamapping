<?php
require_once './IProcess.php';
class Process implements IProcess
{
    /**
     * Process constructor.
     * @param $id
     * @param $type
     * @param $name
     */
    public function __construct($id, $type, $name)
    {
        $this->id = $id;
        $this->type = $type;
        $this->name = $name;
    }

    private $id, $type, $name, $applicationList;

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

    public function GetApplicationList()
    {
        return $this->applicationList;
    }

    public function SetApplicationList($applicationList)
    {
        $this->applicationList = $applicationList;
    }
}