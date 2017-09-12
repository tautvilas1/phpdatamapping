<?php
require_once 'AbstractClasses/InnerGroupNode.php';
class DataSet extends InnerGroupNode
{
    /**
     * DataSet constructor.
     * @param $id
     * @param $key
     * @param $text
     * @param $isGroup
     * @param $group
     * @param $category
     * @param $grpColor
     * @param $grpBorder
     * @param $image
     */
    public function __construct($id, $key, $text, $isGroup, $group, $category, $grpColor, $grpBorder, $image)
    {
        $this->id = $id;
        $this->key = $key;
        $this->text = $text;
        $this->isGroup = $isGroup;
        $this->group = $group;
        $this->category = $category;
        $this->grpColor = $grpColor;
        $this->grpBorder = $grpBorder;
        $this->image = $image;
    }

    protected $id, $key, $text, $isGroup, $group, $category, $grpColor, $grpBorder, $image;

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
    
    public function GetGroup()
    {
        return $this->group;
    }
    
    public function GetCategory()
    {
        return $this->category;
    }
            
    public function GetGrpColor()
    {
        return $this->grpColor;
    }  

    public function GetGrpBorder()
    {
        return $this->grpBorder;
    } 
    
    public function GetImage()
    {
        return $this->image;
    }
}