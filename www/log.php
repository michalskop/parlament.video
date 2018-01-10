<?php
$arr = [
    date("Y-m-d H:i:s"),
    json_encode($_REQUEST),
    json_encode($_SERVER)
];
$file = fopen('log.csv','a');
fputcsv($file,$arr);
fclose($file);
?>
