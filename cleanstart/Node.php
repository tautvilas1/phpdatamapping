<?php

class Node
{

    private $id, $key, $relationship, $parentType, $type, $childId, $parentId, $text, $desc;


    public function __construct($id, $key, $relationship, $parentType, $childType, $childId, $parentId, $text, $desc)
    {
        $this->id = $id;
        $this->key = $key;
        $this->relationship = $relationship;
        $this->parentType = $parentType;
        $this->childType = $childType;
        $this->childId = $childId;
        $this->parentId = $parentId;
        $this->text = $text;
        $this->desc = $desc;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param mixed $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @return mixed
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * @param mixed $relationship
     */
    public function setRelationship($relationship)
    {
        $this->relationship = $relationship;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getChildId()
    {
        return $this->childId;
    }

    /**
     * @param mixed $childId
     */
    public function setChildId($childId)
    {
        $this->childId = $childId;
    }

    /**
     * @return mixed
     */
    public function getChildType()
    {
        return $this->childType;
    }

    /**
     * @param mixed $childType
     */
    public function setChildType($childType)
    {
        $this->childType = $childType;
    }

    /**
     * @return mixed
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * @param mixed $parentId
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
    }

    /**
     * @return mixed
     */
    public function getParentType()
    {
        return $this->parentType;
    }

    /**
     * @param mixed $parentType
     */
    public function setParentType($parentType)
    {
        $this->parentType = $parentType;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }


    /**
     * @return mixed
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @param mixed $desc
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
    }

}