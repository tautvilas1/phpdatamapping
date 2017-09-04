<?php
interface IMapping
{
    public function GetID();
    public function GetRelationship();
    public function GetType();
    public function GetParentType();
    public function GetParentNode();
    public function GetParentID();
    public function GetChildType();
    public function GetChildNode();
    public function GetChildID();
}