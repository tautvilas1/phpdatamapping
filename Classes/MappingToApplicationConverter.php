<?php
require_once 'Application.php';
class MappingToApplicationConverter
{
    public function ConvertMappingListToApplicationList(array $mappingList)
    {
        $applicationList;

        try
        {
            foreach ($mappingList as $mapping) {
                if ($mapping['Child Type'] === 'Application') {
                    $applicationList[] = new Application($mapping['Child ID'], $mapping['key'], $mapping['text']);
                }
            }

            return $applicationList;
        }
        catch(PDOException $e)
        {
            echo "Failed to convert mappings to processes: " . $e->getMessage();
            die();
        }
    }
}