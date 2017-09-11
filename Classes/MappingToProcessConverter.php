<?php
require_once 'Process.php';
class MappingToProcessConverter
{
    public function ConvertMappingListToProcessList(array $mappingList)
    {
        $processList;
        $processNumber = 1;

        try
        {
            foreach ($mappingList as $mapping) {
                if ($mapping['Parent Type'] === 'Process') {
                    $processList[] = new Process('PRO' . str_pad( $processNumber, 3, '000', STR_PAD_LEFT ), $mapping['key'], $mapping['text']);
                    $processNumber++;
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