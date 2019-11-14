<?php


class Document
{

    private $docuName;
    private $tables;

    public function addToTables($table)
    {
        $this->tables[] = $table;
    }

    public function deleteFromTables($name)
    {
        $tempArray = array();
        /** @var Table $table */
        foreach ($this->tables as $table) {
            if ($table->getTableName() !== $name) {
                $tempArray = $table;
            }
        }
        $this->tables = array();
        $this->tables = $tempArray;
    }


    public function findDataField($data)
    {
        //if(gettype($data) === "string")
        $foundFields = array();
        foreach ($this->tables as $table) {
            foreach ($table->getDataFields() as $dataField) {
                if (in_array($data, $dataField)) {
                    array_push($foundFields, [array_search($dataField, $table->getDataFields()), array_search($data, $dataField)]);
                }
            }
        }
        return $foundFields;
    }

    public function displayDocument()
    {
        foreach ($this->tables as $table) {
            print "<pre>";
            print_r($table);
            print "</pre>";
        }
    }

    public function duplicateTable($tableName, $newName)
    {
        $newTable = new Table();
        foreach ($this->tables as $table)
        {
            if ($table->getTableName() === $tableName)
            {
                $newTable->setTableName($newName);
                $newTable->setDataFields($table->getDataFields());
            }
        }
        return $newTable;
    }


    /**
     * @return mixed
     */
    public function getTables()
    {
        return $this->tables;
    }

    /**
     * @return mixed
     */
    public function getDocuName()
    {
        return $this->docuName;
    }

    /**
     * @param mixed $docuName
     */
    public function setDocuName($docuName)
    {
        $this->docuName = $docuName;
    }


}