<?php

$row = 1;
if (($handle = fopen("test.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle)) !== FALSE) {
        $num = count($data);
        $row++;
        for ($i=0; $i < $num; $i++) {
            echo $data[$i] . "<br />\n";
        }
    }
    fclose($handle);
}
?>