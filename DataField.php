<?php

class DataField{

    private $coloumn;
    private $row;
    private $data;

    /**
     * DataField constructor.
     * @param $coloumn
     * @param $row
     * @param $data
     */
    public function __construct($coloumn, $row, $data)
    {
        $this->coloumn = $coloumn;
        $this->row = $row;
        $this->data = $data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getColoumn()
    {
        return $this->coloumn;
    }

    /**
     * @return mixed
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }





}