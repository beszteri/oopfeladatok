<?php

//---------go!

class Table
{

    private $tableName;
    private $dataFields;


    public function addToDataFields(DataField $dataField)
    {
        $this->dataFields[$dataField->getColoumn()][$dataField->getRow()] = $dataField->getData();
    }


    public function removeFromDataFields($coloumn, $row)
    {
        unset($this->dataFields[$coloumn][$row]);

        /*$counter = 0;
        for ($i = 0; $i < count($this->dataFields); $i++)
        {
            if ($this->dataFields[$i]['coloumn'] == $coloumn && $this->dataFields[$i]['row'] == $row)
            {
                $counter = $i;
            }
        }
        unset($this->dataFields[$counter]);*/
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

    /**
     * @param mixed $dataFields
     */
    public function setDataFields($dataFields)
    {
        $this->dataFields = $dataFields;
    }

    public function __toString()
    {
        return $this->dataFields;
    }

}