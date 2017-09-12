<?php
require_once 'AbstractClasses/GroupNode.php';
class Process extends GroupNode
{
    /**
     * Process constructor.
     * @param $id
     * @param $key
     * @param $text
     * @param $isGroup
     * @param $category
     * @param $grpColor
     */
    public function __construct($id, $key, $text, $isGroup, $category, $grpColor)
    {
        $this->id = $id;
        $this->key = $key;
        $this->text = $text;
        $this->isGroup = $isGroup;
        $this->category = $category;
        $this->grpColor = $grpColor;
    }

    protected $id, $key, $text, $isGroup, $category, $grpColor;

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
        return $this->isGroup;
    }
            
    public function GetCategory()
    {
        return $this->category;
    }
            
    public function GetGrpColor()
    {
        return $this->grpColor;
    }          
}