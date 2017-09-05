<?php
require_once './IDataDictionary.php';
interface IViewpoint extends IDataDictionary {
    public function GetProcessList();
    public function SetProcessList();
}