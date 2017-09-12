<?php
require_once 'DataSet.php';
class MappingToDataSetConverter
{
    public function ConvertMappingListToDataSetList(array $mappingList, array $applicationList)
    {
        $dataSetList = [];

        try
        {
            foreach ($mappingList as $mapping) {
                if ($mapping['Child Type'] === 'Dataset') {
                    foreach ($dataSetList as $dataSet) {
                        if ($dataSet->GetID() === $mapping['Child ID'])
                            break;
                    }

                    foreach ($applicationList as $application) {
                        if ($mapping['Parent ID'] === $application->GetID()) {
                            $dataSetList[] = new DataSet(
                                $mapping['Child ID'], $mapping['key'], $mapping['text'], true, $application->GetKey(), 'OfNodes', '#FFFFFF', '#C0C0C0', 'images/domain.png');
                            
                            break;
                        }
                    }
                }
            }

            return $dataSetList;
        }
        catch(PDOException $e)
        {
            echo "Failed to convert mappings to processes: " . $e->getMessage();
            die();
        }
    }
}