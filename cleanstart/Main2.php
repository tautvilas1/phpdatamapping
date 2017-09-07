<?php

require_once 'DatabaseConnector.php';
require_once 'Node.php';
require_once 'Link.php';

$databaseConnector = new DatabaseConnector();

$conn = $databaseConnector->ConnectToMysql();

$mapRows = $conn->query("SELECT * FROM 6__mappings ");

$linkList = array();
$nodeList = array();
while($row = $mapRows->fetch(PDO::FETCH_ASSOC))
{
    $node = new Node($row['#'], $row['key'], $row['Relationship'], $row['Parent Type'], $row['Child Type'], $row['Child ID'], $row['Parent ID'], $row['text'], $row['desc']);
    $nodeList[] = $node;
}

$linkKey = 1;
foreach($nodeList as $node)
{
//    if($node->getParentType() == "DataElement")
//    {
        foreach($nodeList as $innerNode)
        {
            if($node->getChildId() == $innerNode->getParentId())
            {

                if($node->getChildType() != "")
                {
                    $innerNode->setType($node->getChildType());
                }
                if($innerNode->getParentType() != "")
                {
                    $node->setType($innerNode->getParentType());
                }
                $linkList[] = new Link($linkKey,$node->getKey(),$innerNode->getKey(),$node->getDesc());
                $linkKey++;
                break;
            }
        }
//    }
}
echo '<pre>';
print_r($nodeList);
echo '</pre>';

echo '<pre>';
print_r($linkList);
echo '</pre>';


//$finalArray = array();
//$finalArray[] = $nodeList;
//$finalArray[] = $linkList;
//
//echo json_encode($finalArray);

