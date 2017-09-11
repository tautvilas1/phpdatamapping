<?php
require_once './AbstractClasses/GroupNode.php';
class Process extends GroupNode
{
    /**
     * Process constructor.
     * @param $key
     * @param $text
     */
    public function __construct($key, $text)
    {
         $this->key = $key;
         $this->text = $text;
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