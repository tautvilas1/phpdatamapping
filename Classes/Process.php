<?php
require_once 'AbstractClasses/GroupNode.php';
class Process extends GroupNode
{
    /**
     * Process constructor.
     * @param $id
     * @param $key
     * @param $text
     */
    public function __construct($id, $key, $text)
    {
        $this->id = $id;
        $this->key = $key;
        $this->text = $text;
    }

    public $id, $key, $text;

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
            
    public function IsGroup()
    {
        return true;
    }
            
    public function GetCategory()
    {
        return 'OfGroups';
    }
            
    public function GetGrpColor()
    {
        return '#D8D8D8';
    }          
}