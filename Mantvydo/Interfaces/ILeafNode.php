<?php
interface ILeafNode extends INode
{
    public function GetGroup();
    public function SetGroup();
    public function GetControl();
    public function GetOwner();
}
