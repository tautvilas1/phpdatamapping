<?php

require_once './DatabaseConnector.php';
require_once './DataDictionaryMapper.php';

$databaseConnector = new DatabaseConnector();

$conn = $databaseConnector->ConnectToMysql();

$rawViewpointList = $this->databaseConnection->query("SELECT * FROM 6__mappings ");

$linkList = array();
$nodeList = array();
while($row = $rawViewpointList->fetch(PDO::FETCH_ASSOC))
{

}

