<?php
require_once './DatabaseConnector.php';
require_once './ViewpointImporter.php';
$databaseConnector = new DatabaseConnector();
$conn = $databaseConnector->ConnectToMysql();
$viewpointImporter = new ViewpointImporter($conn);
$list = $viewpointImporter->Import();
print_r($list);