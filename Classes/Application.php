<?php
require_once '../AbstractClasses/GroupNode.php';
class Application extends InnerGroupNode
{
    /**
     * Application constructor.
     * @param $key
     * @param $text
     */
    public function __construct($key, $text)
    {
          $this->key = $key;
          $this->text = $text;
    }

    private $group;

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
        return $this->group;;
    }
    
    public function SetGroup($group)
    {
        $this->group = $group;
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