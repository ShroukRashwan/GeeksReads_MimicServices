<?php

$string = $_REQUEST["Json"];
$json_in = json_decode($string, true);
$json_out = new \stdClass();

if ($json_in['UserID'] == "iiiidddd1142019" && $json_in['UserToken'] == "xYzAbCdToKeN")
{
    $json_out->FullName = "Mahmoud Mohamed Morsy";
    $json_out->UserName = "MahmoudMorsy";
    $json_out->Country = "Egypt";
    $json_out->BirthDate = "1/9/1995";
    $json_out->EmailAddress = "mahmoud_morsy@live.com";
    $json_out->Gender = "Male";
    $json_out->PhotoUrl = "http://geeksreads.000webhostapp.com/LoggedInUser/PP.jpg";
}
else
{
    $json_out->FullName = "";
    $json_out->UserName = "";
    $json_out->Country = "";
    $json_out->BirthDate = "";
    $json_out->EmailAddress = "";
    $json_out->Gender = "";
}

$json_out = json_encode($json_out);

echo $json_out;
?>