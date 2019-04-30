<?php

$string = $_REQUEST["json"];
$json_a = json_decode($string, true);

echo $json_a['ID'];
echo "\n";
echo $json_a['Name'];
?>