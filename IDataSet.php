<?php
require_once './IDataDictionary.php';
interface IDataSet extends IDataDictionary
{
    public function GetDataElements();
}