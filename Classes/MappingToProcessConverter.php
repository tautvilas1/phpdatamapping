<?php
class MappingToProcessConverter
{
    public function ConvertMappingListToProcessList(array $mappingList)
    {
        $processList;
        try
        {
            foreach ($mappingList as $mapping) {
                if ($mapping['Parent Type'] === 'Process')
                    echo 'EIK NX! <br/>';
            }
        }
        catch(PDOException $e)
        {
            echo "Failed to convert mappings to processes: " . $e->getMessage();
            die();
        }
    }
}