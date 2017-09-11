<?php
require_once 'Interfaces/IInnerGroupNode.php';
abstract class InnerGroupNode extends GroupNode implements IInnerGroupNode
{
    public abstract function GetGroup();
    public abstract function SetGroup($group);
    public abstract function GetImage();
}