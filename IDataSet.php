<?php
require_once './IDataDictionary.php';
interface IApplication extends IDataDictionary {
    public function GetProcessList();
    public function SetProcessList($processList);
}