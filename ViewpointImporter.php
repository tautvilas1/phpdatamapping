<?php
require_once 'IImporter.php';
require_once 'IDatabaseConnector.php';

class ViewpointImporter implements IImporter
{
    private $databaseConnection;

    public function __construct($databaseConnection)
    {
        $this->databaseConnection = $databaseConnection;
    }

    public function Import()
    {
        $viewpointList = array();

        $rawViewpointList = $this->databaseConnection->query("SELECT * FROM 1__viewpoints");
        while($row = $rawViewpointList->fetch(PDO::FETCH_ASSOC))
        {
            $viewpointList[] = new Viewpoint($row['ID'], $row['Type'], $row['Name']);
        }

        return $viewpointList;
    }
}
