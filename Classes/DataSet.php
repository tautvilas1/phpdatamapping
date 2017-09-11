<?php
require_once 'AbstractClasses/InnerGroupNode.php';
class DataSet extends InnerGroupNode
{
    /**
     * DataSet constructor.
     * @param $id
     * @param $key
     * @param $text
     * @param $group
     */
    public function __construct($id, $key, $text, $group)
    {
        $this->id = $id;
        $this->key = $key;
        $this->text = $text;
        $this->group = $group;
    }

    protected $id, $key, $text, $group;

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
    
    public function GetGroup()
    {
        return $this->group;
    }
    
    public function GetCategory()
    {
        return 'OfNodes';
    }
            
    public function GetGrpColor()
    {
        return '#F0F0F0';
    }  
    
    public function GetImage()
    {
        return 'images/application.png';
    }
}