<?php
opcache_reset();
require_once './Classes/DatabaseConnector.php';
require_once './Classes/MappingListFetcher.php';
require_once './Classes/MappingToProcessConverter.php';
require_once './Classes/MappingToApplicationConverter.php';

$databaseConnector = new DatabaseConnector();

$databaseConnection = $databaseConnector->ConnectToMysql('localhost', 'playground', 'root', 'password');

$mappingListFetcher = new MappingListFetcher();

$mappingList = $mappingListFetcher->FetchMappingList($databaseConnection, 'mappings');

$mappingToProcessConverter = new MappingToProcessConverter();

$processlist = $mappingToProcessConverter->ConvertMappingListToProcessList($mappingList);

$mappingToApplicationConverter = new MappingToApplicationConverter();

$applicationlist = $mappingToApplicationConverter->ConvertMappingListToApplicationList($mappingList, $processlist);

print_r($processlist);
print_r($applicationlist);
