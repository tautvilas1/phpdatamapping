<?php
require_once 'Viewpoint.php';
require_once 'Process.php';
require_once 'Application.php';
require_once 'DataSet.php';
require_once 'DataElement.php';

class ProcessMapper
{
    //$rawViewpointList->fetch(PDO::FETCH_ASSOC)
    public function GetNodes($mappingList)
    {
        $nodeList = array();

        //$rawViewpointList = $this->databaseConnection->query("SELECT * FROM ".$tableName." ");
        foreach($mappingList as $row)
        {
            switch($row['Type'])
            {
                case "Viewpoint";
                    $ProcessMapperList[] = new Viewpoint($row['ID'], $row['Type'], $row['Name']);
                    break;
                case "Process":
                    $nodeList[] = new Process($row['ID'], $row['Type'], $row['Name']);
                    break;
                case "Application":
                    $nodeList[] = new Application($row['ID'], $row['Type'], $row['Name']);
                    break;
                case "Dataset":
                    $nodeList[] = new DataSet($row['ID'], $row['Type'], $row['Name']);
                    break;
                case "DataElement":
                    $nodeList[] = new DataElement($row['ID'], $row['Type'], $row['Name']);
                    break;
                default:
                    break;
            }
        }

        return $ProcessMapperList;
    }
}
