<?php

include 'includes/autoloader.inc.php';
include 'includes/arrayToCsv.inc.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

    $datafield1 = new DataField(1,1, 1);
    $datafield2 = new DataField(2,1, "asd");
    $datafield3 = new DataField(2,3, "asd");
    $datafield4 = new DataField(1,5, "asd");
    $datafield6 = new DataField(3,5, "asd");

    $datafield5 = new DataField(4,2,"tststst");
    $table1 = new Table();
    $table1->addToDataFields($datafield1);
    $table1->addToDataFields($datafield2);
    $table1->addToDataFields($datafield3);
    $table1->addToDataFields($datafield4);
    $table1->addToDataFields($datafield5);
    $table1->addToDataFields($datafield6);

    $table1->setTableName("kotya");
    $table2 = new Table();
    $table2->setTableName("cica");

    $document = new Document();
    $document->setDocuName("dok");
    $document->addToTables($table1);
    $document->addToTables($table2);


    echo "<br>";
    echo "<br>";

    $document->displayDocument();

print_r($table1->__toString());
echo "<br>";
echo "<br>";

    print_r(array2csv($table1->__toString()));

?>

</body>
</html>


