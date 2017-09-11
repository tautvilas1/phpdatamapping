<?php
class MappingListFetcher
{
    public function GetMappingList(PDO $databaseConnection, string $tableName)
    {
        try
        {
            $rawViewpointList = $this->databaseConnection->query( "SELECT * FROM " . $tableName . " " );
            return $rawViewpointList->fetch( PDO::FETCH_ASSOC );
        }
        catch(PDOException $e)
        {
            echo "Failed to get mapping list: " . $e->getMessage();
            die();
        }
    }
}