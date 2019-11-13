<?php


class Table
{

    private $tableName;
    private $dataFields;
    private $counter;

    public function addToDataFields($dataField){
        $this->dataFields = $dataField;
    }

    public function removeFromDataFields($coloumn, $row){
        $this->counter = 0;
        for ($i = 0; $i < count($this->dataFields); $i++) {
            if ($this->dataFields[$i]['coloumn'] == $coloumn && $this->dataFields[$i]['row'] == $row) {
                $this->counter = $i;
            }
        }
        unset($this->dataFields[$this->counter]);
    }

    /**
     * @param mixed $tableName
     */
    public function setTableName($tableName)
    {
        $this->tableName = $tableName;
    }

    /**
     * @return mixed
     */
    public function getTableName()
    {
        return $this->tableName;
    }

    /**
     * @return mixed
     */
    public function getDataFields()
    {
        return $this->dataFields;
    }



}