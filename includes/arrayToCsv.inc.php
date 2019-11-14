<?php

function array2csv($tables, $delimiter = ',', $enclosure = '"', $escape_char = "\\")
{
    $f = fopen('C:\xampp\htdocs\oopfeladatok\createdCsv.csv', 'a+');
    foreach ($tables as $table) {
        fputcsv($f,  $table, $delimiter, $enclosure, $escape_char);
    }
    rewind($f);
    return stream_get_contents($f);
}

