<?php
opcache_reset();
require_once './Classes/DatabaseConnector.php';
require_once './Classes/MappingListFetcher.php';
require_once './Classes/MappingToProcessConverter.php';
require_once './Classes/MappingToApplicationConverter.php';
require_once './Classes/MappingToDataSetConverter.php';
require_once './Classes/MappingToDataElementConverter.php';

$databaseConnector = new DatabaseConnector();

$databaseConnection = $databaseConnector->ConnectToMysql('localhost', 'playground', 'root', 'password');

$mappingListFetcher = new MappingListFetcher();

$mappingList = $mappingListFetcher->FetchMappingList($databaseConnection, 'mappings');

$mappingToProcessConverter = new MappingToProcessConverter();

$processList = $mappingToProcessConverter->ConvertMappingListToProcessList($mappingList);

$mappingToApplicationConverter = new MappingToApplicationConverter();

$applicationlist = $mappingToApplicationConverter->ConvertMappingListToApplicationList($mappingList, $processList);

$mappingToDataSetConverter = new MappingToDataSetConverter();

$dataSetList = $mappingToDataSetConverter->ConvertMappingListToDataSetList($mappingList, $applicationlist);

$mappingToDataElementConverter = new MappingToDataElementConverter();

$dataElementList = $mappingToDataElementConverter->ConvertMappingListToDataElementList($mappingList, $dataSetList);

echo json_encode($processList);

//print_r($processList);
// print_r($applicationlist);
// print_r($dataSetList);
// print_r($dataElementList);
