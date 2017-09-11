<?php
require_once 'Interfaces/IGroupNode.php';
abstract class GroupNode implements IGroupNode
{
    protected $key, $text;

    public function GetKey()
    {
        return $this->key;
    }

    public function GetText()
    {
        return $this->text;
    }
            
    public abstract function IsGroup();
    public abstract function GetCategory();
    public abstract function GetGrpColor();
            
}