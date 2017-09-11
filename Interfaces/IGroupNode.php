<?php
require_once 'INode.php';
interface IGroupNode extends INode
{
    public function IsGroup();
    public function GetCategory();
    public function GetGrpColor();
}
