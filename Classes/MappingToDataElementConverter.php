<?php
require_once 'DataElement.php';
class MappingToDataElementConverter
{
    public function ConvertMappingListToDataElementList(array $mappingList, array $dataSetList)
    {
        $dataElementList = [];

        try
        {
            foreach ($mappingList as $mapping) {
                if ($mapping['Child Type'] === 'DataElement') {
                    foreach ($dataElementList as $dataElement)
                        if ($dataElement->GetID() === $mapping['Child ID'])
                            break;

                    foreach ($dataSetList as $dataSet) {
                        if ($mapping['Parent ID'] === $dataSet->GetID()) {
                            $ads = '';
                            $owner = '';
                            $control = '';
                            $report = '';

                            if ($mapping['ads'] === 'true')
                                $ads = 'images/ads.png';

                            if ($mapping['owner'] !== null)
                                $owner = 'images/owner.png';

                            if ($mapping['control'] === 'valid')
                                $control = 'images/status0.png';

                            if ($mapping['control'] === 'invalid')
                                $control = 'images/status1.png';

                            if ($mapping['report'] === 'true')
                                $report = 'images/report.png';

                            $dataElementList[] = new DataElement(
                                $mapping['Child ID'], $mapping['key'], $mapping['text'], $dataSet->GetKey(), $mapping['desc'], $ads, $owner, $control, $report);
                            
                            break;
                        }
                    }
                }
            }

            return $dataElementList;
        }
        catch(PDOException $e)
        {
            echo "Failed to convert mappings to processes: " . $e->getMessage();
            die();
        }
    }
}