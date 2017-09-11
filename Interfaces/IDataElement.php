<?php
interface IDataElement extends INode
{
    public function GetGroup();
    public function GetControl();
    public function GetOwner();
    public function GetAds();
    public function GetDescription();
    public function GetReport();
}
