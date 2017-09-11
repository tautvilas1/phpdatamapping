<?php
require_once 'Application.php';
class MappingToApplicationConverter
{
    public function ConvertMappingListToApplicationList(array $mappingList, array $processList)
    {
        $applicationList;

        try
        {
            foreach ($mappingList as $mapping) {
                if ($mapping['Child Type'] === 'Application') {
                    foreach ($processList as $process) {
                        if ($mapping['Parent ID'] === $process->GetID()) {
                            $applicationList[] = new Application($mapping['Child ID'], $mapping['key'], $mapping['text'], $process->GetKey());
                            break;
                        }
                    }
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