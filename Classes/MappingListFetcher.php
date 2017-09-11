<?php
class MappingListFetcher
{
    public function FetchMappingList(PDO $databaseConnection, string $tableName)
    {
        try
        {
            $mappingList = $databaseConnection->query( "SELECT * FROM " . $tableName . " " );
            return $mappingList->fetchAll( PDO::FETCH_ASSOC );
        }
        catch(PDOException $e)
        {
            echo "Failed to get mapping list: " . $e->getMessage();
            die();
        }
    }
}