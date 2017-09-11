<?php
require_once 'Interfaces/IDataElement.php';
class DataElement implements IDataElement
{
    /**
     * Application constructor.
     * @param $id
     * @param $key
     * @param $text
     * @param $group
     * @param $description
     * @param $ads
     * @param $owner
     * @param $control
     * @param $report
     */
    public function __construct($id, $key, $text, $group, $description, $ads, $owner, $control, $report)
    {
         $this->id = $id;
         $this->key = $key;
         $this->text = $text;
         $this->group = $group;
         $this->description = $description;
         $this->ads = $ads;
         $this->owner = $owner;
         $this->control = $control;
         $this->report = $report;
    }

    private $id, $key, $text, $group, $description, $ads, $owner, $control, $report;

    public function GetID()
    {
        return $this->id;
    }

    public function GetKey()
    {
        return $this->key;
    }

    public function GetText()
    {
        return $this->text;
    }

    public function GetName()
    {
        return $this->name;
    }

    public function GetGroup()
    {
        return $this->group;
    }

    public function GetDescription()
    {
        return $this->description;
    }

    public function GetAds()
    {
        return $this->ads;
    }

    public function GetOwner()
    {
        return $this->owner;
    }

    public function GetControl()
    {
        return $this->control;
    }

    public function GetReport()
    {
        return $this->report;
    }
}