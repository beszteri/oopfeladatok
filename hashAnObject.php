<?php

function hash($object){
    $hashCode = spl_object_hash($object);
    return $hashCode;
}

