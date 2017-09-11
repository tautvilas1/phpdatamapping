<?php
interface ILeafNode extends INode
{
    public function GetGroup();
    public function GetControl();
    public function GetOwner();
}
