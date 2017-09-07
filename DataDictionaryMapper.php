<?php
require_once 'Viewpoint.php';
require_once 'Process.php';
require_once 'Application.php';
require_once 'DataSet.php';
require_once 'DataElement.php';
require_once 'IDataDictionaryConverter.php';
require_once 'IDatabaseConnector.php';

class DataDictionaryConverter implements IDataDictionaryConverter
{
    private $databaseConnection;

    public function __construct($databaseConnection)
    {
        $this->databaseConnection = $databaseConnection;
    }

    public function Import($tableName)
    {
        $dataDictionaryList = array();

        $rawViewpointList = $this->databaseConnection->query("SELECT * FROM ".$tableName." ");
        while($row = $rawViewpointList->fetch(PDO::FETCH_ASSOC))
        {
            switch($row['Type'])
            {
                case "Viewpoint";
                    $dataDictionaryList[] = new Viewpoint($row['ID'], $row['Type'], $row['Name']);
                    break;
                case "Process":
                    $dataDictionaryList[] = new Process($row['ID'], $row['Type'], $row['Name']);
                    break;
                case "Application":
                    $dataDictionaryList[] = new Application($row['ID'], $row['Type'], $row['Name']);
                    break;
                case "Dataset":
                    $dataDictionaryList[] = new DataSet($row['ID'], $row['Type'], $row['Name']);
                    break;
                case "DataElement":
                    $dataDictionaryList[] = new DataElement($row['ID'], $row['Type'], $row['Name']);
                    break;
                default:
                    break;
            }
        }

        return $dataDictionaryList;
    }
}
