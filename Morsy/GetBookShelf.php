<?php

$string = $_REQUEST["Json"];
$json_in = json_decode($string, true);
$json_out = new \stdClass();

if ($json_in['UserID'] == "iiiidddd1142019" && $json_in['UserToken'] == "xYzAbCdToKeN")
{
    if ($json_in['ShelfName'] == "Read")
    {
        $json_out->ShelfCount = "15";
    }
    else if ($json_in['ShelfName'] == "WantToRead")
    {
        $json_out->ShelfCount = "30";
    }
    else if ($json_in['ShelfName'] == "CurrentlyReading")
    {
        $json_out->ShelfCount = "49";
    }
}
else
{
    $json_out->ShelfCount = "0";
}

$json_out = json_encode($json_out);

echo $json_out;
?>