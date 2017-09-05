<?php
require_once './IDataDictionary.php';
interface IProcess extends IDataDictionary
{
    public function GetApplication();
}