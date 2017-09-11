<?php
require_once './DatabaseConnector.php';
require_once './ViewpointImporter.php';

$databaseConnector = new DatabaseConnector();

$databaseConnection = $databaseConnector->ConnectToMysql('localhost', 'playground', 'root', 'password');

$viewpointImporter = new ViewpointImporter($conn);

$list = $viewpointImporter->Import();

print_r($list);
