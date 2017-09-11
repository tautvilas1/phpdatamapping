<?php
/**
 * Created by PhpStorm.
 * User: Tautvilas
 * Date: 07/09/2017
 * Time: 22:12
 */

class Link
{

    private $key, $from, $to, $desc;

    /**
     * Link constructor.
     * @param $key
     * @param $from
     * @param $to
     */
    public function __construct($key, $from, $to, $desc)
    {
        $this->key = $key;
        $this->from = $from;
        $this->to = $to;
        $this->desc = $desc;
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
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param mixed $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * @return mixed
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param mixed $to
     */
    public function setTo($to)
    {
        $this->to = $to;
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