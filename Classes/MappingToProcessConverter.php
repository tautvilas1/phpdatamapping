<?php
require_once 'Process.php';
class MappingToProcessConverter
{
    public function ConvertMappingListToProcessList(array $mappingList)
    {
        $processList = [];

        try
        {
            foreach ($mappingList as $mapping) {
                if ($mapping['Child Type'] === 'Process') {
                    foreach ($processList as $process)
                        if ($process->GetID() === $mapping['Child ID'])
                            break;

                    $processList[] = new Process(
                        $mapping['Child ID'], $mapping['key'], $mapping['text'], true, 'OfGroups', '#D8D8D8');
                }
            }

            return $processList;
        }
        catch(PDOException $e)
        {
            echo "Failed to convert mappings to processes: " . $e->getMessage();
            die();
        }
    }
}