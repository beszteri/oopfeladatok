<?php


class Document
{

    private $tables;
    private $counter;

    public function addToTables($table){
        $this->tables = $table;
    }

    public function deleteFromTables($name){
        $this->counter = 0;
        for ($i = 0; $i < count($this->tables); $i++){
            if ($this->tables[$i]['name'] == $name){
                $this->counter = $i;
            }
        }
        unset($this->tables[$this->counter]);
    }

    public function findDataField($name){
        if(gettype($name) == 'string'){
            foreach ($this->tables as $table){
                for ($i = 0; $i < count($table->getDataFields); $i++){
                    if (strpos($table->getDataFields->getData, $name)){
                        return array($table->getDataFields->getColoumn, $table->getDataFields->getRow);
                    }
                }
            }
        }
        foreach ($this->tables as $table){
            for ($i = 0; $i < count($table->getDataFields); $i++){
                if ($table->getDataFields->getData == $name){
                    return array($table->getDataFields->getColoumn, $table->getDataFields->getRow);
                }
            }
        }
    }

}